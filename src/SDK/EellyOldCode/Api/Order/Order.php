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

namespace Eelly\SDK\EellyOldCode\Api\Order;

use Eelly\SDK\EellyClient;

/**
 * Class Order.
 *
 * var/eelly-old-code/modules/Order/Service/OrderService.php
 *
 * @author hehui<hehui@eelly.net>
 */
class Order
{
    /**
     * 获取收货地址
     * 
     * @param int $addressId
     * @param int $userId
     * @return type
     */
    public function getAddress(int $addressId, int $userId)
    {
        return EellyClient::request('eellyOldCode/order/order', __FUNCTION__, true, $addressId, $userId);
    }
    
    /**
     * 获取能使用的优惠金额.
     *
     * @param float $money     金额
     * @param int $userId    用户ID
     * @param int $storeId   店铺ID
     * @param int $couponsId 优化券ID
     *
     * @return array
     *
     */
    public function getCouponFree(float $money, int $userId, int $storeId, int $couponsId = 0)
    {
        return EellyClient::request('eellyOldCode/order/order', __FUNCTION__, true, $money, $userId, $storeId, $couponsId);
    }
}
