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
 * Class Goods.
 *
 * @author zhangyangxun
 */
class Goods
{
    /**
     * 获取直播间商品信息.
     *
     * @param int $liveId
     * @param int $page
     * @param int $limit
     *
     * @return mixed
     */
    public function getLiveRoomGoods(int $liveId, int $page = 1, int $limit = 10)
    {
        return EellyClient::request('eellyOldCode/Live/Goods', __FUNCTION__, true, $liveId, $page, $limit);
    }
}
