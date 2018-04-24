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

class BuyerOrder
{
    public function getAppletOrderList(int $uid, int $tab = 0, int $page = 0, int $limit = 20): array
    {
        return EellyClient::request('order/buyerOrder', __FUNCTION__, true, $uid, $tab, $page, $limit);
    }
}
