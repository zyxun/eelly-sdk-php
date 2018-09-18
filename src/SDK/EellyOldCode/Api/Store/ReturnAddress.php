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
 *  modules/Goods/Service/GoodsService.php
 *
 * @author sunanzhi <sunanzhi@hotmail.com>
 */
class ReturnAddress
{

    /**
     * 通过店铺id获取店铺地址
     *
     * @param array $sellerId
     * @return array
     *
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since  2018.09.17
     */
    public function getDefaultAddressByUserId(int $sellerId)
    {
        return EellyClient::request('eellyOldCode/store/returnAddress', __FUNCTION__, true, $sellerId);
    }
}
