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
 * Class Operation.
 *
 * @author sunanzhi <sunanzhi@hotmail.com>
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
     *
     * @since 2018年1月30日
     */
    public function getLiveRoomInfo($liveId, $userId)
    {
        return EellyClient::request('eellyOldCode/Live/Live', __FUNCTION__, true, $liveId, $userId);
    }

    /**
     * 店+直播中心=》正在直播.
     *
     * @param array  $condition
     * @param int    $page
     * @param int    $limit
     * @param string $platform
     * @return mixed
     *
     * @author zhangyangxun
     * @since 2018-11-30
     */
    public function getProgressList(array $condition = [], int $page = 1, int $limit = 10, $platform = 'APP')
    {
        return EellyClient::request('eellyOldCode/Live/Live', __FUNCTION__, true, $condition, $page, $limit, $platform);
    }

    /**
     * 店+直播中心=》直播预告
     *
     * @param array  $condition
     * @param int    $page
     * @param int    $limit
     * @param int    $userId
     * @param string $platform
     * @return mixed
     *
     * @author zhangyangxun
     * @since 2018-11-30
     */
    public function getPendingList(array $condition = [], $page = 1, $limit = 10, $userId = 0, $platform = 'APP')
    {
        return EellyClient::request('eellyOldCode/Live/Live', __FUNCTION__, true, $condition, $page, $limit, $userId, $platform);
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
}
