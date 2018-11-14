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
 * 订单点赞记录表.
 *
 * @author zhangyingdi<zhangyingdi@eelly.net>
 */
interface LikeInterface
{
    /**
     * 新增订单点赞记录.
     *
     * @param array $data                 订单点赞记录数据
     * @param int   $orderData["orderId"] 订单id
     * @param int   $orderData["userId"]  用户id
     *
     * @throws \Eelly\SDK\Order\Exception\OrderException
     *
     * @return bool 新增结果
     * @requestExample({
     *     "data":{
     *             "orderId":123,
     *             "userId":148086
     *     }
     * })
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2018.04.28
     */
    public function addOrderLike(array $data): bool;

    /**
     * 获取订单点赞信息.
     *
     * @param $orderId 订单id
     *
     * @return array
     *
     * @requestExample({"orderId":162})
     * @returnExample([{"oliId":"4","orderId":"161","userId":"148086","createdTime":"1524899508","updateTime":"2018-04-28 15:11:31"},{"oliId":"5","orderId":"161","userId":"11","createdTime":"1524899533","updateTime":"2018-04-28 15:11:55"}])
     *
     * @author wechan
     *
     * @since 2018年05月02日
     */
    public function getOrderLikeInfo(int $orderId): array;

    /**
     * 新增订单点赞记录 (新版--自定义商品点赞数控制).
     *
     * @param array $data                 订单点赞记录数据
     * @param int   $orderData["orderId"] 订单id
     * @param int   $orderData["userId"]  用户id
     * @param int   $orderData["goodsId"] 商品id
     *
     * @throws \Eelly\SDK\Order\Exception\OrderException
     *
     * @return bool 新增结果
     * @requestExample({
     *     "data":{
     *             "orderId":123,
     *             "userId":148086,
     *             "goodsId":123
     *     }
     * })
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2018.06.28
     */
    public function addOrderLikeNew(array $data): bool;
}
