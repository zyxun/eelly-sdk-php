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
use Eelly\SDK\Order\Service\RefundInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Refund
{
    /**
     * 快速退款，对外接口.
     *
     * @param int $orderId 订单ID
     * @param int $money 退款金额
     * @param int $sellerId 卖家ID
     * @param int $type 操作者类型：0 系统或管理员操作 1 买家操作 2 卖家操作
     * @param UidDTO $user 当前登录的用户
     * @return array
     * 
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2018年04月24日
     */
    public function quickReturnMoney(int $orderId, int $money, int $sellerId, int $type = 0, UidDTO $user = null)
    {
        return EellyClient::request('order/refund', 'quickReturnMoney', true, $orderId, $money, $sellerId, $type, $user);
    }

    /**
     * 获取后台订单退货退款信息.
     *
     * @param int $orderId
     *
     * @return array
     *
     * @author zhangyangxun
     *
     * @since 2018-10-11
     */
    public function getManageRefund(int $orderId): array
    {
        return EellyClient::request('order/refund', 'getManageRefund', true, $orderId);
    }

    /**
     * 获取后台订单退货退款信息.
     *
     * @param int $orderId
     *
     * @return array
     *
     * @author zhangyangxun
     *
     * @since 2018-10-11
     */
    public function getManageRefundAsync(int $orderId)
    {
        return EellyClient::request('order/refund', 'getManageRefund', false, $orderId);
    }

    /**
     * 后台退款订单列表
     *
     * @param array $condition
     * @param int $page
     * @param int $limit
     * @param string $fieldScope
     * @return array
     *
     * @author zhangyangxun
     * @since 2018-11-20
     */
    public function listManageRefundOrder(array $condition, int $page, int $limit, string $fieldScope): array
    {
        return EellyClient::request('order/refund', 'listManageRefundOrder', true, $condition, $page, $limit, $fieldScope);
    }

    /**
     * 后台退款订单列表
     *
     * @param array $condition
     * @param int $page
     * @param int $limit
     * @param string $fieldScope
     * @return array
     *
     * @author zhangyangxun
     * @since 2018-11-20
     */
    public function listManageRefundOrderAsync(array $condition, int $page, int $limit, string $fieldScope)
    {
        return EellyClient::request('order/refund', 'listManageRefundOrder', false, $condition, $page, $limit, $fieldScope);
    }

    /**
     * 获取时间区间内店铺退货退款成功的总金额
     *
     * @param array $storeIds 店铺id
     * @param int   $sTime   开始时间
     * @param int   $eTime   结束时间
     * @author wechan
     * @since  2018年11月28日
     */
    public function getCompleteRefundByStoreId($storeIds, $sTime, $eTime): array
    {
        return EellyClient::request('order/refund', 'getCompleteRefundByStoreId', true, $storeIds, $sTime, $eTime);
    }

    /**
     * 获取时间区间内店铺退货退款成功的总金额
     *
     * @param array $storeIds 店铺id
     * @param int   $sTime   开始时间
     * @param int   $eTime   结束时间
     * @author wechan
     * @since  2018年11月28日
     */
    public function getCompleteRefundByStoreIdAsync($storeIds, $sTime, $eTime)
    {
        return EellyClient::request('order/refund', 'getCompleteRefundByStoreId', false, $storeIds, $sTime, $eTime);
    }

    /**
     * 根据订单id 返回退货退款信息
     *
     * @param int $orderId 订单id
     * @return array
     *
     * @author wechan
     * @since 2019年07月29日
     */
    public function getOrderRefundInfo(int $orderId):array
    {
        return EellyClient::request('order/refund', 'getOrderRefundInfo', true, $orderId);
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