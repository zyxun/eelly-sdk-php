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
use Eelly\DTO\UidDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class LiveActivity implements LiveActivityInterface
{
    /**
     * 设置活动列表页.
     *
     * ## 返回数据说明
     *
     * 字段|类型|说明
     * ------------------|-------|--------------
     * latId             |int    |直播活动类型ID
     * title             |string |标题
     * required          |string |任务要求
     * colorRequire      |string |带颜色字体
     * awardType         |array  |奖品类型
     * awardTypeSelected |int    |选中类型
     * status            |int    |活动状态，1开启，0表示关闭
     * awardNumber       |int    |奖励人数
     *
     * @param int         $liveId 直播ID
     * @param UidDTO|null $uidDTO
     *
     * @return array
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2018年05月26日
     * @requestExample({"liveId":1})
     * @returnExample([
     *   {
     *       "latId": 1,
     *       "title": "直播间引流活动 ①",
     *       "required": "分享我的直播速度最快的前N名用户",
     *       "colorRequire": "速度最快",
     *       "awardType": [
     *           {
     *               "awardId": 1,
     *               "name": "送店铺商品"
     *           },
     *           {
     *               "awardId": 2,
     *               "name": "直播时主播公布"
     *           }
     *       ],
     *       "awardTypeSelected": 1,
     *       "status": 0,
     *       "awardNumber": 2
     *   },
     *   {
     *       "latId": 2,
     *       "title": "直播间引流活动 ②",
     *       "required": "分享我的直播次数最多的前N名用户",
     *       "colorRequire": "次数最多",
     *       "awardType": [
     *           {
     *               "awardId": 1,
     *               "name": "送店铺商品"
     *           },
     *           {
     *               "awardId": 2,
     *               "name": "直播时主播公布"
     *           }
     *       ],
     *       "awardTypeSelected": 1,
     *       "status": 0,
     *       "awardNumber": 2
     *   },
     *   {
     *      "latId": 3,
     *       "title": "直播间引流活动 ③",
     *       "required": "分享我的直播带来新观众最多的前N名用户",
     *       "colorRequire": "新观众最多",
     *       "awardType": [
     *           {
     *               "awardId": 1,
     *               "name": "送店铺商品"
     *           },
     *           {
     *               "awardId": 2,
     *               "name": "直播时主播公布"
     *           }
     *       ],
     *       "awardTypeSelected": 1,
     *       "status": 0,
     *       "awardNumber": 2
     *   }
     *])
     */
    public function liveActivitySettingPage(int $liveId, UidDTO $uidDTO = null): array
    {
        return EellyClient::request('live/liveActivity', 'liveActivitySettingPage', true, $liveId, $uidDTO);
    }

    /**
     * 设置活动列表页.
     *
     * ## 返回数据说明
     *
     * 字段|类型|说明
     * ------------------|-------|--------------
     * latId             |int    |直播活动类型ID
     * title             |string |标题
     * required          |string |任务要求
     * colorRequire      |string |带颜色字体
     * awardType         |array  |奖品类型
     * awardTypeSelected |int    |选中类型
     * status            |int    |活动状态，1开启，0表示关闭
     * awardNumber       |int    |奖励人数
     *
     * @param int         $liveId 直播ID
     * @param UidDTO|null $uidDTO
     *
     * @return array
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2018年05月26日
     * @requestExample({"liveId":1})
     * @returnExample([
     *   {
     *       "latId": 1,
     *       "title": "直播间引流活动 ①",
     *       "required": "分享我的直播速度最快的前N名用户",
     *       "colorRequire": "速度最快",
     *       "awardType": [
     *           {
     *               "awardId": 1,
     *               "name": "送店铺商品"
     *           },
     *           {
     *               "awardId": 2,
     *               "name": "直播时主播公布"
     *           }
     *       ],
     *       "awardTypeSelected": 1,
     *       "status": 0,
     *       "awardNumber": 2
     *   },
     *   {
     *       "latId": 2,
     *       "title": "直播间引流活动 ②",
     *       "required": "分享我的直播次数最多的前N名用户",
     *       "colorRequire": "次数最多",
     *       "awardType": [
     *           {
     *               "awardId": 1,
     *               "name": "送店铺商品"
     *           },
     *           {
     *               "awardId": 2,
     *               "name": "直播时主播公布"
     *           }
     *       ],
     *       "awardTypeSelected": 1,
     *       "status": 0,
     *       "awardNumber": 2
     *   },
     *   {
     *      "latId": 3,
     *       "title": "直播间引流活动 ③",
     *       "required": "分享我的直播带来新观众最多的前N名用户",
     *       "colorRequire": "新观众最多",
     *       "awardType": [
     *           {
     *               "awardId": 1,
     *               "name": "送店铺商品"
     *           },
     *           {
     *               "awardId": 2,
     *               "name": "直播时主播公布"
     *           }
     *       ],
     *       "awardTypeSelected": 1,
     *       "status": 0,
     *       "awardNumber": 2
     *   }
     *])
     */
    public function liveActivitySettingPageAsync(int $liveId, UidDTO $uidDTO = null)
    {
        return EellyClient::request('live/liveActivity', 'liveActivitySettingPage', false, $liveId, $uidDTO);
    }

    /**
     * 活动设置更新.
     *
     * @param array $data                  活动设置参数
     * @param int   $data[]['latId']       直播活动类型ID
     * @param int   $data[]['liveId']      直播id
     * @param int   $data[]['awardType']   奖励类型：1 送店铺商品 2 直播时主播公布
     * @param int   $data[]['status']      状态：0 关闭 1 已开启
     * @param int   $data[]['awardNumber'] 奖励人数
     *
     * @return bool
     * @returnExample([
     *   {
     *     "latId": 1,
     *     "liveId": 1,
     *     "awardType": 1,
     *     "awardNumber": 10,
     *     "status": 1
     *   },
     *   {
     *     "latId": 2,
     *     "liveId": 1,
     *     "awardType": 2,
     *     "awardNumber": 20,
     *     "status": 1
     *   },
     *   {
     *     "latId": 3,
     *     "liveId": 1,
     *     "awardType": 2,
     *     "awardNumber": 30,
     *     "status": 0
     *   }
     *])
     * @returnExample(true)
     *
     * @author hehui
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2018年05月25日
     */
    public function setLiveActivitySettingStatus(array $data, UidDTO $uidDTO = null): bool
    {
        return EellyClient::request('live/liveActivity', 'setLiveActivitySettingStatus', true, $data, $uidDTO);
    }

    /**
     * 活动设置更新.
     *
     * @param array $data                  活动设置参数
     * @param int   $data[]['latId']       直播活动类型ID
     * @param int   $data[]['liveId']      直播id
     * @param int   $data[]['awardType']   奖励类型：1 送店铺商品 2 直播时主播公布
     * @param int   $data[]['status']      状态：0 关闭 1 已开启
     * @param int   $data[]['awardNumber'] 奖励人数
     *
     * @return bool
     * @returnExample([
     *   {
     *     "latId": 1,
     *     "liveId": 1,
     *     "awardType": 1,
     *     "awardNumber": 10,
     *     "status": 1
     *   },
     *   {
     *     "latId": 2,
     *     "liveId": 1,
     *     "awardType": 2,
     *     "awardNumber": 20,
     *     "status": 1
     *   },
     *   {
     *     "latId": 3,
     *     "liveId": 1,
     *     "awardType": 2,
     *     "awardNumber": 30,
     *     "status": 0
     *   }
     *])
     * @returnExample(true)
     *
     * @author hehui
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2018年05月25日
     */
    public function setLiveActivitySettingStatusAsync(array $data, UidDTO $uidDTO = null)
    {
        return EellyClient::request('live/liveActivity', 'setLiveActivitySettingStatus', false, $data, $uidDTO);
    }

    /**
     * 直播间福利活动页.
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
     * endTime          |   int      |   结束时间
     * hasActivity      |   int      |   是否有发布过活动 0.否 1.是
     * lasId            |   int      |   直播活动设置ID
     * latId            |   int      |   直播活动类型ID
     * timeInterval     |   int      |   时间间隔(秒)：0 持续活动 >0 活动间隔X秒
     * 
     * @param int $liveId 直播ID
     * @param UidDTO|null $uidDTO
     *
     * @author wechan
     *
     * @since 2018年5月25日
     */
    public function getLiveActivityList(int $liveId, UidDTO $uidDTO = null): array
    {
        return EellyClient::request('live/liveActivity', 'getLiveActivityList', true, $liveId, $uidDTO);
    }

    /**
     * 直播间福利活动页.
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
     * endTime          |   int      |   结束时间
     * hasActivity      |   int      |   是否有发布过活动 0.否 1.是
     * lasId            |   int      |   直播活动设置ID
     * latId            |   int      |   直播活动类型ID
     * timeInterval     |   int      |   时间间隔(秒)：0 持续活动 >0 活动间隔X秒
     * 
     * @param int $liveId 直播ID
     * @param UidDTO|null $uidDTO
     *
     * @author wechan
     *
     * @since 2018年5月25日
     */
    public function getLiveActivityListAsync(int $liveId, UidDTO $uidDTO = null)
    {
        return EellyClient::request('live/liveActivity', 'getLiveActivityList', false, $liveId, $uidDTO);
    }

    /**
     * 发布直播活动.
     *
     * @param int   $liveId             直播ID
     * @param array $params             请求参数
     * @param array $params['lasId']    直播活动设置ID
     * @param array $params['plusTime'] 倒计时时间（秒）
     *
     * @return int 新发布的活动id
     *
     * @requestExample({
     *     "liveId": 123,
     *     "params": {
     *         "lasId": 4,
     *         "plusTime": 60
     *     }
     * })
     * 
     * @returnExample(13)
     *
     * @author hehui<hehui@eelly.net>
     */
    public function setLiveActivity(int $liveId, array $params): int
    {
        return EellyClient::request('live/liveActivity', 'setLiveActivity', true, $liveId, $params);
    }

    /**
     * 发布直播活动.
     *
     * @param int   $liveId             直播ID
     * @param array $params             请求参数
     * @param array $params['lasId']    直播活动设置ID
     * @param array $params['plusTime'] 倒计时时间（秒）
     *
     * @return int 新发布的活动id
     *
     * @requestExample({
     *     "liveId": 123,
     *     "params": {
     *         "lasId": 4,
     *         "plusTime": 60
     *     }
     * })
     * 
     * @returnExample(13)
     *
     * @author hehui<hehui@eelly.net>
     */
    public function setLiveActivityAsync(int $liveId, array $params)
    {
        return EellyClient::request('live/liveActivity', 'setLiveActivity', false, $liveId, $params);
    }

    /**
     * 直播活动奖励页.
     *
     * > 返回数据说明
     *
     * key | type |  value
     * --- | ---- | -------
     * awardTypeName    |   array    |   奖励类型名称
     * awardNumber      |   int      |   奖励人数
     * status           |   int      |   状态: 0.已结束 1.进行中 2.即将开始
     * latId            |   int      |   平台级直播活动类型id 1.分享直播最快 2.分享最多 3分享有效最多
     * count            |   int      |   统计次数 latId 1.count>0为排名数,count为0时显示暂无排名 2.我分享的人数 3.我带来的人数
     *
     * @param int $liveId 直播ID
     * @param UidDTO|null $uidDTO
     *
     * @author wechan
     *
     * @since 2018年5月25日
     */
    public function getLiveActivityDoor(int $liveId, UidDTO $uidDTO = null): array
    {
        return EellyClient::request('live/liveActivity', 'getLiveActivityDoor', true, $liveId, $uidDTO);
    }

    /**
     * 直播活动奖励页.
     *
     * > 返回数据说明
     *
     * key | type |  value
     * --- | ---- | -------
     * awardTypeName    |   array    |   奖励类型名称
     * awardNumber      |   int      |   奖励人数
     * status           |   int      |   状态: 0.已结束 1.进行中 2.即将开始
     * latId            |   int      |   平台级直播活动类型id 1.分享直播最快 2.分享最多 3分享有效最多
     * count            |   int      |   统计次数 latId 1.count>0为排名数,count为0时显示暂无排名 2.我分享的人数 3.我带来的人数
     *
     * @param int $liveId 直播ID
     * @param UidDTO|null $uidDTO
     *
     * @author wechan
     *
     * @since 2018年5月25日
     */
    public function getLiveActivityDoorAsync(int $liveId, UidDTO $uidDTO = null)
    {
        return EellyClient::request('live/liveActivity', 'getLiveActivityDoor', false, $liveId, $uidDTO);
    }

    /**
     * 厂家发送活动10秒倒计时消息给店家.
     *
     * @param int $laId  活动id
     *
     * @return bool
     *
     * @requestExample({"laId":123})
     *
     * @returnExample(true)
     *
     * @author hehui<hehui@eelly.net>
     */
    public function sendLiveActivityCountdownMsg(int $laId): bool
    {
        return EellyClient::request('live/liveActivity', 'sendLiveActivityCountdownMsg', true, $laId);
    }

    /**
     * 厂家发送活动10秒倒计时消息给店家.
     *
     * @param int $laId  活动id
     *
     * @return bool
     *
     * @requestExample({"laId":123})
     *
     * @returnExample(true)
     *
     * @author hehui<hehui@eelly.net>
     */
    public function sendLiveActivityCountdownMsgAsync(int $laId)
    {
        return EellyClient::request('live/liveActivity', 'sendLiveActivityCountdownMsg', false, $laId);
    }

    /**
     * 根据直播id返回该直播是参加活动数
     * 
     * > 返回数据说明
     * @requestExample({"1":"2","2":"2"})
     * 
     * @param array $liveIds 直播id
     * 
     * @return array
     * 
     * @author wechan
     * @since 2018年05月29日
     */
    public function getCountJoinActivityByLiveId(array $liveIds): array
    {
        return EellyClient::request('live/liveActivity', 'getCountJoinActivityByLiveId', true, $liveIds);
    }

    /**
     * 根据直播id返回该直播是参加活动数
     * 
     * > 返回数据说明
     * @requestExample({"1":"2","2":"2"})
     * 
     * @param array $liveIds 直播id
     * 
     * @return array
     * 
     * @author wechan
     * @since 2018年05月29日
     */
    public function getCountJoinActivityByLiveIdAsync(array $liveIds)
    {
        return EellyClient::request('live/liveActivity', 'getCountJoinActivityByLiveId', false, $liveIds);
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