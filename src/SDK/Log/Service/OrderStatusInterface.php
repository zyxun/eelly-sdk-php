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

namespace Eelly\SDK\Log\Service;

use Eelly\SDK\Log\DTO\OrderStatusDTO;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface OrderStatusInterface
{
    /**
     * 获取一条价格记录.
     *
     * @param int $losId 订单状态变更ID
     *
     * @throws \Eelly\SDK\Log\Exception\GoodsHandleException
     *
     * @return OrderStatusDTO
     * @requestExample({'losId':1})
     * @returnExample({"losId": 1,"orderId": 1,"fromOsId": 0, "toOsId": 1, "handleId": 1, "handleName": "admin", "userIp": "192.168.0.3", "createdTime": "2017-09-12 16:58:16"})
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年09月11日
     * @Validation(
     *      @OperatorValidator(0,{message : "订单状态变更ID，自增主键",operator:["gt",0]})
     * )
     */
    public function getOrderStatus(int $losId): OrderStatusDTO;

    /**
     * 添加一条订单状态变更记录表.
     *
     * @param array $data
     *
     * @throws \Eelly\SDK\Log\Exception\GoodsHandleException
     *
     * @return bool
     * @requestExample({"orderId": 1,"fromOsId": 0, "toOsId": 1, "handleId": 1, "handleName": "admin", "userIp": "192.168.0.3", "createdTime": "2017-09-12 16:58:16"})
     * @returnExample(true)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年09月12日
     */
    public function addOrderStatus(array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    //public function updateOrderStatus(int $OrderStatusId, array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    //public function deleteOrderStatus(int $OrderStatusId): bool;

    /**
     * 商品价格分页操作.
     *
     * @param array $losIds 订单状态变更ID，自增主键 [1,2,3]
     * @param array $orderIds 订单ID [1,2,3]
     * @param int $fromOsId 原状态ID[关联，losIds] 1
     * @param int $toOsId 新状态ID [关联，losIds] 1
     * @param int $currentPage 第几页
     * @param int $limit 每页数量
     * @throws \Eelly\SDK\Log\Exception\GoodsHandleException
     * @return array
     * @requestExample({"losId": [1,2], "orderIds": [1,2], "fromOsId": 2, "toOsId": "2", "currentPage": 1, "limit": 10})
     * @returnExample({"orderId": 1,"fromOsId": 0, "toOsId": 1, "handleId": 1, "handleName": "admin", "userIp": "192.168.0.3", "createdTime": "2017-09-12 16:58:16"})
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年09月12日
     */
    public function listOrderStatusPage(array $losIds = [], array $orderIds = [], int $fromOsId = 0, int $toOsId = 0, int $currentPage = 1, int $limit = 10): array;
}
