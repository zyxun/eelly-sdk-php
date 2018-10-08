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
use Eelly\SDK\Order\Service\ArbitrateLogInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class ArbitrateLog implements ArbitrateLogInterface
{
    /**
     * 新增跟进记录
     *
     * > data 数据说明
     * 
     * key | type | value
     * --- | ---- | ----
     * adminId | int | 管理员id
     * adminName | string | 管理员姓名
     * contact | string | 联系人姓名
     * contact_way | string | 联系方式
     * remark | string | 跟进内容
     * 
     * @param integer $orderId 订单id
     * @param array $data 新增的数据
     * @return boolean
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.10.8
     */
    public function addFollow(int $orderId, array $data): bool
    {
        return EellyClient::request('order/arbitrateLog', 'addFollow', true, $orderId, $data);
    }

    /**
     * 新增跟进记录
     *
     * > data 数据说明
     * 
     * key | type | value
     * --- | ---- | ----
     * adminId | int | 管理员id
     * adminName | string | 管理员姓名
     * contact | string | 联系人姓名
     * contact_way | string | 联系方式
     * remark | string | 跟进内容
     * 
     * @param integer $orderId 订单id
     * @param array $data 新增的数据
     * @return boolean
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.10.8
     */
    public function addFollowAsync(int $orderId, array $data)
    {
        return EellyClient::request('order/arbitrateLog', 'addFollow', false, $orderId, $data);
    }

    /**
     * 获取订单仲裁跟进记录
     * 
     * > 返回数据说明
     * 
     * key | type | value
     * --- | ---- | ----
     * oalId | int | 跟进id
     * orderId | int | 订单id
     * type | int | 操作类型 0：管理员或者系统 1:用户 2: 卖家
     * handleId | int | 操作人员id
     * handleName | string | 操作人员姓名
     * remark | string | 内容
     * createdTime | string | 创建时间戳
     * updateTime | date | 更新时间
     *
     * @param integer $orderId 订单id
     * @return array
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.10.8
     */
    public function getArbitrateLogList(int $orderId): array
    {
        return EellyClient::request('order/arbitrateLog', 'getArbitrateLogList', true, $orderId);
    }

    /**
     * 获取订单仲裁跟进记录
     * 
     * > 返回数据说明
     * 
     * key | type | value
     * --- | ---- | ----
     * oalId | int | 跟进id
     * orderId | int | 订单id
     * type | int | 操作类型 0：管理员或者系统 1:用户 2: 卖家
     * handleId | int | 操作人员id
     * handleName | string | 操作人员姓名
     * remark | string | 内容
     * createdTime | string | 创建时间戳
     * updateTime | date | 更新时间
     *
     * @param integer $orderId 订单id
     * @return array
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.10.8
     */
    public function getArbitrateLogListAsync(int $orderId)
    {
        return EellyClient::request('order/arbitrateLog', 'getArbitrateLogList', false, $orderId);
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