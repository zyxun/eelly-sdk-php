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
use Eelly\SDK\Order\Service\MemoInterface;

/**
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Memo
{

    /**
     * 添加订单留言备注信息记录
     *
     * @param array $data  订单留言备注数据
     * @param int        $orderData["orderId"]  订单id
     * @param int        $orderData["type"]   备注类型：1 订单取消 2 买家备忘 3 卖家备忘 4 买家留言 5 卖家留言
     * @param int        $orderData["tag"]  标记类型：0 无标记 1 标记1 2 标记2 3 标记3 4 标记4 5 标记5，用于买卖家备忘
     * @param int        $orderData["memo"] 内容文本
     * @return bool
     * @requestExample({
     *     "data":{
     *             "orderId":116,
     *             "type":1,
     *             "tag":0,
     *             "memo":"test"
     *     }
     * })
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.09.06
     */
    public function addMemo(array $data):bool
    {
        return EellyClient::request('order/memo', __FUNCTION__, true, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function addMemoAsync(array $data):bool
    {
        return EellyClient::request('order/memo', __FUNCTION__, false, $data);
    }

    /**
     * 根据传过来的查询条件返回对应的数据
     *
     * @param string $condition 查询条件
     * @param array $bind 绑定参数
     * @return array
     * @requestExample({
     *     "condition": "type=:type:",
     *     "bind":{"type":2}
     * })
     * @returnExample([{"omId":"575","orderId":"116","type":"2","tag":"0","memo":"test","createdTime":"1536212262"},{"omId":"361","orderId":"50001538","type":"2","tag":"0","memo":"","createdTime":"1530957297"}])
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.09.06
     */
    public function listMemoData(string $condition, array $bind):array
    {
        return EellyClient::request('order/memo', __FUNCTION__, true, $condition, $bind);
    }

    /**
     * {@inheritdoc}
     */
    public function listMemoDataAsync(string $condition, array $bind):array
    {
        return EellyClient::request('order/memo', __FUNCTION__, false, $condition, $bind);
    }

    /**
     * 批量添加订单备忘信息记录
     *
     * @param array $data  订单留言备注数据
     * @param int        $orderData["order_id"]  订单id
     * @param int        $orderData["type"]   备注类型：1 订单取消 2 买家备忘 3 卖家备忘 4 买家留言 5 卖家留言
     * @param int        $orderData["tag"]  标记类型：0 无标记 1 标记1 2 标记2 3 标记3 4 标记4 5 标记5，用于买卖家备忘
     * @param int        $orderData["memo"] 内容文本
     * @return bool
     * @requestExample({
     *     "data":[{"order_id":116,"type":1,"tag":0,"memo":"test","created_time":13533434},{"order_id":117,"type":1,"tag":0,"memo":"test","created_time":13533434}]
     * })
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.09.07
     */
    public function addMemoBatch(array $data):bool
    {
        return EellyClient::request('order/memo', __FUNCTION__, true, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function addMemoBatchAsync(array $data):bool
    {
        return EellyClient::request('order/memo', __FUNCTION__, false, $data);
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
