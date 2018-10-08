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
 * 订单日志
 * 
 * @author eellytools<localhost.shell@gmail.com>
 */
interface LogInterface
{
    /**
     * 通过订单id获取订单状态变更日志
     *
     * > osId 状态说明
     * 
     * key | value
     * --- | ----
     * 1   | 等待付款
     * 2   | 等待发货
     * 3   | 系统处理中国呢
     * 4   | 卖家发货，等待买家收获
     * 6   | 申请退货退款中
     * 11  | 确认收货
     * 12  | 交易成功
     * 15  | 交易取消
     * 
     * > 返回数据说明
     * 
     * key | type | value
     * --- | ---- | ---
     * olId | int | 日志id
     * orderId | int | 订单id
     * type | int | 操作者类型：0 系统或管理员操作 1 买家操作 2 卖家操作
     * handleId | int | 操作者id
     * handleName | string | 操作者名称
     * fromOsId | int | 改变前的壮体啊 
     * toOsId | int | 改变后的状态
     * fromAmount | int | 改变前的金额
     * toAmount | int | 改变后的金额
     * createdTime | int | 创建时间戳
     * updateTime | date | 更新时间
     * 
     * @param integer $orderId 订单id
     * @return array
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.10.8
     */
    public function logList(int $orderId):array;
}
