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

namespace Eelly\SDK\EellyOldCode\Api\Live;

use Eelly\SDK\EellyClient;

/**
 * Class Operation.
 *
 * @author sunanzhi <sunanzhi@hotmail.com>
 */
class Operation
{
    /**
     * 记录直播间用户添加进购物车数量
     *
     * @param int $userId 用户id
     * @param int $storeId 店铺id
     * @return boolean
     * 
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2018年3月16日
     */
    public function recordAddCartNumber(int $userId, int $storeId)
    {
        return EellyClient::request('eellyOldCode/Live/Operation', __FUNCTION__, true, $userId, $storeId);
    }

    /**
     * 获取直播间用户添加购物车数量
     *
     * @param int $storeId 店铺id
     * @param int $startTime 起始时间
     * @param int $endTime 截止时间
     * @return integer
     * 
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2018年3月16日
     */
    public function getAddCartNumber(int $storeId, int $startTime = 0, int $endTime = 0)
    {
        return EellyClient::request('eellyOldCode/Live/Operation', __FUNCTION__, true, $storeId, $startTime, $endTime);
    }
}
