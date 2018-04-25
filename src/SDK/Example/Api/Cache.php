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

namespace Eelly\SDK\Example\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Example\Service\CacheInterface;

class Cache implements CacheInterface
{
    public function annotionString(string $name): string
    {
        return EellyClient::request('example/cache', __FUNCTION__, true, $name);
    }

    public function annotionArray(string $name): array
    {
        return EellyClient::request('example/cache', __FUNCTION__, true, $name);
    }
}
