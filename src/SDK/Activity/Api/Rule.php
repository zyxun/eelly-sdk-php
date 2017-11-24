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
use Eelly\SDK\Activity\Service\RuleInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Rule implements RuleInterface
{
    /**
     * 获取营销活动优惠规则信息.
     *
     * @param int $arId 营销活动id
     *
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     *
     * @return array 活动条件参数结果集
     *
     * @requestExample({"arId": 1})
     * @returnExample()
     *
     * @author wechan<liweiquan@eelly.net>
     *
     * @since 2017年10月16日
     */
    public function getRule(int $arId): array
    {
        return EellyClient::request('activity/rule', __FUNCTION__, true, $arId);
    }

    /**
     * 获取营销活动优惠规则信息.
     *
     * @param int $arId 营销活动id
     *
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     *
     * @return array 活动条件参数结果集
     *
     * @requestExample({"arId": 1})
     * @returnExample()
     *
     * @author wechan<liweiquan@eelly.net>
     *
     * @since 2017年10月16日
     */
    public function getRuleAsync(int $arId)
    {
        return EellyClient::request('activity/rule', __FUNCTION__, false, $arId);
    }

    /**
     * 新增营销活动优惠规则信息.
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
     * @since 2017年10月16日
     */
    public function addRule(array $data): bool
    {
        return EellyClient::request('activity/rule', __FUNCTION__, true, $data);
    }

    /**
     * 新增营销活动优惠规则信息.
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
     * @since 2017年10月16日
     */
    public function addRuleAsync(array $data)
    {
        return EellyClient::request('activity/rule', __FUNCTION__, false, $data);
    }

    /**
     * 更新营销活动优惠规则信息.
     *
     *
     * @param int    $arId            参与条件ID
     * @param array  $data            参与条件数据集
     * @param string $data["name"]    参数名称
     * @param string $data["service"]
     *
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     *
     * @return array 活动商品结果集
     *
     * @requestExample({"arId":1,"data":{"name":"21313","service":"hahahaha"}})
     * @returnExample()
     *
     * @author wechan<liweiquan@eelly.net>
     *
     * @since 2017年10月16日
     */
    public function updateRule(int $arId, array $data): bool
    {
        return EellyClient::request('activity/rule', __FUNCTION__, true, $arId, $data);
    }

    /**
     * 更新营销活动优惠规则信息.
     *
     *
     * @param int    $arId            参与条件ID
     * @param array  $data            参与条件数据集
     * @param string $data["name"]    参数名称
     * @param string $data["service"]
     *
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     *
     * @return array 活动商品结果集
     *
     * @requestExample({"arId":1,"data":{"name":"21313","service":"hahahaha"}})
     * @returnExample()
     *
     * @author wechan<liweiquan@eelly.net>
     *
     * @since 2017年10月16日
     */
    public function updateRuleAsync(int $arId, array $data)
    {
        return EellyClient::request('activity/rule', __FUNCTION__, false, $arId, $data);
    }

    /**
     * 删除参加活动店铺信息.
     *
     * @param int $arId 营销活动id
     *
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     *
     * @return array 活动条件参数结果集
     *
     * @requestExample({"arId": 1})
     * @returnExample()
     *
     * @author wechan<liweiquan@eelly.net>
     *
     * @since 2017年10月16日
     */
    public function deleteRule(int $arId): bool
    {
        return EellyClient::request('activity/rule', __FUNCTION__, true, $arId);
    }

    /**
     * 删除参加活动店铺信息.
     *
     * @param int $arId 营销活动id
     *
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     *
     * @return array 活动条件参数结果集
     *
     * @requestExample({"arId": 1})
     * @returnExample()
     *
     * @author wechan<liweiquan@eelly.net>
     *
     * @since 2017年10月16日
     */
    public function deleteRuleAsync(int $arId)
    {
        return EellyClient::request('activity/rule', __FUNCTION__, false, $arId);
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