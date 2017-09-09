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

namespace Eelly\SDK\Store\Service;

use Eelly\DTO\UidDTO;
use Eelly\SDK\Store\DTO\ServiceTeamDTO;

/**
 * 店铺客服组.
 *
 * @author wangjiang<wangjiang@eelly.net>
 */
interface ServiceInterface
{
    /**
     * 新增店铺客服组
     * 新增店铺客服组的信息
     *
     * @param array $teamData 客服组数据
     * @param int $teamData['storeId'] 店铺id
     * @param string $teamData['teamName'] 分组名称
     * @param string $teamData['workTime'] 上班时间
     * @param string $teamData['closeTime'] 下班时间
     * @param string $teamData['phone'] 电话号码
     * @param int $teamData['phoneStatus'] 电话状态 0不显示 1显示
     * @param UidDTO $user 登录用户信息
     * @throws \Eelly\SDK\Store\Exception\StoreException
     * @return bool 新增结果
     * @requestExample({
     *     "teamData":{
     *          "storeId":1,
     *          "teamName":"分组名称",
     *          "workTime":"00:00",
     *          "closeTime":"24:00",
     *          "phone":"13333333333333",
     *          "phoneStatus":1
     *     }
     * })
     * @returnExample(true)
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2017年9月5日
     */
    public function addServiceTeam(array $teamData, UidDTO $user = null): bool;

    /**
     * 修改店铺客服组
     * 修改店铺客服组的信息
     *
     * @param int $teamId 客服组id
     * @param string $updateField 修改的字段 teamName/分组名 workTime/上班时间 closeTime/下班时间 phone/电话号码 phoneStatus/电话状态 0不显示 1显示
     * @param string $updateValue 修改的值
     * @param UidDTO $user 登录用户信息
     * @throws \Eelly\SDK\Store\Exception\StoreException
     * @return bool 修改结果
     * @requestExample({
     *     "teamId":1,
     *     "updateField":"teamName",
     *     "updateValue":"新的分组名"
     * })
     * @returnExample(true)
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2017年9月5日
     */
    public function updateServiceTeam(int $teamId, string $updateField, string $updateValue, UidDTO $user = null): bool;

    /**
     * 删除店铺客服组
     * 同时删除店铺的客服组和客服成员
     *
     * @param int $teamId 客服组id
     * @param UidDTO $user 登录用户信息
     * @throws \Eelly\SDK\Store\Exception\StoreException
     * @return bool 删除结果
     * @requestExample({
     *     "teamId":1
     * })
     * @returnExample(true)
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2017年9月5日
     */
    public function deleteServiceTeam(int $teamId, UidDTO $user = null): bool;

    /**
     * 获取店铺客服组信息
     * 获取店铺客服组信息
     *
     * @param int $teamId 客服组id
     * @param UidDTO $user 登录用户信息
     * @throws \Eelly\SDK\Store\Exception\StoreException
     * @return \Eelly\SDK\Store\DTO\ServiceTeamDTO
     * @requestExample({
     *     "teamId":1
     * })
     * @returnExample({
     *     "teamId":1,
     *     "teamName":"分组名称",
     *     "workTime":"00:00",
     *     "closeTime":"24:00",
     *     "phone":"13333333333333",
     *     "phoneStatus":1,
     *     "createdTime":"1970-01-01 00:00:00"
     * })
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2017年9月5日
     */
    public function getServiceTeamInfo(int $teamId, UidDTO $user = null): ServiceTeamDTO;
}
