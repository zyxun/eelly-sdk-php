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
 * 直播预告.
 *
 * @author hehui<hehui@eelly.net>
 */
interface PreviewInterface
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
    public function setStartTime(int $liveId, int $time, int $lpId = 0): bool;

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
    public function addGoods(int $liveId, array $goodsIds, bool $delete = false): bool;

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
    public function setTitle(int $liveId, string $title): bool;

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
    public function setImage(int $liveId, string $imgUrl): bool;

    /**
     * 获取直播中的商品.
     *
     * @param int $liveId
     *
     * @return array
     *
     * @author hehui<hehui@eelly.net>
     */
    public function getLiveGoods(int $liveId, int $status = null): array;

    /**
     * 获取直播时间段.
     *
     * @param string|null $dateTime 日期(例如: 2018-04-01)
     * @param bool $isPay 是否收费场次
     * @param array $status 状态：0 未启用 1 启用
     * @param int $liveType 直播类型(1.白天场 2.白天连播场 3.晚上场 4.晚上连播场)
     *
     * @return array
     *
     * @author hehui<hehui@eelly.net>
     */
    public function getTimeRange(string $dateTime = null, bool $isPay = true, array $status = [1], int $liveType): array;
}
