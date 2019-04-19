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
use Eelly\SDK\Order\Service\RefundGoodsInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class RefundGoods
{
    /**
     * 获取退货商品信息
     *
     * @param int $orderId
     * @return array
     *
     * @author zhangyangxun
     * @since 2018-10-11
     */
    public function getRefundGoods(int $orderId): array
    {
        return EellyClient::request('order/refundGoods', 'getRefundGoods', true, $orderId);
    }

    /**
     * 获取退货商品信息
     *
     * @param int $orderId
     * @return array
     *
     * @author zhangyangxun
     * @since 2018-10-11
     */
    public function getRefundGoodsAsync(int $orderId)
    {
        return EellyClient::request('order/refundGoods', 'getRefundGoods', false, $orderId);
    }

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
}