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
use Eelly\SDK\Activity\Service\QualificationInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Qualification implements QualificationInterface
{
    /**
     * 获取参加活动店铺信息.
     *
     * @param int $aqId 营销活动id
     *
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     *
     * @return array 活动条件参数结果集
     *
     * @requestExample({"aqId": 1})
     * @returnExample()
     *
     * @author wechan<liweiquan@eelly.net>
     *
     * @since 2017年10月12日
     */
    public function getQualification(int $aqId): array
    {
        return EellyClient::request('activity/qualification', __FUNCTION__, true, $aqId);
    }

    /**
     * 获取参加活动店铺信息.
     *
     * @param int $aqId 营销活动id
     *
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     *
     * @return array 活动条件参数结果集
     *
     * @requestExample({"aqId": 1})
     * @returnExample()
     *
     * @author wechan<liweiquan@eelly.net>
     *
     * @since 2017年10月12日
     */
    public function getQualificationAsync(int $aqId)
    {
        return EellyClient::request('activity/qualification', __FUNCTION__, false, $aqId);
    }

    /**
     * 新增店铺申请参加营销活动资格参数.
     *
     *
     * @param array  $data            参与条件数据集
     * @param string $data["name"]    参数名称
     * @param string $data["service"] 验证服务接口
     *
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     *
     * @return array 活动商品结果集
     *
     * @requestExample({"data":{"name":"21313","service":"hahahaha"}})
     * @returnExample()
     *
     * @author wechan<liweiquan@eelly.net>
     *
     * @since 2017年10月12日
     */
    public function addQualification(array $data): bool
    {
        return EellyClient::request('activity/qualification', __FUNCTION__, true, $data);
    }

    /**
     * 新增店铺申请参加营销活动资格参数.
     *
     *
     * @param array  $data            参与条件数据集
     * @param string $data["name"]    参数名称
     * @param string $data["service"] 验证服务接口
     *
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     *
     * @return array 活动商品结果集
     *
     * @requestExample({"data":{"name":"21313","service":"hahahaha"}})
     * @returnExample()
     *
     * @author wechan<liweiquan@eelly.net>
     *
     * @since 2017年10月12日
     */
    public function addQualificationAsync(array $data)
    {
        return EellyClient::request('activity/qualification', __FUNCTION__, false, $data);
    }

    /**
     * 更新店铺申请参加营销活动资格参数.
     *
     *
     * @param int    $aqId            参与条件ID
     * @param array  $data            参与条件数据集
     * @param string $data["name"]    参数名称
     * @param string $data["service"]
     *
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     *
     * @return array 活动商品结果集
     *
     * @requestExample({"aqId":1,"data":{"name":"21313","service":"hahahaha"}})
     * @returnExample()
     *
     * @author wechan<liweiquan@eelly.net>
     *
     * @since 2017年10月12日
     */
    public function updateQualification(int $aqId, array $data): bool
    {
        return EellyClient::request('activity/qualification', __FUNCTION__, true, $aqId, $data);
    }

    /**
     * 更新店铺申请参加营销活动资格参数.
     *
     *
     * @param int    $aqId            参与条件ID
     * @param array  $data            参与条件数据集
     * @param string $data["name"]    参数名称
     * @param string $data["service"]
     *
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     *
     * @return array 活动商品结果集
     *
     * @requestExample({"aqId":1,"data":{"name":"21313","service":"hahahaha"}})
     * @returnExample()
     *
     * @author wechan<liweiquan@eelly.net>
     *
     * @since 2017年10月12日
     */
    public function updateQualificationAsync(int $aqId, array $data)
    {
        return EellyClient::request('activity/qualification', __FUNCTION__, false, $aqId, $data);
    }

    /**
     * 删除参加活动店铺信息.
     *
     * @param int $aqId 营销活动id
     *
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     *
     * @return array 活动条件参数结果集
     *
     * @requestExample({"aqId": 1})
     * @returnExample()
     *
     * @author wechan<liweiquan@eelly.net>
     *
     * @since 2017年10月12日
     */
    public function deleteQualification(int $aqId): bool
    {
        return EellyClient::request('activity/qualification', __FUNCTION__, true, $aqId);
    }

    /**
     * 删除参加活动店铺信息.
     *
     * @param int $aqId 营销活动id
     *
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     *
     * @return array 活动条件参数结果集
     *
     * @requestExample({"aqId": 1})
     * @returnExample()
     *
     * @author wechan<liweiquan@eelly.net>
     *
     * @since 2017年10月12日
     */
    public function deleteQualificationAsync(int $aqId)
    {
        return EellyClient::request('activity/qualification', __FUNCTION__, false, $aqId);
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