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

namespace Eelly\SDK\Order\Service;

/**
 * 订单统计.
 */
interface OrderStatInterface
{
    /**
     * 统计卖家n天内订单
     * @internal
     *
     * @param array    $sellerIds  店铺ID数组
     * @param int      $day        n天内
     * @param array    $status     订单状态，默认全部
     * @param string   $mode       统计内容，num 订单总数 amount 订单总金额
     * @return array
     *
     * @author zhangyangxun
     * @since 2019-04-22
     */
    public function getSellerOrderStatDay(array $sellerIds, int $day, array $status = [], string $mode): array;

    /**
     * 统计多个买家在一个店铺的订单总数(付款、完成.etc).
     * @internal
     *
     * @param array $buyerIds
     * @param int $sellerId
     * @return array
     *
     * @author zhangyangxun
     * @since 2019-04-23
     */
    public function countBuyersOrder(array $buyerIds, int $sellerId): array;

    /**
     * 获取n天内某店铺的订单统计，按买家分组
     *
     * @param int   $day
     * @param int   $sellerId
     * @param array $buyerIds
     * @param array $extend
     * @return array
     * @author zhangyangxun
     * @since 2019/5/9
     */
    public function statSellerOrderDayBefore(int $day, int $sellerId, array $buyerIds, array $extend = []): array;

    /**
     * @param array $condition
     * @param array $extend
     * @return array
     * @author zhangyangxun
     * @since 2019/5/16
     */
    public function statOrderForPayScore(array $condition, array $extend = []): array;

    /**
     * 统计一个店铺多个买家的支付订单(支付了就算)
     *
     * @param array $condition
     * @param array $extend
     * @return array
     * @author zhangyangxun
     * @since 2019/5/16
     */
    public function statPayedOrder(array $condition, array $extend = []): array;

    /**
     * 统计一个店铺多个买家的完成订单
     *
     * @param array $condition
     * @param array $extend
     * @return array
     * @author zhangyangxun
     * @since 2019/5/16
     */
    public function statFinishedOrder(array $condition, array $extend = []): array;
}
