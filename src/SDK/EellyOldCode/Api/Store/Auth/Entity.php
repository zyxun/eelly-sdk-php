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

namespace Eelly\SDK\EellyOldCode\Api\Store\Auth;

use Eelly\SDK\EellyClient;

/**
 * Class Store.
 *
 *  modules/Store/Service/GeneralizeService.php
 */
class Entity
{
    /**
     * 根据店铺Id数组查店铺实体认证信息.
     *
     * @param array  $storeIds 店铺id
     * @param string $fields 字段
     *
     * @return array
     *
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.2.15
     */
    public function getEntityInfoByStoreIds(array $storeIds, $fields = '')
    {
        return EellyClient::request('eellyOldCode/store/Auth/Entity', __FUNCTION__, true, $storeIds, $fields);
    }
}
