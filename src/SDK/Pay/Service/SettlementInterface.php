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

    /**
     * 获取后台结算列表数据
     *
     * @param string $condition 查询条件
     * @param array $binds 绑定参数
     * @param int $page 页码
     * @param int $limit 每页显示多少数量
     * @return array
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.12.12
     */
    public function listManageSettlement(string $condition, array $binds = [], int $page = 1, int $limit = 20):array;
}
