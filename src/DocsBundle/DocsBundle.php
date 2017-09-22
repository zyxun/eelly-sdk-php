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

use Phalcon\Di\Injectable;
use Phalcon\Di\Service;

class DocsBundle extends Injectable
{
    public function register(): void
    {
        $router = $this->router;
        foreach ($this->config->modules as $moduleName => $value) {
            $value = $value->toArray();
            $namespace = str_replace('Module', 'Logic', $value['className']);
            $router->addGet('/', [
                'namespace'      => 'Eelly\DocsBundle',
                'controller'     => 'apiDoc',
                'action'         => 'home',
            ]);
            $router->addGet('/'.$moduleName, [
                'namespace'      => 'Eelly\DocsBundle',
                'controller'     => 'apiDoc',
                'action'         => 'module',
                'params'         => $moduleName,
            ]);
            $router->addGet('/'.$moduleName.'/:controller', [
                'namespace'      => 'Eelly\DocsBundle',
                'controller'     => 'apiDoc',
                'action'         => 'service',
                'params'         => $moduleName,
                'class'          => 1,
            ]);
            $router->addGet('/'.$moduleName.'/:controller/:action', [
                'namespace'      => 'Eelly\DocsBundle',
                'controller'     => 'apiDoc',
                'action'         => 'api',
                'params'         => $moduleName,
                'class'          => 1,
                'method'         => 2,
            ])->setName($moduleName);
        }
    }
}
