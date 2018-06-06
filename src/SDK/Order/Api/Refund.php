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
     * �����˿����ӿ�.
     *
     * @param int $orderId ����ID
     * @param int $money �˿���
     * @param int $sellerId ���ID
     * @param int $type ���������ͣ�0 ϵͳ�����Ա���� 1 ��Ҳ��� 2 ��Ҳ���
     * @return array
     * @author Ф����<xiaojunming@eelly.net>
     * @since 2018��04��24��
     */
    public function quickReturnMoney(int $orderId, int $money, int $sellerId, int $type = 0): array
    {
        return EellyClient::request('order/refund', 'quickReturnMoney', true, $orderId, $money, $sellerId, $type);
    }

    /**
     * �����˿����ӿ�.
     *
     * @param int $orderId ����ID
     * @param int $money �˿���
     * @param int $sellerId ���ID
     * @param int $type ���������ͣ�0 ϵͳ�����Ա���� 1 ��Ҳ��� 2 ��Ҳ���
     * @return array
     * @author Ф����<xiaojunming@eelly.net>
     * @since 2018��04��24��
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