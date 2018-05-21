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
     * {@inheritdoc}
     */
    public function myAppletOrders(int $tab = 0, int $page = 1, int $limit = 20, UidDTO $uidDTO = null): array
    {
        return EellyClient::request('order/sellerOrder', __FUNCTION__, true, $tab, $page, $limit);
    }

    /**
     * @inheritDoc
     */
    public function searchMyAppletOrders(string $keywords, int $tab = 0, int $page = 1, int $limit = 20, UidDTO $uidDTO = null): array
    {
        return EellyClient::request('order/sellerOrder', __FUNCTION__, true, $keywords, $tab, $page, $limit);
    }

    /**
     * {@inheritdoc}
     */
    public function myAppletOrderStats(UidDTO $uidDTO = null): array
    {
        return EellyClient::request('order/sellerOrder', __FUNCTION__, true);
    }

    /**
     * {@inheritdoc}
     */
    public function appletOrderDetail(int $orderId, UidDTO $uidDTO = null): array
    {
        return EellyClient::request('order/sellerOrder', __FUNCTION__, true, $orderId);
    }

    /**
     * {@inheritdoc}
     */
    public function changeAppletOrderPrice(int $orderId, int $price, int $freight, UidDTO $uidDTO = null): bool
    {
        return EellyClient::request('order/sellerOrder', __FUNCTION__, true, $orderId, $price, $freight);
    }

    /**
     * {@inheritdoc}
     */
    public function myAppletMergerOrders(int $orderId, UidDTO $uidDTO = null): array
    {
        return EellyClient::request('order/sellerOrder', __FUNCTION__, true, $orderId);
    }

    /**
     * @inheritDoc
     */
    public function updateLogisticsInfo(string $invoiceCode, string $invoiceName, string $invoiceNo, array $orderIds, UidDTO $uidDTO = null): bool
    {
        return EellyClient::request('order/sellerOrder', __FUNCTION__, true, $invoiceCode, $invoiceName, $invoiceNo, $orderIds);
    }

    /**
     * @inheritDoc
     */
    public function listLiveOrdersByTimes(int $startTime, int $endTime, int $sellerId, int $type): array
    {
        return EellyClient::request('order/sellerOrder', __FUNCTION__, true, $startTime, $endTime, $sellerId, $type);
    }

    /**
     * 获取店铺列表某种状态下的订单数量
     *
     * @param int    $tab    订单筛选值  (0: 全部, 1: 待付款, 2: 待成团, 3: 待发货, 4: 待收货, 5: 待评价)
     * @param int    $page   第几页
     * @param int    $limit  分页大小
     *
     * @return array
     * @requestExample({"tab":1, "page":2, "limit":10})
     * @returnExample(
     * {
     *     "first": 1,
     *     "before": 1,
     *     "current": 1,
     *     "last": 23,
     *     "next": 2,
     *     "totalPages": 23,
     *     "totalItems": 45,
     *     "limit": 2,
     *     "items":[{"sellerId":148086,"num":10}, {"sellerId":2108400,"num":1}]
     * })
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     */
    public function listStoreOrdersNum(int $tab = 0, int $page = 1, int $limit = 20): array
    {
        return EellyClient::request('order/sellerOrder', __FUNCTION__, true, $tab, $page, $limit);
    }

    /**
     * 获取没有发送待付款订单消息的订单
     *
     * @param int    $page   第几页
     * @param int    $limit  分页大小
     *
     * @return array
     * @requestExample({"tab":1, "page":2, "limit":10})
     * @returnExample(
     * {
     *     "first": 1,
     *     "before": 1,
     *     "current": 1,
     *     "last": 23,
     *     "next": 2,
     *     "totalPages": 23,
     *     "totalItems": 45,
     *     "limit": 2,
     *     "items":[{"orderId":5000214,"createdTime":1526292190,"goodsName":"test","buyerId":148086}, {"orderId":5000215,"createdTime":1526292190,"goodsName":"demo","buyerId":148086}]
     * })
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.05.18
     */
    public function listPendingPaymentOrderMessage(int $page, int $limit):array
    {
        return EellyClient::request('order/sellerOrder', __FUNCTION__, true, $page, $limit);
    }

    /**
     * 根据传过来的订单ID，返回要发送消息相关数据
     *
     * @param int $orderId  订单id
     * @return array
     * @requestExample({"orderId":1})
     * @returnExample({"orderId":1,"orderSn":"1813401984","payTime":1526381614,"goodsName":"test","orderAmount":100,"buyerId":148086})
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.05.19
     */
    public function getOrderMessageInfo(int $orderId):array
    {
        return EellyClient::request('order/sellerOrder', __FUNCTION__, true, $orderId);
    }
}
