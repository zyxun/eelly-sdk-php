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
use Eelly\SDK\Activity\Service\ConditionRelInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class ConditionRel implements ConditionRelInterface
{
    /**
     * 根据活动id获取买家参加营销活动条件信息.
     *
     * @param int $activityId 营销活动id
     *
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     *
     * @return array 买家营销活动条件结果集
     *
     * @requestExample({"activityId": 1})
     * @returnExample()
     *
     * @author wechan<liweiquan@eelly.net>
     *
     * @since 2017年09月12日
     */
    public function getConditionRel(int $activityId): array
    {
        return EellyClient::request('activity/conditionRel', __FUNCTION__, true, $activityId);
    }

    /**
     * 根据活动id获取买家参加营销活动条件信息.
     *
     * @param int $activityId 营销活动id
     *
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     *
     * @return array 买家营销活动条件结果集
     *
     * @requestExample({"activityId": 1})
     * @returnExample()
     *
     * @author wechan<liweiquan@eelly.net>
     *
     * @since 2017年09月12日
     */
    public function getConditionRelAsync(int $activityId)
    {
        return EellyClient::request('activity/conditionRel', __FUNCTION__, false, $activityId);
    }

    /**
     * 新增买家营销活动参加条件信息.
     *
     *
     * @param array  $data               买家营销活动条件数据
     * @param int    $data["activityId"] 活动ID
     * @param int    $data["acId"]       参与条件ID
     * @param int    $data["mode"]       匹配模式：0 不匹配 1 等于 2 大于 3 小于 4大于等于 5小于等于
     * @param string $data["value"]      验证返回值
     *
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     *
     * @return bool 买家营销活动条件结果集
     *
     * @requestExample({"data":{"activityId":1,"acId":1,"mode":1,"value":"true"}})
     * @returnExample()
     *
     * @author wechan<liweiquan@eelly.net>
     *
     * @since 2017年09月12日
     */
    public function addConditionRel(array $data): bool
    {
        return EellyClient::request('activity/conditionRel', __FUNCTION__, true, $data);
    }

    /**
     * 新增买家营销活动参加条件信息.
     *
     *
     * @param array  $data               买家营销活动条件数据
     * @param int    $data["activityId"] 活动ID
     * @param int    $data["acId"]       参与条件ID
     * @param int    $data["mode"]       匹配模式：0 不匹配 1 等于 2 大于 3 小于 4大于等于 5小于等于
     * @param string $data["value"]      验证返回值
     *
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     *
     * @return bool 买家营销活动条件结果集
     *
     * @requestExample({"data":{"activityId":1,"acId":1,"mode":1,"value":"true"}})
     * @returnExample()
     *
     * @author wechan<liweiquan@eelly.net>
     *
     * @since 2017年09月12日
     */
    public function addConditionRelAsync(array $data)
    {
        return EellyClient::request('activity/conditionRel', __FUNCTION__, false, $data);
    }

    /**
     * 更新买家营销活动参加条件信息.
     *
     *
     * @param int    $acrId              参与条件关系ID
     * @param array  $data               买家营销活动条件数据
     * @param int    $data["activityId"] 营销活动ID
     * @param int    $data["mode"]       匹配模式：0 不匹配 1 等于 2 大于 3 小于 4大于等于 5小于等于
     * @param string $data["value"]      验证返回值
     *
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     *
     * @return bool 买家营销活动条件结果集
     *
     * @requestExample({"acrId":1,"data":{"activityId":1,"acId":1,"mode":1,"value":"true"}})
     * @returnExample()
     *
     * @author wechan<liweiquan@eelly.net>
     *
     * @since 2017年09月12日
     */
    public function updateConditionRel(int $acrId, array $data): bool
    {
        return EellyClient::request('activity/conditionRel', __FUNCTION__, true, $acrId, $data);
    }

    /**
     * 更新买家营销活动参加条件信息.
     *
     *
     * @param int    $acrId              参与条件关系ID
     * @param array  $data               买家营销活动条件数据
     * @param int    $data["activityId"] 营销活动ID
     * @param int    $data["mode"]       匹配模式：0 不匹配 1 等于 2 大于 3 小于 4大于等于 5小于等于
     * @param string $data["value"]      验证返回值
     *
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     *
     * @return bool 买家营销活动条件结果集
     *
     * @requestExample({"acrId":1,"data":{"activityId":1,"acId":1,"mode":1,"value":"true"}})
     * @returnExample()
     *
     * @author wechan<liweiquan@eelly.net>
     *
     * @since 2017年09月12日
     */
    public function updateConditionRelAsync(int $acrId, array $data)
    {
        return EellyClient::request('activity/conditionRel', __FUNCTION__, false, $acrId, $data);
    }

    /**
     * 删除买家营销活动参加条件信息.
     *
     * @param int $acrId 参与条件关系ID
     *
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     *
     * @return bool 买家营销活动条件结果集
     *
     * @requestExample({"acrId": 1})
     * @returnExample()
     *
     * @author wechan<liweiquan@eelly.net>
     *
     * @since 2017年09月12日
     */
    public function deleteConditionRel(int $acrId): bool
    {
        return EellyClient::request('activity/conditionRel', __FUNCTION__, true, $acrId);
    }

    /**
     * 删除买家营销活动参加条件信息.
     *
     * @param int $acrId 参与条件关系ID
     *
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     *
     * @return bool 买家营销活动条件结果集
     *
     * @requestExample({"acrId": 1})
     * @returnExample()
     *
     * @author wechan<liweiquan@eelly.net>
     *
     * @since 2017年09月12日
     */
    public function deleteConditionRelAsync(int $acrId)
    {
        return EellyClient::request('activity/conditionRel', __FUNCTION__, false, $acrId);
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