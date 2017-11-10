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

namespace Eelly\SDK\Pay\Api;

use Eelly\DTO\PaymentDTO;
use Eelly\SDK\EellyClient;
use Eelly\SDK\Pay\Service\PaymentInterface;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class Payment implements PaymentInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getPayment(int $paymentId): PaymentDTO
    {
        return EellyClient::request('pay/payment', 'getPayment', $paymentId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addPayment(array $data): bool
    {
        return EellyClient::request('pay/payment', 'addPayment', $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updatePayment(int $paymentId, array $data): bool
    {
        return EellyClient::request('pay/payment', 'updatePayment', $paymentId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deletePayment(int $paymentId): bool
    {
        return EellyClient::request('pay/payment', 'deletePayment', $paymentId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listPaymentPage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('pay/payment', 'listPaymentPage', $condition, $currentPage, $limit);
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
