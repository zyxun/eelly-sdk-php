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
 * 直播统计
 *
 * @author @author 肖俊明<xiaojunming@eelly.net>
 */
interface StatsInterface
{
    /**
     * 添加点赞数.
     *
     * @param array $data 点赞数据
     *
     * @return bool
     * @requestExample({"liveId":1,"praise":1})
     * @returnExample(true)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2018年01月26日
     */
    public function addStatsPraise(array $data): bool;

    /**
     * 多用户获取统计信息.
     * ### 返回数据说明.
     *
     * 字段|类型|说明
     * -------|-------|--------------
     * liveId |string |观看人数：统计进入聊天室人数
     * view   |string |获得点赞
     * praise |string |新增关注：统计直播时间段联系人关注数
     * follow |string |订单笔数：统计直播时间段店铺下单数
     *
     * @param array $liveIds 多个直播ID
     *
     * @return array
     * @requestExample({"liveIds":[1,3,4,5]})
     * @returnExample({{"liveId":"1","view":"133","praise":"1","follow":"1"},{"liveId":"2","view":"222","praise":"1","follow":"1"}})
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2018年01月29日
     * @Validation(
     *  @PresenceOf(0,{message : "数据不能为空"})
     *)
     */
    public function getStatsByLiveIds(array $liveIds): array;

    /**
     * 同步直播数据到统计表.
     *
     * @param int   $liveId 直播ID
     * @param array $data   更改的数据
     *
     * @return bool
     * @requestExample({"liveId":1,"data":["follow":10,"orders":2]})
     * @returnExample(true)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2018年01月31日
     */
    public function updateFinishStat(int $liveId, array $data);

    /**
     * 获取实时统计数据.
     *
     * @param int $liveId
     *
     * @return array
     */
    public function getRealTimeStats(int $liveId): array;
}
