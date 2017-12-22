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

use Shadon\Application\ApplicationConst;

/**
 * Class HomeDocumentShow.
 */
class HomeDocumentShow extends AbstractDocumentShow implements DocumentShowInterface
{
    public function setViewVars(): void
    {
        if (ApplicationConst::hasRuntimeEnv(ApplicationConst::RUNTIME_ENV_SWOOLE)) {
            /* @var \Eelly\Network\HttpServer $server */
            $server = $this->getDI()->getShared('server');
            $moduleMap = $server->getModuleMap();
        } else {
            $moduleMap = [];
        }
        $this->view->setVar('moduleMap', $moduleMap);
        $this->view->markup = function ($markdown) {
            return $this->parserMarkdown($markdown);
        };
    }
}
