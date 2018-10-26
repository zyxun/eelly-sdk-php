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

/**
 * Class StoreInfo.
 *
 *  modules/Store/Service/StoreInfoService.php
 *
 * @author hehui<hehui@eelly.net>
 */
class StoreInfo
{
    /**
     * @param $userId
     * @param array $storeIds
     *
     * @return mixed
     */
    public function updateStoreInfo(int $storeId, array $data)
    {
        return \Eelly\SDK\EellyClient::request('eellyOldCode/store/storeInfo', __FUNCTION__, true, $storeId, $data);
    }
}
