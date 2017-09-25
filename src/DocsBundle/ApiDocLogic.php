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
use Eelly\Mvc\Controller;
use Phalcon\Mvc\View;

/**
 * Class ApiDoc.
 */
class ApiDocLogic extends Controller
{
    public function onConstruct(): void
    {
        $this->application->useImplicitView(true);
        $this->getDI()->setShared('view', function () {
            $view = new View();
            $view->setViewsDir(__DIR__.'/Resources/views/');
            $view->setLayoutsDir(__DIR__.'/Resources/views/');
            $view->setLayout('apidoc/layout');
            $view->setRenderLevel(
                View::LEVEL_LAYOUT
            );
            $view->registerEngines([
                '.phtml'  => View\Engine\Php::class,
            ]);
            $view->start();

            return $view;
        });
    }

    /**
     * 首页.
     */
    public function home(): void
    {
        $this->rendBody(HomeDocumentShow::class);
    }

    /**
     * 模块.
     *
     * @param string $module
     */
    public function module(string $module): void
    {
        $this->rendBody(ModuleDocumentShow::class, [$module]);
    }

    /**
     * 服务
     *
     * @param string $module
     */
    public function service(string $module): void
    {
        $class = $this->dispatcher->getParam('class');
        $this->rendBody(ServiceDocumentShow::class, [$module, $class]);
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
        $this->rendBody(ApiDocumentShow::class, [$module, $class, $method]);
    }

    /**
     * @param string $class
     * @param array  $params
     */
    private function rendBody(string $class, array $params = []): void
    {
        $documentShow = $this->di->get($class, $params);
        if (method_exists($documentShow, 'initialize')) {
            $documentShow->initialize();
        }
        $documentShow->renderBody();
    }
}
