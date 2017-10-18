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

use Eelly\DTO\QualificationRelDTO;

/**
 * 店铺申请参加营销活动资格.
 * 
 * @author wechan<liweiquan@eelly.net>
 */
interface QualificationRelInterface
{
    /**
     * 根据主键id获取店铺申请参加营销活动资格信息
     * 
     * @param int $activityId 营销活动id
     *
     * @return 买家营销活动条件结果集
     * 
     * @requestExample({"activityId": 1})
     * @returnExample()
     * 
     * @throws Eelly\SDK\Activity\Exception\ActivityException
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年10月09日
     * 
     */
    public function getQualificationRel(int $activityId): array;

    /**
     * 新增店铺申请参加营销活动资格信息
     * 
     * @param array $data 买家营销活动条件数据
     * @param int $data["activityId"] 活动ID
     * @param int $data["acId"] 参与条件ID
     * @param int $data["mode"] 匹配模式：0 不匹配 1 等于 2 大于 3 小于 4大于等于 5小于等于
     * @param string $data["value"] 验证返回值
     * 
     * @requestExample({"data":{"activityId":1,"aqId":1,"mode":1,"value":"true"}})
     * @returnExample()
     * 
     * @throws Eelly\SDK\Activity\Exception\ActivityException
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年10月09日
     */
    public function addQualificationRel(array $data): bool;

    /**
     * 更新店铺申请参加营销活动资格信息
     * 
     *
     * @param int $arId 参与条件关系ID
     * @param array $data 买家营销活动条件数据
     * @param int $data["activityId"] 营销活动ID
     * @param int $data["mode"] 匹配模式：0 不匹配 1 等于 2 大于 3 小于 4大于等于 5小于等于
     * @param string $data["value"] 验证返回值
     *
     *
     * @return 买家营销活动条件结果集
     * 
     * @requestExample({"arId":1,"data":{"activityId":1,"aqId":1,"mode":1,"value":"true"}})
     * @returnExample()
     * 
     * @throws Eelly\SDK\Activity\Exception\ActivityException
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年10月09日
     */
    public function updateQualificationRel(int $arId, array $data): bool;

    /** 
     * 删除买家营销活动参加条件信息
     * 
     * @param int arId 参与条件关系ID
     *
     * @return 买家营销活动条件结果集
     * 
     * @requestExample({"arId": 1})
     * @returnExample()
     * 
     * @throws Eelly\SDK\Activity\Exception\ActivityException
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年10月09日
     */
    public function deleteQualificationRel(int $arId): bool;
}
