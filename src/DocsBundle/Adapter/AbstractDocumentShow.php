<?php

declare(strict_types=1);

/*
 * This file is part of eelly package.
 *
 * (c) eelly.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Eelly\DocsBundle\Adapter;

use Eelly\Di\Injectable;
use phpDocumentor\Reflection\DocBlockFactory;
use ReflectionClass;
use SplFileObject;

/**
 * Class AbstractDocumentShow.
 */
abstract class AbstractDocumentShow extends Injectable
{
    public function initialize(): void
    {
        $this->assignModuleList();
    }

    /**
     * parser markdown.
     *
     * @param $markdown
     *
     * @return string
     */
    protected function parserMarkdown(string $markdown): string
    {
        static $parser;
        if (null === $parser) {
            $parser = new \Parsedown();
        }

        return $parser->text($markdown);
    }

    /**
     * 获取文件内容.
     *
     * @param string $filename        文件名
     * @param int    $startLineNumber 起始行
     * @param int    $lineNumber      行数
     *
     * @return string
     */
    protected function getFileContent(string $filename, int $startLineNumber, int $lineNumber): string
    {
        if (!is_file($filename)) {
            return '';
        }
        $content = '';
        $lineCnt = 0;
        $lineNumberCnt = 0;
        $file = new SplFileObject($filename);
        while (!$file->eof()) {
            ++$lineCnt;
            $line = $file->fgets();
            if ($startLineNumber <= $lineCnt) {
                $content .= $line;
                ++$lineNumberCnt;
            }
            if ($lineNumber == $lineNumberCnt) {
                break;
            }
        }

        return $content;
    }

    /**
     * @param string $docComment
     *
     * @return array
     */
    protected function getDocComment(string $docComment)
    {
        static $factory;
        if (null === $factory) {
            $factory = DocBlockFactory::createInstance();
        }
        $docblock = $factory->create($docComment);
        $summary = $docblock->getSummary();
        $description = $docblock->getDescription();
        $authors = $docblock->getTagsByName('author');
        $params = $docblock->getTagsByName('param');

        return [
            'summary'     => $summary,
            'description' => $description,
            'authors'     => $authors,
            'params'      => $params,
        ];
    }

    protected function assignModuleList(): void
    {
        $moduleList = [];
        foreach ($this->config->modules as $module => $value) {
            if (!class_exists($value->className)) {
                require $value->path;
            }
            $reflectionClass = new ReflectionClass($value->className);
            $docComment = $reflectionClass->getDocComment();
            $factory = \phpDocumentor\Reflection\DocBlockFactory::createInstance();
            $docblock = $factory->create($docComment);
            $summary = $docblock->getSummary();
            $moduleName = substr($value->className, 0, -7);
            $moduleList[] = ['moduleName' => $moduleName, 'url' => '/'.$module, 'summary' => $summary];
        }
        $this->view->setVar('moduleList', $moduleList);
    }
}
