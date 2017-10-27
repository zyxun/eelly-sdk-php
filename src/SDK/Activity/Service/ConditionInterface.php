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

use Eelly\DTO\ConditionDTO;

/**
 * 营销活动优惠规则.
 * 
 * 
 * @author wechan<liweiquan@eelly.net>
 */
interface ConditionInterface
{
    /**
     * 获取参加活动店铺信息
     * 
     * @param int $acId 营销活动id
     *
     * @return array 活动条件参数结果集
     * 
     * @requestExample({"acId": 1})
     * @returnExample()
     * 
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年09月12日
     */
    public function getCondition(int $acId): array ;

    /**
     * 
     * 获取参加活动店铺信息
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
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年09月12日
     */
    public function addCondition(array $data): bool;

    /**
     * 
     * 获取参加活动店铺信息
     * 
     *
     * @param int $acId 参与条件ID
     * @param array $data 参与条件数据集
     * @param string $data["name"] 参数名称
     * @param string $data["service"]
     *
     *
     * @return array 活动商品结果集
     * 
     * @requestExample({"acId":1,"data":{"name":"21313","service":"hahahaha"}})
     * @returnExample()
     * 
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年09月12日
     */
    public function updateCondition(int $acId, array $data): bool;
    
    /**
     * 删除参加活动店铺信息
     * 
     * @param int $acId 营销活动id
     *
     * @return array 活动条件参数结果集
     * 
     * @requestExample({"acId": 1})
     * @returnExample()
     * 
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年09月12日
     */
    public function deleteCondition(int $acId): bool;
}
