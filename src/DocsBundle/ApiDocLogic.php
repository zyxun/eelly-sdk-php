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

namespace Eelly\DocsBundle;

use Eelly\DocsBundle\Adapter\ApiDocumentShow;
use Eelly\DocsBundle\Adapter\HomeDocumentShow;
use Eelly\DocsBundle\Adapter\ModuleDocumentShow;
use Eelly\DocsBundle\Adapter\ServiceDocumentShow;
use Eelly\Events\Listener\ValidateAccessTokenListener;
use Eelly\Mvc\Controller;
use Phalcon\Mvc\View;
use ReflectionClass;

/**
 * Class ApiDoc.
 */
class ApiDocLogic extends Controller
{
    public function onConstruct(): void
    {
        $this->assignModuleList();
        /* @var ValidateAccessTokenListener $validateAccessTokenListener */
        $validateAccessTokenListener = $this->di->getShared(ValidateAccessTokenListener::class);
        $validateAccessTokenListener->pushWhiteName(__CLASS__.'::home');
        $validateAccessTokenListener->pushWhiteName(__CLASS__.'::home');
        $validateAccessTokenListener->pushWhiteName(__CLASS__.'::module');
        $validateAccessTokenListener->pushWhiteName(__CLASS__.'::service');
        $validateAccessTokenListener->pushWhiteName(__CLASS__.'::api');
    }

    /**
     * 首页.
     */
    public function home(): void
    {
        $this->rendBody(HomeDocumentShow::class, __FUNCTION__);
    }

    /**
     * 模块.
     *
     * @param string $module
     */
    public function module(string $module): void
    {
        $this->rendBody(ModuleDocumentShow::class, __FUNCTION__, [$module]);
    }

    /**
     * 服务
     *
     * @param string $module
     */
    public function service(string $module): void
    {
        $class = $this->dispatcher->getParam('class');
        $this->rendBody(ServiceDocumentShow::class, __FUNCTION__, [$module, $class]);
    }

    /**
     * 接口.
     *
     * @param string $module
     */
    public function api(string $module): void
    {
        $class = $this->dispatcher->getParam('class');
        $method = $this->dispatcher->getParam('method');
        $this->rendBody(ApiDocumentShow::class, __FUNCTION__, [$module, $class, $method]);
    }

    /**
     * @param string $class
     * @param string $method
     * @param array  $params
     */
    private function rendBody(string $class, string $method, array $params = []): void
    {
        $documentShow = $this->di->get($class, $params);
        if (method_exists($documentShow, 'initialize')) {
            $documentShow->initialize();
        }
        $documentShow->setViewVars();
    }

    private function assignModuleList(): void
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
