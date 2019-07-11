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

namespace Eelly\SDK\EellyOldCode\Api\Data;

use Eelly\SDK\EellyClient;

/**
 * Class StoreOperationData.
 *
 */
class StoreOperationData
{
    public function statisticData()
    {
        return EellyClient::request('eellyOldCode/data/storeOperationData', __FUNCTION__, true);
    }
}
