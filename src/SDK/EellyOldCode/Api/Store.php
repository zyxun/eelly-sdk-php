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

namespace Eelly\SDK\EellyOldCode\Api;

use Eelly\SDK\EellyClient;

class Store
{
    public function getOne(int $storeId): array
    {
        return EellyClient::request('eellyOldCode/store', __FUNCTION__, true, $storeId);
    }

    public function newGoodsCount(int $storeId, int $days = 7): int
    {
        return EellyClient::request('eellyOldCode/store', __FUNCTION__, true, $storeId, $days);
    }

    public static function getStoreStatus(int $storeId): int
    {
        return EellyClient::request('eellyOldCode/store', __FUNCTION__, true, $storeId);
    }
}
