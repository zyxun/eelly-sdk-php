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
class Refund implements RefundInterface
{
    /**
     * 快速退款，对外接口.
     *
     * @param int $orderId  订单ID
     * @param int $money    退款金额
     * @param int $sellerId 卖家ID
     * @param int $type     操作者类型：0 系统或管理员操作 1 买家操作 2 卖家操作
     *
     * @return array
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2018年04月24日
     */
    public function quickReturnMoney(int $orderId, int $money, int $sellerId, int $type = 0): array
    {
        return EellyClient::request('order/refund', 'quickReturnMoney', true, $orderId, $money, $sellerId, $type);
    }

    /**
     * 快速退款，对外接口.
     *
     * @param int $orderId  订单ID
     * @param int $money    退款金额
     * @param int $sellerId 卖家ID
     * @param int $type     操作者类型：0 系统或管理员操作 1 买家操作 2 卖家操作
     *
     * @return array
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2018年04月24日
     */
    public function quickReturnMoneyAsync(int $orderId, int $money, int $sellerId, int $type = 0)
    {
        return EellyClient::request('order/refund', 'quickReturnMoney', false, $orderId, $money, $sellerId, $type);
    }

    /**
     * 待发货订单，买家申请退款，卖家立即发货操作.
     *
     * @param int $orderId  订单id
     * @param int $sellerId 卖家id
     *
     * @throws \Eelly\SDK\Order\Exception\OrderException
     *
     * @return bool
     *
     * @requestExample({"orderId":5000214, "sellerId":148086})
     * @returnExample({true})
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2018.06.26
     */
    public function immediateDelivery(int $orderId, int $sellerId): bool
    {
        return EellyClient::request('order/refund', 'immediateDelivery', true, $orderId, $sellerId);
    }

    /**
     * 待发货订单，买家申请退款，卖家立即发货操作.
     *
     * @param int $orderId  订单id
     * @param int $sellerId 卖家id
     *
     * @throws \Eelly\SDK\Order\Exception\OrderException
     *
     * @return bool
     *
     * @requestExample({"orderId":5000214, "sellerId":148086})
     * @returnExample({true})
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2018.06.26
     */
    public function immediateDeliveryAsync(int $orderId, int $sellerId)
    {
        return EellyClient::request('order/refund', 'immediateDelivery', false, $orderId, $sellerId);
    }

    /**
     * 卖家同意退款操作 (仅退款).
     *
     * @param int $orderId  订单id
     * @param int $sellerId 卖家id
     *
     * @throws \Eelly\SDK\Order\Exception\OrderException
     *
     * @return bool
     *
     * @requestExample({"orderId":5000214, "sellerId":148086})
     * @returnExample({true})
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2018.06.26
     */
    public function agreeRefundMoney(int $orderId, int $sellerId): bool
    {
        return EellyClient::request('order/refund', 'agreeRefundMoney', true, $orderId, $sellerId);
    }

    /**
     * 卖家同意退款操作 (仅退款).
     *
     * @param int $orderId  订单id
     * @param int $sellerId 卖家id
     *
     * @throws \Eelly\SDK\Order\Exception\OrderException
     *
     * @return bool
     *
     * @requestExample({"orderId":5000214, "sellerId":148086})
     * @returnExample({true})
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2018.06.26
     */
    public function agreeRefundMoneyAsync(int $orderId, int $sellerId)
    {
        return EellyClient::request('order/refund', 'agreeRefundMoney', false, $orderId, $sellerId);
    }

