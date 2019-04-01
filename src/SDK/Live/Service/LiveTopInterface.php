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
 * 直播间置顶相关接口
 *
 * @author sunanzhi<sunanzhi@hotmail.com>
 */
interface LiveTopInterface
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
    public function getTop(int $liveId):array;

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
    public function useTopCard(int $liveId):array;

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
    public function update(int $storeId, array $data):bool;

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
    public function getTopCardExpireIn(int $liveId):array;
}