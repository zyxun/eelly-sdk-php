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

namespace Eelly\SDK\EellyOldCode\Api\Eaapi\Store;

use Eelly\SDK\EellyClient;

/**
 * Class Collection.
 *
 *  modules/Eaapi/Service/Store/CollectionService.php
 *
 * @author zhangyingdi<zhangyingdi@eelly.net>
 */
class Collection
{
    /**
     * 获取店铺收藏数.
     *
     * @param int $storeId 店铺id
     *
     * @author zengzhihao<zengzhihao@eelly.net>
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since  2019.02.14
     */
    public function getCollectNum($storeId)
    {
        return EellyClient::request('eellyOldCode/eaapi/store/collection', __FUNCTION__, true, $storeId);
    }
}
