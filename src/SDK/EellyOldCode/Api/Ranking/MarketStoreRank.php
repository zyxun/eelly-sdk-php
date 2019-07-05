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
 * Class MarketStoreRank.
 *
 * modules/Ranking/Service/MarketStoreRankService.php
 *
 * @author hehui<runphp@dingtalk.com>
 */
class MarketStoreRank
{
    /**
     * @return mixed
     */
    public function getMarketStoreCateList()
    {
        return EellyClient::request('eellyOldCode/ranking/marketStoreRank', __FUNCTION__, true);
    }
}
