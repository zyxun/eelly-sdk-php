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

namespace Eelly\SDK\EellyOldCode\Api\Goods;

use Eelly\SDK\EellyClient;

/**
 * Class Statistics.
 *
 *
 */
class Statistics
{
    /**
     * 根据条件更新商品信息统计
     * 
     * @param array  $data
     * @author wechan
     * @since 2018年12月21日
     */
    public function updateGoodsStatisticsInfo($data)
    {
        return EellyClient::request('eellyOldCode/goods/statistics', __FUNCTION__, true, $data);
    }
}
