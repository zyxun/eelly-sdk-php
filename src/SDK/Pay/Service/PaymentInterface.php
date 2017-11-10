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

use Eelly\DTO\PaymentDTO;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface PaymentInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getPayment(int $paymentId): PaymentDTO;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addPayment(array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updatePayment(int $paymentId, array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deletePayment(int $paymentId): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listPaymentPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;
}
