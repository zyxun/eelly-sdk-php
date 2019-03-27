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
use Eelly\SDK\Live\Service\PreviewInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Preview implements PreviewInterface
{
    /**
     * 设置直播时间.
     *
     * @param int $liveId 直播id
     * @param int $time   直播开始时间
     * @param int $lpId 直播场次id
     *
     * @return bool
     *
     * @author hehui<hehui@eelly.net>
     */
    public function setStartTime(int $liveId, int $time, int $lpId = 0): bool
    {
        return EellyClient::request('live/preview', 'setStartTime', true, $liveId, $time, $lpId);
    }

    /**
     * 设置直播时间.
     *
     * @param int $liveId 直播id
     * @param int $time   直播开始时间
     * @param int $lpId 直播场次id
     *
     * @return bool
     *
     * @author hehui<hehui@eelly.net>
     */
    public function setStartTimeAsync(int $liveId, int $time, int $lpId = 0)
    {
        return EellyClient::request('live/preview', 'setStartTime', false, $liveId, $time, $lpId);
    }

    /**
     * 添加或删除商品.
     *
     * @param int   $liveId   直播id
     * @param array $goodsIds 直播商品id
     * @param bool  $delete   是否删除
     *
     * @return bool
     *
     * @author hehui<hehui@eelly.net>
     */
    public function addGoods(int $liveId, array $goodsIds, bool $delete = false): bool
    {
        return EellyClient::request('live/preview', 'addGoods', true, $liveId, $goodsIds, $delete);
    }

    /**
     * 添加或删除商品.
     *
     * @param int   $liveId   直播id
     * @param array $goodsIds 直播商品id
     * @param bool  $delete   是否删除
     *
     * @return bool
     *
     * @author hehui<hehui@eelly.net>
     */
    public function addGoodsAsync(int $liveId, array $goodsIds, bool $delete = false)
    {
        return EellyClient::request('live/preview', 'addGoods', false, $liveId, $goodsIds, $delete);
    }

    /**
     * 设置直播标题.
     *
     * @param int    $liveId 直播id
     * @param string $title  直播标题
     *
     * @return bool
     *
     * @author hehui<hehui@eelly.net>
     */
    public function setTitle(int $liveId, string $title): bool
    {
        return EellyClient::request('live/preview', 'setTitle', true, $liveId, $title);
    }

    /**
     * 设置直播标题.
     *
     * @param int    $liveId 直播id
     * @param string $title  直播标题
     *
     * @return bool
     *
     * @author hehui<hehui@eelly.net>
     */
    public function setTitleAsync(int $liveId, string $title)
    {
        return EellyClient::request('live/preview', 'setTitle', false, $liveId, $title);
    }

    /**
     * 设置直播封面.
     *
     * @param int    $liveId
     * @param string $imgUrl
     *
     * @return bool
     *
     * @author hehui<hehui@eelly.net>
     */
    public function setImage(int $liveId, string $imgUrl): bool
    {
        return EellyClient::request('live/preview', 'setImage', true, $liveId, $imgUrl);
    }

    /**
     * 设置直播封面.
     *
     * @param int    $liveId
     * @param string $imgUrl
     *
     * @return bool
     *
     * @author hehui<hehui@eelly.net>
     */
    public function setImageAsync(int $liveId, string $imgUrl)
    {
        return EellyClient::request('live/preview', 'setImage', false, $liveId, $imgUrl);
    }

    /**
     * 获取直播中的商品.
     *
     * @param int $liveId
     *
     * @return array
     *
     * @author hehui<hehui@eelly.net>
     */
    public function getLiveGoods(int $liveId, int $status = null): array
    {
        return EellyClient::request('live/preview', 'getLiveGoods', true, $liveId, $status);
    }

    /**
     * 获取直播中的商品.
     *
     * @param int $liveId
     *
     * @return array
     *
     * @author hehui<hehui@eelly.net>
     */
    public function getLiveGoodsAsync(int $liveId, int $status = null)
    {
        return EellyClient::request('live/preview', 'getLiveGoods', false, $liveId, $status);
    }

    /**
     * 获取直播时间段.
     *
     * @param string|null $dateTime 日期(例如: 2018-04-01)
     * @param bool $isPay 是否收费场次
     * @param array $status 状态：0 未启用 1 启用
     * @param int $liveType 直播类型(1.白天场 2.白天连播场 3.晚上场 4.晚上连播场 5.全天连播场 6.普通场 7.凌晨场)
     *
     * @return array
     *
     * @author hehui<hehui@eelly.net>
     */
    public function getTimeRange(string $dateTime = null, bool $isPay = true, array $status = [1], int $liveType): array
    {
        return EellyClient::request('live/preview', 'getTimeRange', true, $dateTime, $isPay, $status, $liveType);
    }

    /**
     * 获取直播时间段.
     *
     * @param string|null $dateTime 日期(例如: 2018-04-01)
     * @param bool $isPay 是否收费场次
     * @param array $status 状态：0 未启用 1 启用
     * @param int $liveType 直播类型(1.白天场 2.白天连播场 3.晚上场 4.晚上连播场 5.全天连播场 6.普通场 7.凌晨场)
     *
     * @return array
     *
     * @author hehui<hehui@eelly.net>
     */
    public function getTimeRangeAsync(string $dateTime = null, bool $isPay = true, array $status = [1], int $liveType)
    {
        return EellyClient::request('live/preview', 'getTimeRange', false, $dateTime, $isPay, $status, $liveType);
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