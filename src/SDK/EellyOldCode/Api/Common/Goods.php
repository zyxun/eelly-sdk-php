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

namespace Eelly\SDK\EellyOldCode\Api\Common;

use Eelly\SDK\EellyClient;

/**
 * Class Goods.
 *
 *  modules/Common/Service/GoodsService.php
 *
 * @author zhangyingdi<zhangyingdi@eelly.net>
 */
class Goods
{
    /**
     * 获取首页推荐最新商品
     *
     * @param int   $limit
     * @param array $goodsIds
     * @param int   $offset
     *
     * @author xulei<xulei@eelly.net>
     *
     * @since  2016年6月22日
     */
    public function getNewHomePageGoodsList($limit, $goodsIds = [], $offset = 0)
    {
        return EellyClient::request('eellyOldCode/common/goods', __FUNCTION__, true, $limit, $goodsIds, $offset);
    }
}
