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
 * 买家参与营销活动条件参数.
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
     * @throws Eelly\SDK\Activity\Exception\ActivityException
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年09月12日
     */
    public function getCondition(int $acId): ConditionDTO;

    /**
     * 
     * 获取参加活动店铺信息
     * 
     * @reqArgs
     *
     * @return array 活动商品结果集
     * 
     * @requestExample({"acId": 1})
     * @returnExample()
     * 
     * @throws Eelly\SDK\Activity\Exception\ActivityException
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年09月12日
     */
    public function addCondition(array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateCondition(int $conditionId, array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteCondition(int $conditionId): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listConditionPage(array $condition = [], int $limit = 10, int $currentPage = 1): array;
    
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
     * @throws Eelly\SDK\Activity\Exception\ActivityException
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年09月12日
     */
    public function deleteCondition(int $acId): bool;
}
