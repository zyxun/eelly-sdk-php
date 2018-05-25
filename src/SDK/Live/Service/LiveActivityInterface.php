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

namespace Eelly\SDK\Live\Service;

/**
 * 直播间活动接口
 * 
 * @author wechan
 */
interface LiveActivityInterface
{
    /**
     * 设置活动列表页
     * 
     * * key | type |  value
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
    public function liveActivitySettingPage(int $liveId):array;
    
    /**
     * 活动设置开启关闭
     * 
     * key | type |  value
     * --- | ---- | -------
     * result   |  bool  |   直播活动ID
     * 
     * @param int $laId 直播活动ID
     * @param int $status 状态：0 关闭 1 开启
     * 
     * @author wechan
     * @since 2018年05月25日
     */
    //public function setLiveActivitySettingStatus(int $laId, int $status):array;
    
    
}
