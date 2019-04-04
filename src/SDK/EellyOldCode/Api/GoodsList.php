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

class GoodsList
{
    public static function getLatestGoods(int $storeId, int $limit = 6): array
    {
        return EellyClient::requestJson('eellyOldCode/goodsList', __FUNCTION__, ['storeId' => $storeId, 'limit' => $limit]);
    }
}
