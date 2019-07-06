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

    /**
     * 根据店铺id和日期获取统计数据.
     *
     * @param int   $storeId   店铺id
     * @param int   $sDate     Ymd格式开始日期
     * @param int   $eDate     Ymd格式结束日期
     * @param array $objStrArr 获取的平台 默认所有
     *
     * @return []
     *
     * @author zengzhihao<zengzhihao@eelly.net>
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since  2019.02.15
     */
    public function getStoreFlowDayInfo($storeId, $sDate, $eDate, array $objStrArr = ['', 'wap', 'app', 'wxmall'])
    {
        return EellyClient::request('eellyOldCode/eaapi/store', __FUNCTION__, true, $storeId, $sDate, $eDate, $objStrArr);
    }
}
