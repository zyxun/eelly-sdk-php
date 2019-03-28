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

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class LiveTop
{
    /**
     * 获取置顶卡
     * 
     * > 返回数据字段说明
     * 
     * key | type | value
     * --- | ---- | -----
     * topCard | int | 可用置顶卡数量
     * nowInTopPosition | int | 正在置顶位置的数量
     * canClick | int | 按钮是否可以点击 0:否 1:是
     * buttonText | string | 按钮文案
     * remark | string | 置顶卡描述
     * waitCountDown | int | 等待时长 0：无需等待不用显示 
     * topTime | int | 可置顶时长 分钟单位
     * topNumber | int | 可同时置顶的数量
     * topRow | string | 位置排位 例如 '1-2' 
     *
     * @param integer $liveId 直播id
     * @return array
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.3.26
     */
    public function getTop(int $liveId): array
    {
        return EellyClient::request('live/liveTop', 'getTop', true, $liveId);
    }

    /**
     * 获取置顶卡
     * 
     * > 返回数据字段说明
     * 
     * key | type | value
     * --- | ---- | -----
     * topCard | int | 可用置顶卡数量
     * nowInTopPosition | int | 正在置顶位置的数量
     * canClick | int | 按钮是否可以点击 0:否 1:是
     * buttonText | string | 按钮文案
     * remark | string | 置顶卡描述
     * waitCountDown | int | 等待时长 0：无需等待不用显示 
     * topTime | int | 可置顶时长 分钟单位
     * topNumber | int | 可同时置顶的数量
     * topRow | string | 位置排位 例如 '1-2' 
     *
     * @param integer $liveId 直播id
     * @return array
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.3.26
     */
    public function getTopAsync(int $liveId)
    {
        return EellyClient::request('live/liveTop', 'getTop', false, $liveId);
    }

    /**
     * 使用置顶卡
     * 
     * > 返回字段说明 
     * 
     * key | type | value
     * --- | ---- | ----
     * msg | string | 返回提示词语
     * 
     * @param integer $liveId 直播id
     * @return array
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.3.26
     */
    public function useTopCard(int $liveId): array
    {
        return EellyClient::request('live/liveTop', 'useTopCard', true, $liveId);
    }

    /**
     * 使用置顶卡
     * 
     * > 返回字段说明 
     * 
     * key | type | value
     * --- | ---- | ----
     * msg | string | 返回提示词语
     * 
     * @param integer $liveId 直播id
     * @return array
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.3.26
     */
    public function useTopCardAsync(int $liveId)
    {
        return EellyClient::request('live/liveTop', 'useTopCard', false, $liveId);
    }

    /**
     * 更新视频直播置顶表
     * 
     * > data 数据说明
     * 
     * key | type | desc
     * --- | ---- | ----
     * giveTimes | int | 赠送次数
     * useTimes | int | 使用次数
     *
     * @param integer $storeId 店铺id
     * @param array $data 更新的数据
     * @return boolean
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.3.26
     */
    public function update(int $storeId, array $data): bool
    {
        return EellyClient::request('live/liveTop', 'update', true, $storeId, $data);
    }

    /**
     * 更新视频直播置顶表
     * 
     * > data 数据说明
     * 
     * key | type | desc
     * --- | ---- | ----
     * giveTimes | int | 赠送次数
     * useTimes | int | 使用次数
     *
     * @param integer $storeId 店铺id
     * @param array $data 更新的数据
     * @return boolean
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.3.26
     */
    public function updateAsync(int $storeId, array $data)
    {
        return EellyClient::request('live/liveTop', 'update', false, $storeId, $data);
    }

    /**
     * 获取直播间置顶卡倒计时时间
     *
     * > 返回数据说明
     * 
     * key | type | value
     * --- | ---- | -----
     * topCardExpireIn | int | 置顶卡倒计时剩余时间
     * 
     * @param integer $liveId 直播间id
     * @return array
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.3.28
     */
    public function getTopCardExpireIn(int $liveId): array
    {
        return EellyClient::request('live/liveTop', 'getTopCardExpireIn', true, $liveId);
    }

    /**
     * 获取直播间置顶卡倒计时时间
     *
     * > 返回数据说明
     * 
     * key | type | value
     * --- | ---- | -----
     * topCardExpireIn | int | 置顶卡倒计时剩余时间
     * 
     * @param integer $liveId 直播间id
     * @return array
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.3.28
     */
    public function getTopCardExpireInAsync(int $liveId)
    {
        return EellyClient::request('live/liveTop', 'getTopCardExpireIn', false, $liveId);
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