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
 * 订单退货退款状态日志
 *
 * @author zhangyingdi<zhangyingdi@eelly.net>
 */
interface RefundLogInterface
{

    /**
     * 插入一条订单退货退款记录
     *
     * @param array $data  添加的数据
     * @param int $data["orderId"]  订单id
     * @param int $data["type"]  操作者类型：0 系统或管理员操作 1 买家操作 2 卖家操作
     * @param int $data["handleId"]  操作者ID
     * @param string $data["handleName"]  操作人名称
     * @param int $data["fromOsId"]  退货退款原状态ID
     * @param int $data["toOsId"]  退货退款目标状态ID
     * @param int $data["remarkType"]  备注类型
     * @param string $data["remark"]  备注
     * @param string $data["certificate"]  退款凭证
     * @param int $data["createdTime"]  添加时间
     *
     * @return bool
     *
     * @requestExample({"data":{"orderId":123,"type":2,"handleId":148086,"handleName":"molimoq","fromOsId":16,"toOsId":17,"remarkType":0,"remark":"","certificate":"","createdTime":1529402430}})
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.06.19
     */
    public function addOrderRefundLog(array $data):bool;

    /**
     * 获取订单退货退款操作记录
     *
     * @param int $orderId
     * @return array
     *
     * @author zhangyangxun
     * @since 2018-10-11
     */
    public function getRefundLog(int $orderId): array;
}
