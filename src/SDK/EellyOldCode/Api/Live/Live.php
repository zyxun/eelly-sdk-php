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

namespace Eelly\SDK\EellyOldCode\Api\Live;

use Eelly\SDK\EellyClient;

/**
 * Class Live.
 *
 * @author sunanzhi/zhangyangxun
 */
class Live
{
    /**
     * 获取直播间信息.
     *
     * @param int   $liveId 直播id
     * @param mixed $userId
     *
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2018年1月30日
     */
    public function getLiveRoomInfo($liveId)
    {
        return EellyClient::request('eellyOldCode/Live/Live', __FUNCTION__, true, $liveId);
    }

    /**
     * 店+直播中心=》正在直播.
     *
     * @param array  $condition
     * @param int    $page
     * @param int    $limit
     * @param string $platform
     * @param string   $order                  排序
     * @param string $field                    字段
     * @return mixed
     *
     * @author zhangyangxun
     * @since 2018-11-30
     */
    public function getProgressList(array $condition = [], int $page = 1, int $limit = 10, $platform = 'APP', string $order = 'progress', string $field = "getInfo")
    {
        return EellyClient::request('eellyOldCode/Live/Live', __FUNCTION__, true, $condition, $page, $limit, $platform, $order, $field);
    }

    /**
     * 店+直播中心=》直播预告
     *
     * @param array  $condition
     * @param int    $page
     * @param int    $limit
     * @param int    $userId
     * @param string $platform
     * @param string   $order                  排序
     * @param string $field                    字段
     * @return mixed
     *
     * @author zhangyangxun
     * @since 2018-11-30
     */ 
    public function getPendingList(array $condition = [], $page = 1, $limit = 10, $userId = 0, $platform = 'APP', $order = 'progress', $field = "getInfo")
    {
        return EellyClient::request('eellyOldCode/Live/Live', __FUNCTION__, true, $condition, $page, $limit, $userId, $platform, $order, $field);
    }

    /**
     * 获取直播广告列表.
     *
     * @author zhangyangxun
     * @since 2018-11-30
     */
    public function getLiveAdvertList()
    {
        return EellyClient::request('eellyOldCode/Live/Live', __FUNCTION__, true);
    }

    /**
     * 获取主播资料信息.
     *
     * @param $userId
     * @return mixed
     *
     * @author zhangyangxun
     * @since 2018-11-30
     */
    public function getAnnouncerInfo($userId)
    {
        return EellyClient::request('eellyOldCode/Live/Live', __FUNCTION__, true, $userId);
    }


    /**
     * 获取直播间快捷评论问题.
     *
     * @param int $page  页码
     * @param int $limit 每页返回数量
     * @return array
     *
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2018年2月1日
     */
    public function getLiveQuickQuestion($page = 1, $limit = 10)
    {
        return EellyClient::request('eellyOldCode/Live/Live', __FUNCTION__, true, $page, $limit);
    }

    /**
     * 添加视频订阅数据.
     *
     * @param int $liveId 直播id
     * @param int $userId 用户id
     * @return mixed
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.02.06
     */
    public function addSubscribe($liveId, $userId = 0)
    {
        return EellyClient::request('eellyOldCode/Live/Live', __FUNCTION__, true, $liveId, $userId);
    }

    /**
     * 店+通过直播ID获取直播数据和直播下面的商品，不做分页区分.
     *
     * @param int $liveId   直播ID
     * @param int $loginUid 登录ID
     * @return mixed
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2018年01月26日
     */
    public function getLiveGoodsInfo($liveId, $loginUid = 0)
    {
        return EellyClient::request('eellyOldCode/Live/Live', __FUNCTION__, true, $liveId, $loginUid);
    }

    /**
    * 获取一个直播的统计数据.

    * @param int $liveId 直播ID
    * @param int $type   1 表示店+/厂家不需要同步数据的，2表示厂家+需要同步数据的
    * @return mixed
    *
    * @author 肖俊明<xiaojunming@eelly.net>
    * @since 2018年01月29日
    */
    public function getLiveStatsInfo($liveId, $type = 1)
    {
        return EellyClient::request('eellyOldCode/Live/Live', __FUNCTION__, true, $liveId, $type);
    }
    
    /**
     * 店+直播中心=》直播记录.
     *
     * @param array  $condition 查询条件
     * @param int    $page      第几页
     * @param int    $limit     每页条数
     * @param string $platform  平台类型 APP WAP PC APPLET
     * @param string   $order   排序
     * @param string $field     字段
     *
     * @return array
     *
     * @author  wechan
     * @since 2019年01月07日
     */
    public function getRecordingList(array $condition = [], $page = 1, $limit = 10, $platform = 'APP', $order = 'finishLive', $field = "getInfo")
    {
        return EellyClient::request('eellyOldCode/Live/Live', __FUNCTION__, true, $condition, $page, $limit, $platform, $order, $field);
    }
}
