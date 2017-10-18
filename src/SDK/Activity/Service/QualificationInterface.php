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
 * 店铺申请参加营销活动资格参数.
 * 
 * @author wechan<liweiquan@eelly.net>
 */
interface QualificationInterface
{
    /**
     * 获取参加活动店铺信息
     * 
     * @param int $aqId 营销活动id
     *
     * @return array 活动条件参数结果集
     * 
     * @requestExample({"aqId": 1})
     * @returnExample()
     * 
     * @throws Eelly\SDK\Activity\Exception\ActivityException
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年10月12日
     */
    public function getQualification(int $aqId): array;

    /**
     * 
     * 新增店铺申请参加营销活动资格参数
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
     * @since 2017年10月12日
     */
    public function addQualification(array $data): bool;

    /**
     * 
     * 更新店铺申请参加营销活动资格参数
     * 
     *
     * @param int $aqId 参与条件ID
     * @param array $data 参与条件数据集
     * @param string $data["name"] 参数名称
     * @param string $data["service"]
     *
     *
     * @return array 活动商品结果集
     * 
     * @requestExample({"aqId":1,"data":{"name":"21313","service":"hahahaha"}})
     * @returnExample()
     * 
     * @throws Eelly\SDK\Activity\Exception\ActivityException
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年10月12日
     */
    public function updateQualification(int $aqId, array $data): bool;

    /**
     * 删除参加活动店铺信息
     * 
     * @param int $aqId 营销活动id
     *
     * @return array 活动条件参数结果集
     * 
     * @requestExample({"aqId": 1})
     * @returnExample()
     * 
     * @throws Eelly\SDK\Activity\Exception\ActivityException
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年10月12日
     */
    public function deleteQualification(int $aqId): bool;
}
