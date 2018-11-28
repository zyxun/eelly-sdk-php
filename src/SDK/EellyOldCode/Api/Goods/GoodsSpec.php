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

namespace Eelly\SDK\EellyOldCode\Api\Goods;

use Eelly\SDK\EellyClient;

/**
 * Class GoodsSpec.
 *
 *  modules/Goods/Service/GoodsSpecService.php
 *
 * @author zhangyingdi<zhangyingdi@eelly.net>
 */
class GoodsSpec
{
    /**
     * 小程序订单的库存修改.
     *
     * @param $orderId 订单id
     *
     * @return mixed
     */
    public function appletUpdateStock($orderId)
    {
        return EellyClient::request('eellyOldCode/goods/goodsSpec', __FUNCTION__, true, $orderId);
    }
}
