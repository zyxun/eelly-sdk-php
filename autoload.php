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

if (!class_exists('Eelly\Psr4Autoloader')) {
    require __DIR__.'/src/Psr4Autoloader.php';
    $loader = new \Eelly\Psr4Autoloader();
    $namespaceMap = [
        'Eelly\Console'       => __DIR__.'/src/Console',
        'Eelly\DTO'           => __DIR__.'/src/DTO',
        'Eelly\Exception'     => __DIR__.'/src/Exception',
        'Eelly\SDK'           => __DIR__.'/src/SDK',
    ];
    foreach ($namespaceMap as $key => $value) {
        $loader->addNamespace($key, $value);
    }
    $loader->register();
    unset($namespaceMap, $loader);
}
