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

namespace Eelly\SDK\Activity\Service;


/**
 * 参加活动商品.
 * 
 * 
 * @author wechan<liweiquan@eelly.net>
 */
interface GoodsInterface
{
    /**
     *
     * 获取参加活动商品
     * 
     * @param int $activityId 营销活动id
     *
     * @return array 活动商品结果集
     * 
     * @requestExample({"activityId": 1})
     * @returnExample()
     * 
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年09月09日
     */
    public function getActivityGoods(int $activityId): array;

    /**
     * 新增参加活动商品
     * 
     * @param array $data 新增活动商品数据
     * @param int $data["activityId"]  营销活动ID
     * @param int $data["storeId"] 店铺ID
     * @param int $data["goodsId"] 商品ID
     * @param int $data["adminId"] 管理员ID
     * @param string $data["adminName"] 管理员名称
     * @param string $data["remark"] 活动商品备注
     *
     *
     * @return bool 新增活动商品结果集
     * 
     * @requestExample({"data":{"activityId":1,"storeId":148086,"goodsId":1,"adminId":1,"adminName":"管理员名称","remark":"活动商品备注"}})
     * @returnExample({"data":true,"returnType":"boolean"})
     * 
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年09月09日
     */
    public function addGoods(array $data): bool;

    /**
     * 更新活动商品
     * 
     * @param int $agId 活动商品ID
     * @param array $data 活动商品数据
     * @param int $data["status"] 活动状态
     *
     *
     * @return bool 新增活动商品结果集
     * 
     * @requestExample({"agId":1,"data":{"status":1}})
     * @returnExample({"data":true,"returnType":"boolean"})
     * 
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年09月09日
     */
    public function updateGoods(int $agId, array $data): bool;

    /**
     *
     * 获取参加活动商品
     * 
     * @param int $agId 活动商品ID
     *
     * @return bool 删除活动商品结果集
     * 
     * @requestExample({"agId": 1})
     * @returnExample({"data":true,"returnType":"boolean"})
     * 
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年09月09日
     */
    public function deleteGoods(int $agId): bool;
}
