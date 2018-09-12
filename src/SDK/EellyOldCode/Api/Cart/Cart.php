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

namespace Eelly\SDK\EellyOldCode\Api\Cart;

use Eelly\SDK\EellyClient;

/**
 * Class Cart.
 *
 *  modules/Cart/Service/CartService.php
 *
 * @author wechan
 */
class Cart
{
    /**
     * @param array $goodsIds 商品id
     *
     * @return mixed
     */
    public function getGoodsInfo(array $goodsIds)
    {
        return EellyClient::request('eellyOldCode/cart/cart', __FUNCTION__, true, $goodsIds);
    }
}
