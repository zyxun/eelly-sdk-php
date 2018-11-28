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
     * 更新店铺信息.
     *
     * @param int   $storeId 店铺id
     * @param array $data    店铺信息
     *
     * @throws \ErrorException
     *
     * @return bool
     */
    public function updateStoreInfo(int $storeId, array $data): bool
    {
        return \Eelly\SDK\EellyClient::request('eellyOldCode/store/storeInfo', __FUNCTION__, true, $storeId, $data);
    }
}