    /**
     * 卖家拒绝退货退款操作.
     *
     * @param int    $orderId  订单id
     * @param int    $sellerId 卖家id
     * @param string $reason   拒绝原因
     * @param string $images   图片凭证(#隔开)
     *
     * @throws \Eelly\SDK\Order\Exception\OrderException
     *
     * @return bool
     *
     * @requestExample({"orderId":5000214, "sellerId":148086, "reason":"test", "images":"https://img02.eelly.com/abc.jpg#https://img02.eelly.com/add.jpg"})
     * @returnExample({true})
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2018.06.26
     */
    public function refusedRefund(int $orderId, int $sellerId, string $reason, string $images): bool
    {
        return EellyClient::request('order/refund', 'refusedRefund', true, $orderId, $sellerId, $reason, $images);
    }

    /**
     * 卖家拒绝退货退款操作.
     *
     * @param int    $orderId  订单id
     * @param int    $sellerId 卖家id
     * @param string $reason   拒绝原因
     * @param string $images   图片凭证(#隔开)
     *
     * @throws \Eelly\SDK\Order\Exception\OrderException
     *
     * @return bool
     *
     * @requestExample({"orderId":5000214, "sellerId":148086, "reason":"test", "images":"https://img02.eelly.com/abc.jpg#https://img02.eelly.com/add.jpg"})
     * @returnExample({true})
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2018.06.26
     */
    public function refusedRefundAsync(int $orderId, int $sellerId, string $reason, string $images)
    {
        return EellyClient::request('order/refund', 'refusedRefund', false, $orderId, $sellerId, $reason, $images);
    }

    /**
     * 卖家同意退货操作.
     *
     * @param int   $orderId     订单id
     * @param int   $sellerId    卖家id
     * @param array $addressData 卖家退货地址相关信息
     *
     * @throws \Eelly\SDK\Order\Exception\OrderException
     *
     * @return bool
     *
     * @requestExample({"orderId":5000214, "sellerId":148086, "addressData":{"address":"test","consignee":"demo","phone":"13430245645","mobile":"","region_name":"dp"}})
     * @returnExample({true})
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2018.06.26
     */
    public function agreeReturnGoods(int $orderId, int $sellerId, array $addressData = []): bool
    {
        return EellyClient::request('order/refund', 'agreeReturnGoods', true, $orderId, $sellerId, $addressData);
    }

    /**
     * 卖家同意退货操作.
     *
     * @param int   $orderId     订单id
     * @param int   $sellerId    卖家id
     * @param array $addressData 卖家退货地址相关信息
     *
     * @throws \Eelly\SDK\Order\Exception\OrderException
     *
     * @return bool
     *
     * @requestExample({"orderId":5000214, "sellerId":148086, "addressData":{"address":"test","consignee":"demo","phone":"13430245645","mobile":"","region_name":"dp"}})
     * @returnExample({true})
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2018.06.26
     */
    public function agreeReturnGoodsAsync(int $orderId, int $sellerId, array $addressData = [])
    {
        return EellyClient::request('order/refund', 'agreeReturnGoods', false, $orderId, $sellerId, $addressData);
    }

    /**
     * 卖家确认收到退货 (部分或全部).
     *
     * @param int $orderId  订单id
     * @param int $sellerId 卖家id
     *
     * @throws \Eelly\SDK\Order\Exception\OrderException
     *
     * @return bool
     *
     * @requestExample({"orderId":5000214, "sellerId":148086})
     * @returnExample({true})
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2018.06.26
     */
    public function confirmRefundGoods(int $orderId, int $sellerId): bool
    {
        return EellyClient::request('order/refund', 'confirmRefundGoods', true, $orderId, $sellerId);
    }

    /**
     * 卖家确认收到退货 (部分或全部).
     *
     * @param int $orderId  订单id
     * @param int $sellerId 卖家id
     *
     * @throws \Eelly\SDK\Order\Exception\OrderException
     *
     * @return bool
     *
     * @requestExample({"orderId":5000214, "sellerId":148086})
     * @returnExample({true})
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2018.06.26
     */
    public function confirmRefundGoodsAsync(int $orderId, int $sellerId)
    {
        return EellyClient::request('order/refund', 'confirmRefundGoods', false, $orderId, $sellerId);
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