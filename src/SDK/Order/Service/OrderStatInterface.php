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
}
