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
    
    /**
     * 更改订单商品库存
     *
     * @param array $data          商品获取其他信息
     * @param int $data[0]['storeId']  店铺ID
     * @param int $data[0]['goods'][0]['goodsId']  商品ID
     * @param int $data[0]['goods'][0]['spec']  商品规格
     * @param int $data[0]['goods'][0]['spec'][0]['quantity'] 商品数量
     * @param int $data[0]['goods'][0]['spec'][0]['specId'] 规格ID
     * @param string $operation  操作(下单减库存,取消订单加库存)
     * 
     *
     */
    public function changeOrderGoodsStock(array $data, string $operation = '-')
    {
        return EellyClient::request('eellyOldCode/order/order', __FUNCTION__, true, $data, $operation);
    }
}
