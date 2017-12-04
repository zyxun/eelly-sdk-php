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

namespace Eelly\SDK\Order\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Order\Service\GoodsInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Goods implements GoodsInterface
{
    /**
     * @return self
     */
    public static function getInstance(): self
    {
        static $instance;
        if (null === $instance) {
            $instance = new self();
        }

        return $instance;
    }

    /**
     * 获取店铺的订单商品总件数.
     *
     * @param array $storeIds
     *
     * @throws OrderGoodsException
     *
     * @return array
     * @requestExample({"storeIds":[148086, 4452]})
     * @returnExample({
     *      148086 : {
     *          "quantityCounts":22,
     *          "sellerId":148086
     *     },
     *     4452:{
     *          "quantityCounts":189,
     *          "sellerId":4452
     *     }
     * })
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     * @since  2017年11月30日
     */
    public function countOrderGoodsQuantity(array $storeIds)
    {
        return EellyClient::request('order/goods', __FUNCTION__, true, $storeIds);
    }

}