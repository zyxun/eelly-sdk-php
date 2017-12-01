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
use Eelly\SDK\Order\Service\OrderInterface;
use Eelly\DTO\UidDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Order implements OrderInterface
{
    /**
     * 新增订单
     * 新增订单信息.
     *
     * @param array             $orderData                  订单数据
     * @param int               $orderData["0"]["storeId"]  店铺id
     * @param array             $orderData["0"]["goodsIds"] 商品数据
     * @param int               $addrId                     用户地址id
     * @param \Eelly\DTO\UidDTO $user                       登录用户信息
     *
     * @throws \Eelly\SDK\Order\Exception\OrderException
     *
     * @return bool 新增结果
     * @requestExample({
     *     "orderData":[
     *         {
     *             "storeId":1,
     *             "goodsIds":[1, 2, 3]
     *         }
     *     ],
     *     "addrId":3
     * })
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年10月25日
     */
    public function addOrder(array $orderData, int $addrId, UidDTO $user = null): bool
    {
        return EellyClient::request('order/order', __FUNCTION__, true, $orderData, $addrId, $user);
    }

    /**
     * 新增订单
     * 新增订单信息.
     *
     * @param array             $orderData                  订单数据
     * @param int               $orderData["0"]["storeId"]  店铺id
     * @param array             $orderData["0"]["goodsIds"] 商品数据
     * @param int               $addrId                     用户地址id
     * @param \Eelly\DTO\UidDTO $user                       登录用户信息
     *
     * @throws \Eelly\SDK\Order\Exception\OrderException
     *
     * @return bool 新增结果
     * @requestExample({
     *     "orderData":[
     *         {
     *             "storeId":1,
     *             "goodsIds":[1, 2, 3]
     *         }
     *     ],
     *     "addrId":3
     * })
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年10月25日
     */
    public function addOrderAsync(array $orderData, int $addrId, UidDTO $user = null)
    {
        return EellyClient::request('order/order', __FUNCTION__, false, $orderData, $addrId, $user);
    }

    /**
     * 修改订单
     * 修改订单信息.
     *
     * @param array             $orderData                订单数据
     * @param int               $orderData["orderId"]     订单id
     * @param int               $orderData["updateType"]  修改类型 1修改订单金额 2修改订单运费
     * @param int               $orderData["updateValue"] 修改的值
     * @param \Eelly\DTO\UidDTO $user                     登录用户信息
     *
     * @throws \Eelly\SDK\Order\Exception\OrderException
     *
     * @return bool 修改结果
     * @requestExample({
     *     "orderData":{
     *         "orderId":1,
     *         "updateType":1,
     *         "updateValue":12
     *     }
     * })
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年10月25日
     */
    public function updateOrder(array $orderData, UidDTO $user = null): bool
    {
        return EellyClient::request('order/order', __FUNCTION__, true, $orderData, $user);
    }

    /**
     * 修改订单
     * 修改订单信息.
     *
     * @param array             $orderData                订单数据
     * @param int               $orderData["orderId"]     订单id
     * @param int               $orderData["updateType"]  修改类型 1修改订单金额 2修改订单运费
     * @param int               $orderData["updateValue"] 修改的值
     * @param \Eelly\DTO\UidDTO $user                     登录用户信息
     *
     * @throws \Eelly\SDK\Order\Exception\OrderException
     *
     * @return bool 修改结果
     * @requestExample({
     *     "orderData":{
     *         "orderId":1,
     *         "updateType":1,
     *         "updateValue":12
     *     }
     * })
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年10月25日
     */
    public function updateOrderAsync(array $orderData, UidDTO $user = null)
    {
        return EellyClient::request('order/order', __FUNCTION__, false, $orderData, $user);
    }

    /**
     * 删除订单
     * 删除订单.
     *
     * @param int               $orderId 订单id
     * @param \Eelly\DTO\UidDTO $user    登录用户信息
     *
     * @throws \Eelly\SDK\Order\Exception\OrderException
     *
     * @return bool 删除结果
     * @requestExample({
     *     "orderId":1
     * })
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年10月25日
     */
    public function deleteOrder(int $orderId, UidDTO $user = null): bool
    {
        return EellyClient::request('order/order', __FUNCTION__, true, $orderId, $user);
    }

    /**
     * 删除订单
     * 删除订单.
     *
     * @param int               $orderId 订单id
     * @param \Eelly\DTO\UidDTO $user    登录用户信息
     *
     * @throws \Eelly\SDK\Order\Exception\OrderException
     *
     * @return bool 删除结果
     * @requestExample({
     *     "orderId":1
     * })
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年10月25日
     */
    public function deleteOrderAsync(int $orderId, UidDTO $user = null)
    {
        return EellyClient::request('order/order', __FUNCTION__, false, $orderId, $user);
    }

    /**
     * 获取订单信息
     * 获取订单信息.
     *
     * @param int $orderId 订单id
     *
     * @throws \Eelly\SDK\Order\Exception\OrderException
     *
     * @return array 订单信息
     * @requestExample({
     *     "orderId":1
     * })
     * @returnExample({
     *     "orderId":1,
     *     "orderSn":"xxxxxxx",
     *     "orderAmount":123,
     *     "freight":123,
     *     "commission":0,
     *     "discountAmount":0,
     *     "logisticsName":"配送方式",
     *     "createdTime":"1970-01-01 01:01:01",
     *     "sellerInfo":{
     *         "storeName":"店铺名称",
     *         "sellerName":"卖家名称",
     *         "phone":"13xxxxxxxx"
     *     },
     *     "buyerInfo":{
     *         "nickname":"买家昵称",
     *         "consignee":"收货人",
     *         "address":"收货地址",
     *         "phone":"13xxxxxxxx"
     *     },
     *     "goodsInfo":[
     *         {
     *             "goodsId":1,
     *             "goodsImage":"http://image.eelly.test/abc.jpg",
     *             "goodsName":"商品名称",
     *             "goodsNumber":"货号",
     *             "singlePrice":"123",
     *             "specInfo":[
     *                 {
     *                     "color":"颜色",
     *                     "size":"尺码",
     *                     "price":123,
     *                     "quantity":1
     *                 }
     *             ],
     *             "goodsCount":2,
     *             "totalPrice":10.00
     *         }
     *     ]
     * })
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年10月25日
     */
    public function getOrderInfo(int $orderId): array
    {
        return EellyClient::request('order/order', __FUNCTION__, true, $orderId);
    }

    /**
     * 获取订单信息
     * 获取订单信息.
     *
     * @param int $orderId 订单id
     *
     * @throws \Eelly\SDK\Order\Exception\OrderException
     *
     * @return array 订单信息
     * @requestExample({
     *     "orderId":1
     * })
     * @returnExample({
     *     "orderId":1,
     *     "orderSn":"xxxxxxx",
     *     "orderAmount":123,
     *     "freight":123,
     *     "commission":0,
     *     "discountAmount":0,
     *     "logisticsName":"配送方式",
     *     "createdTime":"1970-01-01 01:01:01",
     *     "sellerInfo":{
     *         "storeName":"店铺名称",
     *         "sellerName":"卖家名称",
     *         "phone":"13xxxxxxxx"
     *     },
     *     "buyerInfo":{
     *         "nickname":"买家昵称",
     *         "consignee":"收货人",
     *         "address":"收货地址",
     *         "phone":"13xxxxxxxx"
     *     },
     *     "goodsInfo":[
     *         {
     *             "goodsId":1,
     *             "goodsImage":"http://image.eelly.test/abc.jpg",
     *             "goodsName":"商品名称",
     *             "goodsNumber":"货号",
     *             "singlePrice":"123",
     *             "specInfo":[
     *                 {
     *                     "color":"颜色",
     *                     "size":"尺码",
     *                     "price":123,
     *                     "quantity":1
     *                 }
     *             ],
     *             "goodsCount":2,
     *             "totalPrice":10.00
     *         }
     *     ]
     * })
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年10月25日
     */
    public function getOrderInfoAsync(int $orderId)
    {
        return EellyClient::request('order/order', __FUNCTION__, false, $orderId);
    }

    /**
     * 获取店铺订单的买家id.
     *
     * @param int $sellerId 卖家id
     *
     * @throws OrderException
     *
     * @requestExample()
     * @returnExample()
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     * @since  2017年12月1日
     * @validation(
     *     @digit(0, {message:"非法的卖家id"})
     * )
     */
    public function getBuyerId(int $sellerId)
    {
        return EellyClient::request('order/order', __FUNCTION__, true, $sellerId);
    }

    /**
     * @return self
     */
    public static function getInstance(): self
    {
        static $instance;
        if (null === $instance) {
            $instance = new self();
        }

        return $instance;
    }
}