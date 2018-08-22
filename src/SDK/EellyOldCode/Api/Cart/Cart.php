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
 * var/eelly-old-code/modules/Cart/Service/CartService.php
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
    
     /**
     * 获取商品信息
     *
     * @param   array   $priceInfo  商品的价格信息
     * @param   number  $specId     规格id
     * @param   number  $quantity   购买量
     * @return  number
     *
     * @author  何砚文<heyanwen@eelly.net>
     * @since   2015-6-10
     */
    public function getGoodsPrice($priceInfo, $specId, $quantity)
    {
        return EellyClient::request('eellyOldCode/cart/cart', __FUNCTION__, true, $priceInfo, $specId, $quantity);
    }
}
