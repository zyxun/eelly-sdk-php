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
 * 营销活动优惠规则.
 * 
 * @author wechan<liweiquan@eelly.net>
 */
interface RuleInterface
{
    /**
     * 获取营销活动优惠规则信息
     * 
     * @param int $arId 营销活动id
     *
     * @return array 活动条件参数结果集
     * 
     * @requestExample({"arId": 1})
     * @returnExample()
     * 
     * @throws Eelly\SDK\Activity\Exception\ActivityException
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年10月16日
     */
    public function getRule(int $arId): array;

    /**
     * 
     * 新增营销活动优惠规则信息
     * 
     *
     * @param array $data 参与条件数据集
     * @param string $data["name"] 参数名称
     * @param string $data["service"] 验证服务接口
     *
     *
     * @return array 活动商品结果集
     * 
     * @requestExample({"data":{"name":"21313","service":"hahahaha"}})
     * @returnExample()
     * 
     * @throws Eelly\SDK\Activity\Exception\ActivityException
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年10月16日
     */
    public function addRule(array $data): bool;

    /**
     * 
     * 更新营销活动优惠规则信息
     * 
     *
     * @param int $arId 参与条件ID
     * @param array $data 参与条件数据集
     * @param string $data["name"] 参数名称
     * @param string $data["service"]
     *
     *
     * @return array 活动商品结果集
     * 
     * @requestExample({"arId":1,"data":{"name":"21313","service":"hahahaha"}})
     * @returnExample()
     * 
     * @throws Eelly\SDK\Activity\Exception\ActivityException
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年10月16日
     */
    public function updateRule(int $arId, array $data): bool;

    /**
     * 删除参加活动店铺信息
     * 
     * @param int $arId 营销活动id
     *
     * @return array 活动条件参数结果集
     * 
     * @requestExample({"arId": 1})
     * @returnExample()
     * 
     * @throws Eelly\SDK\Activity\Exception\ActivityException
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年10月16日
     */
    public function deleteRule(int $arId): bool;
}
