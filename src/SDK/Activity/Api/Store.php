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

namespace Eelly\SDK\Activity\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Activity\Service\StoreInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Store
{
    /**
     * 获取参加活动店铺信息.
     *
     * @param int $activityId 营销活动id
     *
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     *
     * @return array 活动商品结果集
     *
     * @requestExample({"activityId": 1})
     * @returnExample()
     *
     * @author wechan<liweiquan@eelly.net>
     *
     * @since 2017年09月10日
     */
    public function getStoreByActId(int $activityId): array
    {
        return EellyClient::request('activity/store', __FUNCTION__, true, $activityId);
    }

    /**
     * 获取参加活动店铺信息.
     *
     * @param int $activityId 营销活动id
     *
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     *
     * @return array 活动商品结果集
     *
     * @requestExample({"activityId": 1})
     * @returnExample()
     *
     * @author wechan<liweiquan@eelly.net>
     *
     * @since 2017年09月10日
     */
    public function getStoreByActIdAsync(int $activityId)
    {
        return EellyClient::request('activity/store', __FUNCTION__, false, $activityId);
    }

    /**
     * 添加店铺活动参加申请信息.
     *
     * @param array  $data               新增活动店铺数据
     * @param int    $data["activityId"] 营销活动ID
     * @param int    $data["storeId"]    店铺ID
     * @param int    $data["adminId"]    管理员ID
     * @param string $data["adminName"]  管理员名称
     * @param string $data["remark"]     活动商品备注
     *
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     *
     * @return bool 新增店铺活动结果集
     *
     * @requestExample({"data":{"activityId":1,"storeId":148086,"adminId":1,"adminName":"管理员名称","remark":"活动商品备注"}})
     * @returnExample({"data":true,"returnType":"boolean"})
     *
     * @author wechan<liweiquan@eelly.net>
     *
     * @since 2017年09月10日
     */
    public function addActivityStore(array $data): bool
    {
        return EellyClient::request('activity/store', __FUNCTION__, true, $data);
    }

    /**
     * 添加店铺活动参加申请信息.
     *
     * @param array  $data               新增活动店铺数据
     * @param int    $data["activityId"] 营销活动ID
     * @param int    $data["storeId"]    店铺ID
     * @param int    $data["adminId"]    管理员ID
     * @param string $data["adminName"]  管理员名称
     * @param string $data["remark"]     活动商品备注
     *
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     *
     * @return bool 新增店铺活动结果集
     *
     * @requestExample({"data":{"activityId":1,"storeId":148086,"adminId":1,"adminName":"管理员名称","remark":"活动商品备注"}})
     * @returnExample({"data":true,"returnType":"boolean"})
     *
     * @author wechan<liweiquan@eelly.net>
     *
     * @since 2017年09月10日
     */
    public function addActivityStoreAsync(array $data)
    {
        return EellyClient::request('activity/store', __FUNCTION__, false, $data);
    }

    /**
     * 更新活动店铺.
     *
     * @param int   $asId           活动商品ID
     * @param array $data           活动商品数据
     * @param int   $data["status"] 活动状态
     *
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     *
     * @return bool 更新活动店铺结果集
     *
     * @requestExample({"$asId":1,"data":{"status":1}})
     * @returnExample({"data":true,"returnType":"boolean"})
     *
     * @author wechan<liweiquan@eelly.net>
     *
     * @since 2017年09月10日
     */
    public function updateStore(int $asId, array $data): bool
    {
        return EellyClient::request('activity/store', __FUNCTION__, true, $asId, $data);
    }

    /**
     * 更新活动店铺.
     *
     * @param int   $asId           活动商品ID
     * @param array $data           活动商品数据
     * @param int   $data["status"] 活动状态
     *
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     *
     * @return bool 更新活动店铺结果集
     *
     * @requestExample({"$asId":1,"data":{"status":1}})
     * @returnExample({"data":true,"returnType":"boolean"})
     *
     * @author wechan<liweiquan@eelly.net>
     *
     * @since 2017年09月10日
     */
    public function updateStoreAsync(int $asId, array $data)
    {
        return EellyClient::request('activity/store', __FUNCTION__, false, $asId, $data);
    }

    /**
     * 获取参加活动商品
     *
     * @param int $asId 活动申请ID
     *
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     *
     * @return bool 删除活动店铺结果集
     *
     * @requestExample({"asId": 1})
     * @returnExample({"data":true,"returnType":"boolean"})
     *
     * @author wechan<liweiquan@eelly.net>
     *
     * @since 2017年09月09日
     */
    public function deleteStore(int $asId): bool
    {
        return EellyClient::request('activity/store', __FUNCTION__, true, $asId);
    }

    /**
     * 获取参加活动商品
     *
     * @param int $asId 活动申请ID
     *
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     *
     * @return bool 删除活动店铺结果集
     *
     * @requestExample({"asId": 1})
     * @returnExample({"data":true,"returnType":"boolean"})
     *
     * @author wechan<liweiquan@eelly.net>
     *
     * @since 2017年09月09日
     */
    public function deleteStoreAsync(int $asId)
    {
        return EellyClient::request('activity/store', __FUNCTION__, false, $asId);
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