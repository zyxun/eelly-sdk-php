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

use Eelly\DTO\UidDTO;
use Eelly\SDK\EellyClient;
use Eelly\SDK\Order\Service\SellerOrderInterface;


class SellerOrder implements SellerOrderInterface
{
    /**
     * @inheritDoc
     */
    public function myAppletOrders(int $tab = 0, int $page = 1, int $limit = 20, UidDTO $uidDTO = null): array
    {
        return EellyClient::request('order/sellerOrder', __FUNCTION__, true, $tab, $page, $limit);
    }

}