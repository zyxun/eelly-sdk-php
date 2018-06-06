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
use Eelly\SDK\Order\Service\RefundInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Refund implements RefundInterface
{
    /**
     * 快速退款，对外接口.
     *
     * @param int $orderId 订单ID
     * @param int $money 退款金额
     * @param int $sellerId 卖家ID
     * @param int $type 操作者类型：0 系统或管理员操作 1 买家操作 2 卖家操作
     * @return array
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2018年04月24日
     */
    public function quickReturnMoney(int $orderId, int $money, int $sellerId, int $type = 0): array
    {
        return EellyClient::request('order/refund', 'quickReturnMoney', true, $orderId, $money, $sellerId, $type);
    }

    /**
     * 快速退款，对外接口.
     *
     * @param int $orderId 订单ID
     * @param int $money 退款金额
     * @param int $sellerId 卖家ID
     * @param int $type 操作者类型：0 系统或管理员操作 1 买家操作 2 卖家操作
     * @return array
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2018年04月24日
     */
    public function quickReturnMoneyAsync(int $orderId, int $money, int $sellerId, int $type = 0)
    {
        return EellyClient::request('order/refund', 'quickReturnMoney', false, $orderId, $money, $sellerId, $type);
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