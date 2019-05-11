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

namespace Eelly\Console;

use PhpParser\BuilderFactory;
use PhpParser\Node\Expr\StaticCall;
use PhpParser\Node\Identifier;
use PhpParser\Node\Name;
use PhpParser\Node\Stmt\Return_;
use PhpParser\Node\Stmt\Use_;
use PhpParser\ParserFactory;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GenerateCodeCommand extends Command
{
    protected static $defaultName = 'generate-code';

    protected function configure(): void
    {
        $this->setDescription('通过逻辑层代码生成sdk代码')
            ->setHelp(
                <<<EOF
                使用示例:
                vendor/bin/eellysdk generate-code src/User/Logic/LoginLogic.php
EOF
        );
        $this->addArgument('file', InputArgument::REQUIRED, '逻辑层代码路径(例如:src/User/Logic/LoginLogic.php)');
    }

    protected function execute(InputInterface $input, OutputInterface $output): void
    {
        $file = $input->getArgument('file');
        if (!file_exists($file)) {
            throw new \RuntimeException(sprintf('文件不存在(%s)', $file));
        }
        $parser = (new ParserFactory())->create(ParserFactory::PREFER_PHP7);
        $stmts = $parser->parse(\file_get_contents($file));
        $factory = new BuilderFactory();
        $nodes = [];
        foreach ($stmts as $item) {
            // namespace
            if ('Stmt_Namespace' == $item->getType()) {
                $moduleName = $item->name->getFirst();
                $namespace = sprintf('Eelly\SDK\%s\Api', $moduleName);
                $node = $factory->namespace($namespace);
                $node->addStmt($factory->use('Eelly\SDK\EellyClient'));
                foreach ($item->stmts as $classStmt) {
                    // class
                    if ('Stmt_Class' == $classStmt->getType()) {
                        $className = substr((string) $classStmt->name, 0, -5);
                        $newClass = $factory->class($className);
                        // methods
                        foreach ($classStmt->stmts as $methodStmt) {
                            if ('Stmt_ClassMethod' == $methodStmt->getType()) {
                                $newMmethod = $factory
                                    ->method((string) $methodStmt->name)
                                    ->makePublic()
                                    ->makeStatic()
                                    ->setReturnType($methodStmt->getReturnType());
                                // args
                                $args = [
                                    new \PhpParser\Node\Arg(new \PhpParser\Node\Scalar\String_(lcfirst($moduleName).'/'.lcfirst($className))),
                                    new \PhpParser\Node\Arg(new \PhpParser\Node\Scalar\MagicConst\Function_()),
                                ];
                                // params
                                $argThree = [];
                                foreach ($methodStmt->getParams() as $param) {
                                    if ($param->type instanceof Name && 'UidDTO' == $param->type->getFirst()) {
                                        continue;
                                    }
                                    $argThree[] = new \PhpParser\Node\Expr\ArrayItem(
                                        new \PhpParser\Node\Expr\Variable($param->var->name),
                                        new \PhpParser\Node\Scalar\String_($param->var->name)
                                    );
                                    $newMmethod->addParam($param);
                                }

                                if (!empty($argThree)) {
                                    $args[] = new \PhpParser\Node\Arg(new \PhpParser\Node\Expr\Array_($argThree));
                                }
                                $newMmethod->addStmt(new Return_(
                                    new StaticCall(new Name('EellyClient'), new Identifier('requestJson'), $args)
                                ));
                                $newClass->addStmt($newMmethod);
                            }
                        }
                        $node->addStmt($newClass);
                    } elseif ($classStmt instanceof Use_) {
                        if ('Eelly' == $classStmt->uses[0]->name->getFirst() && 'UidDTO' != $classStmt->uses[0]->name->getLast()) {
                            $node->addStmt($classStmt);
                        }
                    }
                }
                $nodes[] = $node->getNode();
                break;
            } else {
                $nodes[] = $item;
            }
        }
        $prettyPrinter = new \PhpParser\PrettyPrinter\Standard();
        $newCode = $prettyPrinter->prettyPrintFile($nodes);
        $output->writeln($newCode);
    }
}
