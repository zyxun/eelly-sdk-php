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

namespace Eelly\SDK\Live\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Live\Service\LiveActivityInterface;
use Eelly\SDK\Live\Service\UidDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class LiveActivity implements LiveActivityInterface
{
    /**
     * 设置活动列表页
     * 
     * > 返回数据说明
     * 
     * key | type |  value
     * --- | ---- | -------
     * laId             |   int      |   直播活动ID
     * title            |   string   |   直播活动标题
     * taskRequired     |   string   |   任务要求
     * awardType        |   array    |   奖励类型：1 送店铺商品 2 直播时主播公布
     * status           |   int      |   状态：0 未开启 1 已开启
     * awardTypeSelected|   int      |   默认选择的奖励类型
     * awardNumber      |   int      |   默认选择的人数
     * 
     * 
     * @param int $liveId 直播id
     * 
     * @author wechan
     * @since 2018年05月25日
     */
    public function liveActivitySettingPage(int $liveId): array
    {
        return EellyClient::request('live/liveActivity', 'liveActivitySettingPage', true, $liveId);
    }

    /**
     * 设置活动列表页
     * 
     * > 返回数据说明
     * 
     * key | type |  value
     * --- | ---- | -------
     * laId             |   int      |   直播活动ID
     * title            |   string   |   直播活动标题
     * taskRequired     |   string   |   任务要求
     * awardType        |   array    |   奖励类型：1 送店铺商品 2 直播时主播公布
     * status           |   int      |   状态：0 未开启 1 已开启
     * awardTypeSelected|   int      |   默认选择的奖励类型
     * awardNumber      |   int      |   默认选择的人数
     * 
     * 
     * @param int $liveId 直播id
     * 
     * @author wechan
     * @since 2018年05月25日
     */
    public function liveActivitySettingPageAsync(int $liveId)
    {
        return EellyClient::request('live/liveActivity', 'liveActivitySettingPage', false, $liveId);
    }

    /**
     * 活动设置更新
     * 
     * @param int $data[]['laId'] 直播活动id
     * @param int $data[]['awardType'] 奖励类型：1 送店铺商品 2 直播时主播公布
     * @param int $data[]['status'] 状态：0 关闭 1 已开启
     * @param int $data[]['awardNumber']  奖励人数
     * 
     * > 返回数据说明
     * @returnExample(true)
     * 
     * @author hehui
     * @since 2018年05月25日
     */
    public function setLiveActivitySettingStatus(array $data): bool
    {
        return EellyClient::request('live/liveActivity', 'setLiveActivitySettingStatus', true, $data);
    }

    /**
     * 活动设置更新
     * 
     * @param int $data[]['laId'] 直播活动id
     * @param int $data[]['awardType'] 奖励类型：1 送店铺商品 2 直播时主播公布
     * @param int $data[]['status'] 状态：0 关闭 1 已开启
     * @param int $data[]['awardNumber']  奖励人数
     * 
     * > 返回数据说明
     * @returnExample(true)
     * 
     * @author hehui
     * @since 2018年05月25日
     */
    public function setLiveActivitySettingStatusAsync(array $data)
    {
        return EellyClient::request('live/liveActivity', 'setLiveActivitySettingStatus', false, $data);
    }

    /**
     * 直播间福利活动页
     * 
     * > 返回数据说明
     * 
     * key | type |  value
     * --- | ---- | -------
     * title            |   string   |   直播活动标题
     * awardTypeName    |   array    |   奖励类型名称
     * awardNumber      |   int      |   奖励人数
     * plusTime         |   int      |   倒计时时间
     * startTime        |   int      |   开始时间
     * endTime          |   int      |   开始时间
     * 
     * @param int $liveId 直播ID
     * 
     * @author wechan
     * @since 2018年5月25日
     */
    public function getLiveActivityList(int $liveId): array
    {
        return EellyClient::request('live/liveActivity', 'getLiveActivityList', true, $liveId);
    }

    /**
     * 直播间福利活动页
     * 
     * > 返回数据说明
     * 
     * key | type |  value
     * --- | ---- | -------
     * title            |   string   |   直播活动标题
     * awardTypeName    |   array    |   奖励类型名称
     * awardNumber      |   int      |   奖励人数
     * plusTime         |   int      |   倒计时时间
     * startTime        |   int      |   开始时间
     * endTime          |   int      |   开始时间
     * 
     * @param int $liveId 直播ID
     * 
     * @author wechan
     * @since 2018年5月25日
     */
    public function getLiveActivityListAsync(int $liveId)
    {
        return EellyClient::request('live/liveActivity', 'getLiveActivityList', false, $liveId);
    }

    /**
     * 发布直播活动
     * 
     * @param int $liveId 直播ID
     * @param array $params 请求参数
     * @param array $params['lasId'] 直播活动设置ID
     * @param array $params['plusTime'] 倒计时时间
     * 
     * 
     * > 返回数据说明
     * @returnExample(true)
     * 
     * @author hehui
     * @since 2018年5月25日
     */
    public function setLiveActivity(int $liveId, $params): bool
    {
        return EellyClient::request('live/liveActivity', 'setLiveActivity', true, $liveId, $params);
    }

    /**
     * 发布直播活动
     * 
     * @param int $liveId 直播ID
     * @param array $params 请求参数
     * @param array $params['lasId'] 直播活动设置ID
     * @param array $params['plusTime'] 倒计时时间
     * 
     * 
     * > 返回数据说明
     * @returnExample(true)
     * 
     * @author hehui
     * @since 2018年5月25日
     */
    public function setLiveActivityAsync(int $liveId, $params)
    {
        return EellyClient::request('live/liveActivity', 'setLiveActivity', false, $liveId, $params);
    }

    /**
     * 直播活动奖励页
     * 
     * > 返回数据说明
     * 
     * key | type |  value
     * --- | ---- | -------
     * title            |   string   |   直播活动标题
     * awardTypeName    |   array    |   奖励类型名称
     * awardNumber      |   int      |   奖励人数
     * status           |   int      |   状态: 0.已结束 1.进行中 2.即将开始
     * latId            |   int      |   平台级直播活动类型id 1.分享直播最快 2.分享最多 3分享有效最多
     * count            |   int      |   统计次数 latId 1.为0  2.我分享的人数 3.我带来的人数 
     * 
     * @param int $liveId 直播ID
     * 
     * @author wechan
     * @since 2018年5月25日
     */
    public function getLiveActivityDoor(int $liveId, UidDTO $uidDTO = null): array
    {
        return EellyClient::request('live/liveActivity', 'getLiveActivityDoor', true, $liveId, $uidDTO);
    }

    /**
     * 直播活动奖励页
     * 
     * > 返回数据说明
     * 
     * key | type |  value
     * --- | ---- | -------
     * title            |   string   |   直播活动标题
     * awardTypeName    |   array    |   奖励类型名称
     * awardNumber      |   int      |   奖励人数
     * status           |   int      |   状态: 0.已结束 1.进行中 2.即将开始
     * latId            |   int      |   平台级直播活动类型id 1.分享直播最快 2.分享最多 3分享有效最多
     * count            |   int      |   统计次数 latId 1.为0  2.我分享的人数 3.我带来的人数 
     * 
     * @param int $liveId 直播ID
     * 
     * @author wechan
     * @since 2018年5月25日
     */
    public function getLiveActivityDoorAsync(int $liveId, UidDTO $uidDTO = null)
    {
        return EellyClient::request('live/liveActivity', 'getLiveActivityDoor', false, $liveId, $uidDTO);
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