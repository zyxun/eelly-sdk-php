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
 * 订单统计（分享、点赞）.
 *
 * @author zhangyingdi<zhangyingdi@eelly.net>
 */
interface CountInterface
{
    /**
     * 根据传过来的订单ID，返回对应的订单统计数据.
     *
     * @param int $orderId 订单id
     *
     * @throws \Eelly\SDK\Order\Exception\OrderException
     *
     * @return array
     * @requestExample({
     *     "orderId": 1
     * })
     * @returnExample({"ocId":"5","orderId":"163","shares":"2","likes":"0","createdTime":"1524879825"})
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2018.04.28
     */
    public function getCountInfo(int $orderId);

    /**
     * 新增订单点赞记录.
     *
     * @param int $orderId 订单id
     *
     * @throws \Eelly\SDK\Order\Exception\OrderException
     *
     * @return bool 新增结果
     * @requestExample({
     *     "orderId": 1
     * })
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2018.04.28
     */
    public function addOrderCount(int $orderId): bool;

    /**
     * 根据传过来的订单ID数组，返回是否积攒成功
     *
     * @param array $orderIds 订单id数组
     *
     * @throws \Eelly\SDK\Order\Exception\OrderException
     *
     * @return array
     * @requestExample({
     *     "orderIds": [160,161]
     * })
     * @returnExample({"160":true,"161":false})
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2018.04.28
     */
    public function listIfOrderLikeSuccess(array $orderIds): array;

    /**
     * 获取集赞成功的商品.
     *
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * ---------|-------|--------------
     * likes    |int    |点赞数量
     * orderId  |int    |订单号
     * buyerId  |int    |用户ID
     * price    |int    |价格，单位分
     * quantity |int    |商品数量
     * userName |string |用户名
     * portrait |string |头像
     * content  |string |内容
     *
     *
     * @param int $page  第几页
     * @param int $limit 条数
     *
     * @returnExample([
     *   {
     *       "likes": "1",
     *       "orderId": "50001717",
     *       "buyerId": "2108412",
     *       "price": "980",
     *       "quantity": "1",
     *       "userName": "",
     *       "portrait": "https://uc.eelly.test/images/noavatar_small.png",
     *       "content": "成功集赞1个，用9.8元成功领了1件衣服"
     *   },
     *   {
     *       "likes": "1",
     *       "orderId": "50001708",
     *       "buyerId": "2108483",
     *       "price": "1",
     *       "quantity": "1",
     *       "userName": "龚",
     *       "portrait": "https://uc.eelly.test/images/noavatar_small.png",
     *       "content": "成功集赞1个，用0.01元成功领了1件衣服"
     *   }
     * ])
     *
     * @return array
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2018年08月27日
     */
    public function getNewOrderLikeSuccessList(int $page = 1, int $limit = 30): array;
}
