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

namespace Eelly\SDK\Order\Service;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface RefundGoodsInterface
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
    public function getRefundGoods(int $orderId): array;
}
