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
use Eelly\SDK\Activity\Service\ConditionInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Condition implements ConditionInterface
{
    /**
     * 获取参加活动店铺信息.
     *
     * @param int $acId 营销活动id
     *
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     *
     * @return array 活动条件参数结果集
     *
     * @requestExample({"acId": 1})
     * @returnExample()
     *
     * @author wechan<liweiquan@eelly.net>
     *
     * @since 2017年09月12日
     */
    public function getCondition(int $acId): array
    {
        return EellyClient::request('activity/condition', __FUNCTION__, true, $acId);
    }

    /**
     * 获取参加活动店铺信息.
     *
     * @param int $acId 营销活动id
     *
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     *
     * @return array 活动条件参数结果集
     *
     * @requestExample({"acId": 1})
     * @returnExample()
     *
     * @author wechan<liweiquan@eelly.net>
     *
     * @since 2017年09月12日
     */
    public function getConditionAsync(int $acId)
    {
        return EellyClient::request('activity/condition', __FUNCTION__, false, $acId);
    }

    /**
     * 获取参加活动店铺信息.
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
     * @since 2017年09月12日
     */
    public function addCondition(array $data): bool
    {
        return EellyClient::request('activity/condition', __FUNCTION__, true, $data);
    }

    /**
     * 获取参加活动店铺信息.
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
     * @since 2017年09月12日
     */
    public function addConditionAsync(array $data)
    {
        return EellyClient::request('activity/condition', __FUNCTION__, false, $data);
    }

    /**
     * 获取参加活动店铺信息.
     *
     *
     * @param int    $acId            参与条件ID
     * @param array  $data            参与条件数据集
     * @param string $data["name"]    参数名称
     * @param string $data["service"]
     *
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     *
     * @return array 活动商品结果集
     *
     * @requestExample({"acId":1,"data":{"name":"21313","service":"hahahaha"}})
     * @returnExample()
     *
     * @author wechan<liweiquan@eelly.net>
     *
     * @since 2017年09月12日
     */
    public function updateCondition(int $acId, array $data): bool
    {
        return EellyClient::request('activity/condition', __FUNCTION__, true, $acId, $data);
    }

    /**
     * 获取参加活动店铺信息.
     *
     *
     * @param int    $acId            参与条件ID
     * @param array  $data            参与条件数据集
     * @param string $data["name"]    参数名称
     * @param string $data["service"]
     *
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     *
     * @return array 活动商品结果集
     *
     * @requestExample({"acId":1,"data":{"name":"21313","service":"hahahaha"}})
     * @returnExample()
     *
     * @author wechan<liweiquan@eelly.net>
     *
     * @since 2017年09月12日
     */
    public function updateConditionAsync(int $acId, array $data)
    {
        return EellyClient::request('activity/condition', __FUNCTION__, false, $acId, $data);
    }

    /**
     * 删除参加活动店铺信息.
     *
     * @param int $acId 营销活动id
     *
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     *
     * @return array 活动条件参数结果集
     *
     * @requestExample({"acId": 1})
     * @returnExample()
     *
     * @author wechan<liweiquan@eelly.net>
     *
     * @since 2017年09月12日
     */
    public function deleteCondition(int $acId): bool
    {
        return EellyClient::request('activity/condition', __FUNCTION__, true, $acId);
    }

    /**
     * 删除参加活动店铺信息.
     *
     * @param int $acId 营销活动id
     *
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     *
     * @return array 活动条件参数结果集
     *
     * @requestExample({"acId": 1})
     * @returnExample()
     *
     * @author wechan<liweiquan@eelly.net>
     *
     * @since 2017年09月12日
     */
    public function deleteConditionAsync(int $acId)
    {
        return EellyClient::request('activity/condition', __FUNCTION__, false, $acId);
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