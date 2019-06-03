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

namespace Eelly\SDK\Order\Api;

use Eelly\SDK\EellyClient;

class Relation
{
    public static function totalOrder(int $sellerId, int $buyerId): array
    {
        return EellyClient::requestJson('order/relation', __FUNCTION__, ['sellerId' => $sellerId, 'buyerId' => $buyerId]);
    }
}
