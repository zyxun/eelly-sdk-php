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
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Preview implements PreviewInterface
{
    /**
     * 设置直播时间.
     *
     * @param int $liveId 直播id
     * @param int $time   直播开始时间
     *
     * @return bool
     */
    public function setStartTime(int $liveId, int $time): bool
    {
        return EellyClient::request('live/preview', 'setStartTime', true, $liveId, $time);
    }

    /**
     * 设置直播时间.
     *
     * @param int $liveId 直播id
     * @param int $time   直播开始时间
     *
     * @return bool
     */
    public function setStartTimeAsync(int $liveId, int $time)
    {
        return EellyClient::request('live/preview', 'setStartTime', false, $liveId, $time);
    }

    /**
     * 添加或删除商品.
     *
     * @param int   $liveId   直播id
     * @param array $goodsIds 直播商品id
     * @param bool  $delete   是否删除
     *
     * @return bool
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
     */
    public function getLiveGoodsAsync(int $liveId, int $status = null)
    {
        return EellyClient::request('live/preview', 'getLiveGoods', false, $liveId, $status);
    }

    /**
     * {@inheritdoc}
     *
     * @param string|null $dateTime
     *
     * @return array
     */
    public function getTimeRange(string $dateTime = null): array
    {
        return EellyClient::request('live/preview', __FUNCTION__, true, $dateTime);
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
