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
 * 订单状态.
 *
 * @author wangjiang<wangjiang@eelly.net>
 */
interface StatusInterface
{
    /**
     * 新增订单状态
     * 新增主订单和订单退货退款状态
     *
     * @param array  $statusData           订单状态数据
     * @param int    $statusData["type"]   状态类型 1 主订单状态 2 退货退款状态
     * @param string $statusData["name"]   状态名称
     * @param int    $statusData["code"]   旧状态:用于数据转换
     * @param string $statusData["remark"] 备注
     *
     * @throws \Eelly\SDK\Order\Exception\OrderException
     *
     * @return bool 新增结果
     * @requestExample({
     *     "statusData":{
     *         "type":1,
     *         "name":"状态名称",
     *         "code":2,
     *         "remark":"备注"
     *     }
     * })
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年9月19日
     */
    public function addStatus(array $statusData): bool;

    /**
     * 修改订单状态
     * 修改主订单和订单退货退款状态
     *
     * @param array  $statusData             订单状态数据
     * @param int    $statusData["statusId"] 订单状态id
     * @param int    $statusData["type"]     状态类型 1 主订单状态 2 退货退款状态
     * @param string $statusData["name"]     状态名称
     * @param int    $statusData["code"]     旧状态:用于数据转换
     * @param string $statusData["remark"]   备注
     *
     * @throws \Eelly\SDK\Order\Exception\OrderException
     *
     * @return bool 修改结果
     * @requestExample({
     *     "statusData":{
     *         "statusId":1,
     *         "type":1,
     *         "name":"状态名称",
     *         "code":2,
     *         "remark":"备注"
     *     }
     * })
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年9月19日
     */
    public function updateStatus(array $statusData): bool;

    /**
     * 获取订单状态
     * 获取主订单和订单退货退款状态
     *
     * @param int $statusId 订单状态id
     * @param int $type     状态类型 1 主订单状态 2 退货退款状态
     * @param int $code     旧状态
     *
     * @throws \Eelly\SDK\Order\Exception\OrderException
     *
     * @return array 订单状态信息
     * @requestExample({
     *     "statusId":1,
     *     "type":2,
     *     "code":3
     * })
     * @returnExample({
     *     "statusId":1,
     *     "type":2,
     *     "name":"状态名称",
     *     "code":3,
     *     "remark":"备注信息"
     * })
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年9月19日
     */
    public function getStatus(int $statusId = 0, int $type = 0, int $code = 0): array;

    /**
     * 根据旧订单状态返回新订单状态
     *
     * @param array $code 旧状态
     *
     * @author wechan
     *
     * @since 2018年10月16日
     */
    public function getNewStatusByOldStatus(array $code): array;
}
