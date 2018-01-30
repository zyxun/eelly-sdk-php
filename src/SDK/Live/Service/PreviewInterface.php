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
     *
     * @return bool
     *
     * @author hehui<hehui@eelly.net>
     */
    public function setStartTime(int $liveId, int $time): bool;

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
}
