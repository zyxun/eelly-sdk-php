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
 * Class Store.
 *
 * var/eelly-old-code/modules/Store/Service/StoreService.php
 *
 * @author wechan
 */
class Store
{
    /**
     * @param array $storeIds
     *
     * @return mixed
     */
    public function getInfoByStoreIds(array $storeIds)
    {
        return \Eelly\SDK\EellyClient::request('eellyOldCode/store/store', __FUNCTION__, true, $storeIds);
    }
}
