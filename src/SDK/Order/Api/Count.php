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
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Count
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
    public function getCountInfo(int $orderId)
    {
        return EellyClient::request('order/count', 'getCountInfo', true, $orderId);
    }

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
     * @since 2018.04.28
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
     * @since 2018.04.28
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
    public function listIfOrderLikeSuccessAsync(array $orderIds)
    {
        return EellyClient::request('order/count', 'listIfOrderLikeSuccess', false, $orderIds);
    }

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
    public function getNewOrderLikeSuccessList(int $page = 1, int $limit = 30): array
    {
        return EellyClient::request('order/count', 'getNewOrderLikeSuccessList', true, $page, $limit);
    }

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
    public function getNewOrderLikeSuccessListAsync(int $page = 1, int $limit = 30)
    {
        return EellyClient::request('order/count', 'getNewOrderLikeSuccessList', false, $page, $limit);
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