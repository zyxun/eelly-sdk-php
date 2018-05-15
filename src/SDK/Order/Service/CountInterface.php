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
 * 订单统计（分享、点赞）
 *
 * @author zhangyingdi<zhangyingdi@eelly.net>
 */
interface CountInterface
{
    /**
     * 根据传过来的订单ID，返回对应的订单统计数据
     *
     * @param int $orderId  订单id
     * @throws \Eelly\SDK\Order\Exception\OrderException
     * @return array
     * @requestExample({
     *     "orderId": 1
     * })
     * @returnExample({"ocId":"5","orderId":"163","shares":"2","likes":"0","createdTime":"1524879825"})
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.04.28
     */
    public function getCountInfo(int $orderId);

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
     * @since 2018.04.28
     */
    public function addOrderCount(int $orderId): bool;

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
    public function listIfOrderLikeSuccess(array $orderIds): array;
}
