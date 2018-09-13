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

namespace Eelly\SDK\EellyOldCode\Api\Store;

use Eelly\SDK\EellyClient;

/**
 * Class Store.
 *
 * var/eelly-old-code/modules/Store/Service/StoreService.php
 *
 * @author hehui<hehui@eelly.net>
 */
class Store
{
    /**
     * @param $storeId
     *
     * @throws \ErrorException
     *
     * @return mixed
     */
    public function sellerStoreIndexForV1($storeId)
    {
        return EellyClient::request('eellyOldCode/store/store', __FUNCTION__, true, $storeId);
    }

    /**
     * 更新店铺佣金比率
     *
     * @param int   $storeId        店铺ID
     * @param float $commissionRate 佣金比率
     * @return mixed
     *
     * @author zhangyangxun
     * @since 2018-09-11
     */
    public function saveStoreCommissionRate(int $storeId, float $commissionRate)
    {
        return EellyClient::request('eellyOldCode/store/store', __FUNCTION__, true, $storeId, $commissionRate);
    }
}
