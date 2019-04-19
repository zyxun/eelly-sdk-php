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
use Eelly\SDK\Activity\Service\QualificationRelInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class QualificationRel
{
    /**
     * 根据主键id获取店铺申请参加营销活动资格信息.
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
     * @since 2017年10月09日
     */
    public function getQualificationRel(int $activityId): array
    {
        return EellyClient::request('activity/qualificationRel', __FUNCTION__, true, $activityId);
    }

    /**
     * 根据主键id获取店铺申请参加营销活动资格信息.
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
     * @since 2017年10月09日
     */
    public function getQualificationRelAsync(int $activityId)
    {
        return EellyClient::request('activity/qualificationRel', __FUNCTION__, false, $activityId);
    }

    /**
     * 新增店铺申请参加营销活动资格信息.
     *
     * @param array  $data               买家营销活动条件数据
     * @param int    $data["activityId"] 活动ID
     * @param int    $data["acId"]       参与条件ID
     * @param int    $data["mode"]       匹配模式：0 不匹配 1 等于 2 大于 3 小于 4大于等于 5小于等于
     * @param string $data["value"]      验证返回值
     *
     * @requestExample({"data":{"activityId":1,"aqId":1,"mode":1,"value":"true"}})
     * @returnExample()
     *
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     *
     * @author wechan<liweiquan@eelly.net>
     *
     * @since 2017年10月09日
     */
    public function addQualificationRel(array $data): bool
    {
        return EellyClient::request('activity/qualificationRel', __FUNCTION__, true, $data);
    }

    /**
     * 新增店铺申请参加营销活动资格信息.
     *
     * @param array  $data               买家营销活动条件数据
     * @param int    $data["activityId"] 活动ID
     * @param int    $data["acId"]       参与条件ID
     * @param int    $data["mode"]       匹配模式：0 不匹配 1 等于 2 大于 3 小于 4大于等于 5小于等于
     * @param string $data["value"]      验证返回值
     *
     * @requestExample({"data":{"activityId":1,"aqId":1,"mode":1,"value":"true"}})
     * @returnExample()
     *
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     *
     * @author wechan<liweiquan@eelly.net>
     *
     * @since 2017年10月09日
     */
    public function addQualificationRelAsync(array $data)
    {
        return EellyClient::request('activity/qualificationRel', __FUNCTION__, false, $data);
    }

    /**
     * 更新店铺申请参加营销活动资格信息.
     *
     *
     * @param int    $arId               参与条件关系ID
     * @param array  $data               买家营销活动条件数据
     * @param int    $data["activityId"] 营销活动ID
     * @param int    $data["mode"]       匹配模式：0 不匹配 1 等于 2 大于 3 小于 4大于等于 5小于等于
     * @param string $data["value"]      验证返回值
     *
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     *
     * @return bool 买家营销活动条件结果集
     *
     * @requestExample({"arId":1,"data":{"activityId":1,"aqId":1,"mode":1,"value":"true"}})
     * @returnExample()
     *
     * @author wechan<liweiquan@eelly.net>
     *
     * @since 2017年10月09日
     */
    public function updateQualificationRel(int $arId, array $data): bool
    {
        return EellyClient::request('activity/qualificationRel', __FUNCTION__, true, $arId, $data);
    }

    /**
     * 更新店铺申请参加营销活动资格信息.
     *
     *
     * @param int    $arId               参与条件关系ID
     * @param array  $data               买家营销活动条件数据
     * @param int    $data["activityId"] 营销活动ID
     * @param int    $data["mode"]       匹配模式：0 不匹配 1 等于 2 大于 3 小于 4大于等于 5小于等于
     * @param string $data["value"]      验证返回值
     *
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     *
     * @return bool 买家营销活动条件结果集
     *
     * @requestExample({"arId":1,"data":{"activityId":1,"aqId":1,"mode":1,"value":"true"}})
     * @returnExample()
     *
     * @author wechan<liweiquan@eelly.net>
     *
     * @since 2017年10月09日
     */
    public function updateQualificationRelAsync(int $arId, array $data)
    {
        return EellyClient::request('activity/qualificationRel', __FUNCTION__, false, $arId, $data);
    }

    /**
     * 删除买家营销活动参加条件信息.
     *
     * @param int $arId 参与条件关系ID
     *
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     *
     * @return bool 买家营销活动条件结果集
     *
     * @requestExample({"arId": 1})
     * @returnExample()
     *
     * @author wechan<liweiquan@eelly.net>
     *
     * @since 2017年10月09日
     */
    public function deleteQualificationRel(int $arId): bool
    {
        return EellyClient::request('activity/qualificationRel', __FUNCTION__, true, $arId);
    }

    /**
     * 删除买家营销活动参加条件信息.
     *
     * @param int $arId 参与条件关系ID
     *
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     *
     * @return bool 买家营销活动条件结果集
     *
     * @requestExample({"arId": 1})
     * @returnExample()
     *
     * @author wechan<liweiquan@eelly.net>
     *
     * @since 2017年10月09日
     */
    public function deleteQualificationRelAsync(int $arId)
    {
        return EellyClient::request('activity/qualificationRel', __FUNCTION__, false, $arId);
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