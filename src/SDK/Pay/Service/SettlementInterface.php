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
     * @param array  $orderInfo                    订单信息
     * @param int    $orderInfo['storeId']         店铺id
     * @param int    $orderInfo['orderId']         订单id
     * @param string $orderInfo['orderSn']         订单编号
     * @param int    $orderInfo['orderAmount']     实收（没减去退款）
     * @param int    $orderInfo['initGoodsAmount'] 原货款
     * @param int    $orderInfo['initFreight']     原运费
     * @param int    $orderInfo['discountAmount']  优惠金额
     * @param int    $orderInfo['returnAmount']    卖家退货款
     * @param int    $orderInfo['returnFreight']   卖家退运费
     * @param int    $orderInfo['commission']      交易手续费
     *
     * @return bool
     */
    public function queryOrder(array $orderInfo): bool;
}
