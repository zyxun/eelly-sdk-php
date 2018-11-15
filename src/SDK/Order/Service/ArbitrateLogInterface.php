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
 * 仲裁日志.
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface ArbitrateLogInterface
{
    /**
     * 新增跟进记录.
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
     * @param int   $orderId 订单id
     * @param array $data    新增的数据
     *
     * @return bool
     *
     * @author sunanzhi <sunanzhi@hotmail.com>
     *
     * @since 2018.10.8
     */
    public function addFollow(int $orderId, array $data): bool;

    /**
     * 修改跟进记录.
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
     * @param int   $oalId 仲裁操作记录id
     * @param array $data  新增的数据
     *
     * @return bool
     *
     * @author zhangyangxun
     *
     * @since 2018.10.11
     */
    public function editFollow(int $oalId, array $data): bool;

    /**
     * 获取订单仲裁跟进记录.
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
     * @param int $orderId 订单id
     *
     * @return array
     *
     * @author sunanzhi <sunanzhi@hotmail.com>
     *
     * @since 2018.10.8
     */
    public function getArbitrateLogList(int $orderId): array;
}
