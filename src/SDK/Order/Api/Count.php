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
use Eelly\SDK\Order\Service\CountInterface;

/**
 * 订单统计（分享、点赞）
 *
 * @author zhangyingdi<zhangyingdi@eelly.net>
 */
class Count implements CountInterface
{
    /**
     * 根据传过来的订单ID，返回对应的订单统计数据
     *
     * @param int $orderId  订单id
     * @return array
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.04.28
     */
    public function getCountInfo(int $orderId)
    {
        return EellyClient::request('order/count', 'getCountInfo', true, $orderId);
    }

    /**
     * 根据传过来的订单ID，返回对应的订单统计数据
     *
     * @param int $orderId  订单id
     * @return array
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.04.28
     */
    public function getCountInfoAsync(int $orderId)
    {
        return EellyClient::request('order/count', 'getCountInfo', false, $orderId);
    }

    /**
     * 新增订单点赞记录
     *
     * @param int   $orderId   订单id
     *
     * @throws \Eelly\SDK\Order\Exception\OrderException
     * @return bool 新增结果
     * @requestExample({
     *     "orderId": 1
     * })
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.04.27
     */
    public function addOrderCount(int $orderId): bool
    {
        return EellyClient::request('order/count', 'addOrderCount', true, $orderId);
    }

    /**
     * 新增订单点赞记录
     *
     * @param int   $orderId   订单id
     *
     * @throws \Eelly\SDK\Order\Exception\OrderException
     * @return bool 新增结果
     * @requestExample({
     *     "orderId": 1
     * })
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.04.27
     */
    public function addOrderCountAsync(int $orderId)
    {
        return EellyClient::request('order/count', 'addOrderCount', false, $orderId);
    }

    /**
     * 根据传过来的订单ID数组，返回是否积攒成功
     *
     * @param array $orderIds  订单id数组
     * @throws \Eelly\SDK\Order\Exception\OrderException
     * @return array
     * @requestExample({
     *     "orderIds": [160,161]
     * })
     * @returnExample({"160":true,"161":false})
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.04.28
     */
    public function listIfOrderLikeSuccess(array $orderIds): array
    {
        return EellyClient::request('order/count', 'listIfOrderLikeSuccess', true, $orderIds);
    }

    /**
     * 根据传过来的订单ID数组，返回是否积攒成功
     *
     * @param array $orderIds  订单id数组
     * @throws \Eelly\SDK\Order\Exception\OrderException
     * @return array
     * @requestExample({
     *     "orderIds": [160,161]
     * })
     * @returnExample({"160":true,"161":false})
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.04.28
     */
    public function listIfOrderLikeSuccessAsync(array $orderIds): array
    {
        return EellyClient::request('order/count', 'listIfOrderLikeSuccess', false, $orderIds);
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
