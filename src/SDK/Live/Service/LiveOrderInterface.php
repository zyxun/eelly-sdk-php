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

use Eelly\DTO\UidDTO;

/**
 * 直播订单.
 *
 * @author hehui<hehui@eelly.net>
 */
interface LiveOrderInterface
{
    /**
     * 获取直播间直播期间的小程序订单信息.
     *
     *
     * @param int         $liveId 直播id
     * @param int         $type   订单类型(1 待付款 2 已付款)
     * @param int         $page   分页
     * @param int         $limit  分页大小
     * @param UidDTO|null $uidDTO uid dto
     *
     * @return array
     *
     * @author hehui<hehui@eelly.net>
     */
    public function myAppletLiveOrders(int $liveId, int $type, int $page = 1, int $limit = 20, UidDTO $uidDTO = null): array;

    /**
     * 获取直播间直播期间的小程序订单信息.
     *
     * @param int $liveId 直播id
     * @param int $type   订单类型(1 待付款 2 已付款)
     * @param int         $page   分页
     * @param int         $limit  分页大小
     *
     * @return array
     */
    public function appletLiveOrders(int $liveId, int $type, int $page = 1, int $limit = 20): array;
}
