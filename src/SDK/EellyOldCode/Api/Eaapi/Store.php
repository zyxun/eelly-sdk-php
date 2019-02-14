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

namespace Eelly\SDK\EellyOldCode\Api\Eaapi;

use Eelly\SDK\EellyClient;

/**
 * Class Store.
 *
 *  modules/Eaapi/Service/StoreService.php
 *
 * @author zhangyingdi<zhangyingdi@eelly.net>
 */
class Store
{
    /**
     * 根据日期获取店铺流量信息（Uv）.
     *
     * @param int $storeId   店铺id
     * @param int $startTime 开始时间，时间戳
     * @param int $endTime   结束时间，时间戳
     *
     * @author zengzhihao<zengzhihao@eelly.net>
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since  2019.02.14
     */
    public function getUv($storeId, $startTime = 0, $endTime = 0)
    {
        return EellyClient::request('eellyOldCode/eaapi/store', __FUNCTION__, true, $storeId, $startTime, $endTime);
    }
}
