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
<<<<<<< Updated upstream
 * 店铺及商品级活动参加申请.
 * 
 * 
 * @author wechan<liweiquan@eelly.net>
 */
interface StoreInterface
{
    /**
     * 获取参加活动店铺信息
     * 
     * @param int $activityId 营销活动id
     *
     * @return array 活动商品结果集
     * 
     * @requestExample({"activityId": 1})
     * @returnExample()
     * 
     * @throws Eelly\SDK\Activity\Exception\ActivityException
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年09月10日
     */
    public function getStoreByActId(int $activityId): array;

    /**
     * 添加店铺活动参加申请信息
     * 
     * @param array $data 新增活动店铺数据
     * @param int $data["activityId"]  营销活动ID
     * @param int $data["storeId"] 店铺ID
     * @param int $data["adminId"] 管理员ID
     * @param string $data["adminName"] 管理员名称
     * @param string $data["remark"] 活动商品备注
     *
     *
     * @return bool 新增店铺活动结果集
     * 
     * @requestExample({"data":{"activityId":1,"storeId":148086,"adminId":1,"adminName":"管理员名称","remark":"活动商品备注"}})
     * @returnExample({"data":true,"returnType":"boolean"})
     * 
     * @throws Eelly\SDK\Activity\Exception\ActivityException
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年09月10日
     */
    public function addActivityStore(array $data): bool;

    /**
     * 更新活动店铺
     * 
     * @param int $asId 活动商品ID
     * @param array $data 活动商品数据
     * @param int $data["status"] 活动状态
     *
     *
     * @return bool 更新活动店铺结果集
     * 
     * @requestExample({"$asId":1,"data":{"status":1}})
     * @returnExample({"data":true,"returnType":"boolean"})
     * 
     * @throws Eelly\SDK\Activity\Exception\ActivityException
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年09月10日
     */
    public function updateStore(int $asId, array $data): bool;

    /**
     *
     * 获取参加活动商品
     * 
     * @param int $asId 活动申请ID
     *
     * @return bool 删除活动店铺结果集
     * 
     * @requestExample({"asId": 1})
     * @returnExample({"data":true,"returnType":"boolean"})
     * 
     * @throws Eelly\SDK\Activity\Exception\ActivityException
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年09月09日
     */
    public function deleteStore(int $asId): bool;
}
