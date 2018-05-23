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

namespace Eelly\SDK\Pay\Service;

interface SettlementInterface
{
    /**
     * 订单资金结算.
     *
     * > changePrice  改价 =（原货款 + 原运费 - 实收 - 优惠 - 退款）
     *
     *
     * @param int    $storeId         店铺id
     * @param int    $orderId         订单id
     * @param string $orderSn         订单编号
     * @param int    $orderAmount     实收（没减去退款）
     * @param int    $initGoodsAmount 原货款
     * @param int    $initFreight     原运费
     * @param int    $discountAmount  优惠金额
     * @param int    $returnAmount    卖家退货款
     * @param int    $returnFreight   卖家退运费
     *
     * @return bool
     * @Async
     */
    public function queryOrder(
        int $storeId,
        int $orderId,
        string $orderSn,
        int $orderAmount,
        int $initGoodsAmount,
        int $initFreight,
        int $discountAmount,
        int $returnAmount,
        int $returnFreight
    ): bool;
}
