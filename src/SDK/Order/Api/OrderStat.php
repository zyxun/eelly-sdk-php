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
use Eelly\SDK\Order\Service\OrderStatInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class OrderStat implements OrderStatInterface
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
    public function getSellerOrderStatDay(array $sellerIds, int $day, array $status = [], string $mode): array
    {
        return EellyClient::request('order/orderStat', 'getSellerOrderStatDay', true, $sellerIds, $day, $status, $mode);
    }

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
    public function getSellerOrderStatDayAsync(array $sellerIds, int $day, array $status = [], string $mode)
    {
        return EellyClient::request('order/orderStat', 'getSellerOrderStatDay', false, $sellerIds, $day, $status, $mode);
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