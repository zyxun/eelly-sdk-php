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

$sourceDir = __DIR__.'/../../../../eelly-sdk-php/src';
if (file_exists($customDir)) {
    require __DIR__.'/src/Psr4Autoloader.php';
    $loader = new \Eelly\Psr4Autoloader();
    $namespaceMap = [
        'Eelly\SDK'      => $sourceDir.'/src/SDK',
        'Eelly\Exception'=> $sourceDir.'/src/Exception',
        'Eelly\DTO'      => $sourceDir.'/src/DTO',
    ];
    foreach ($namespaceMap as $key => $value) {
        $loader->addNamespace($key, $value);
    }
    $loader->register();
}
