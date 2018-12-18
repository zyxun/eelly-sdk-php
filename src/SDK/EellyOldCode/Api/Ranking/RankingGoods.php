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

namespace Eelly\SDK\EellyOldCode\Api\Ranking;

use Eelly\SDK\EellyClient;

/**
 * Class RankingGoods.
 * 
 * modules/Ranking/Service/RankingGoodsService.php
 * 
 * @author hehui<runphp@dingtalk.com>
 */
class RankingGoods
{
    /**
     * @return mixed
     */
    public function getMarketGoodsCateList()
    {
        return EellyClient::request('eellyOldCode/ranking/rankingGoods', __FUNCTION__, true);
    }
}