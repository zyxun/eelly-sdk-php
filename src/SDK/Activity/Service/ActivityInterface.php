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

use Eelly\SDK\Activity\DTO\ActivityDTO;

/**
 * 营销活动信息.
 * 
 * @author wechan<liweiquan@eelly.net>
 */
interface ActivityInterface
{
    /**
     * 根据活动id获取活动信息.
     *
     * @param array $activityId 活动id
     *
     * @throws Eelly\SDK\Activity\Exception\ActivityException
     *
     * @return ActivityDTO 单条活动结果
     * @requestExample({"activityId": 1})
     * @returnExample({"data":{"activityId":2,"storeId":0,"title":"活动","image":"/G0/G4/xxxxxxxx","content":"活动","applyStartTime":1504317208,"applyEndTime":1504317208,"activityStartTime":1504317208,"activityEndTime":1504317208,"dayStartTime":1504317208,"dayEndTime":1504317208,"status":"0","sort":"1","range":"0","adminId":1,"adminName":"molimoq","remark":"molimoq","createdTime":null},"returnType":"Eelly\\SDK\\Activity\\DTO\\ActivityDTO"})
     *
     * @author wechan<liweiquan@eelly.net>
     *
     * @since 2017年9月2日
     */
    public function getActivity(int $activityId): ActivityDTO;

    /**
     * 根据活动id获取活动信息.
     *
     * @param array  $data                      活动id
     * @param string $data['title']             活动标题
     * @param string $data['image']             活动图片
     * @param string $data['content']           活动内容
     * @param string $data['applyStartTime']    报名开始时间
     * @param string $data['applyEndTime']      报名结束结束
     * @param string $data['activityStartTime'] 活动开始时间
     * @param string $data['activityEndTime']   活动结束时间
     * @param string $data['dayStartTime']      活动每天开始时间：0 不限，每天的第N秒数
     * @param string $data['dayEndTime']        活动每天结束时间：0 不限，每天的第N秒数，结束时间比开始时间大
     * @param string $data['status']            活动状态：0 未审核 1 审核通过 2 审核失败
     * @param int    $data['sort']              活动优先级排序
     * @param int    $data['range']             活动影响范围：0 平台级 1 店铺级 2 商品级
     * @param int    $data['adminId']           管理员ID
     * @param string $data['adminName']         管理员名称
     * @param string $data['remark']            活动备注
     * @param string $data['createdTime']       添加时间
     *
     * @throws Eelly\SDK\Activity\Exception\ActivityException
     *
     * @return bool sql操作结果
     * @requestExample({"data":{"title":"\u6d3b\u52a8","image":"\/G0\/G4\/xxxxxxxx","content":"\u6d3b\u52a8","applyStartTime":1504317208,"applyEndTime":1504317208,"activityStartTime":1504317208,"activityEndTime":1504317208,"dayStartTime":1504317208,"dayEndTime":1504317208,"status":0,"sort":1,"range":0,"adminId":1,"adminName":"molimoq","remark":"\u6d3b\u52a8","createdTime":1504317208}})
     * @returnExample(true)
     *
     * @author wechan<liweiquan@eelly.net>
     *
     * @since 2017年9月2日
     */
    public function addActivity(array $data): bool;

    /**
     * 更新活动信息
     *
     * @param int       $activityId                         活动id
     * @param array     $data                               活动数据
     * @param string    $data['title']                      活动标题
     * @param string    $data['image']                      活动图片
     * @param string    $data['content']                    活动内容
     * @param string    $data['applyStartTime']             报名开始时间
     * @param string    $data['applyEndTime']               报名结束结束
     * @param string    $data['activityStartTime']          活动开始时间
     * @param string    $data['activityEndTime']            活动结束时间
     * @param string    $data['dayStartTime']               活动每天开始时间：0 不限，每天的第N秒数
     * @param string    $data['dayEndTime']                 活动每天结束时间：0 不限，每天的第N秒数，结束时间比开始时间大
     * @param string    $data['status']                     活动状态：0 未审核 1 审核通过 2 审核失败
     * @param int       $data['sort']                       活动优先级排序
     * @param int       $data['range']                      活动影响范围：0 平台级 1 店铺级 2 商品级
     * @param int       $data['adminId']                    管理员ID
     * @param string    $data['adminName']                  管理员名称
     * @param string    $data['remark']                     活动备注
     * 
     * 
     * @throws Eelly\SDK\Activity\Exception\ActivityException
     *
     * @return bool sql操作结果
     * @requestExample({"activityId":1,"data":{"title":"\u6d3b\u52a8","image":"\/G0\/G4\/xxxxxxxx","content":"\u6d3b\u52a8","applyStartTime":1504317208,"applyEndTime":1504317208,"activityStartTime":1504317208,"activityEndTime":1504317208,"dayStartTime":1504317208,"dayEndTime":1504317208,"status":0,"sort":1,"range":0,"adminId":1,"adminName":"molimoq","remark":"\u6d3b\u52a8"}})
     * @returnExample(true)
     *
     * @author wechan<liweiquan@eelly.net>
     *
     * @since 2017年9月2日
     */
    public function updateActivity(int $activityId, array $data): bool;

    /**
     * 删除单条活动.
     *
     * @param array $activityId 活动id
     *
     * @throws Eelly\SDK\Activity\Exception\ActivityException
     *
     * @return array 单条活动结果
     * @requestExample({"activityId": 1})
     * @returnExample(true)
     *
     * @author wechan<liweiquan@eelly.net>
     *
     * @since 2017年9月2日
     */
    public function deleteActivity(int $activityId): bool;
}
