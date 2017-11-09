<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Pay\Service;

use Eelly\DTO\PaymentDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface PaymentInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getPayment(int $paymentId): PaymentDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addPayment(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updatePayment(int $paymentId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deletePayment(int $paymentId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listPaymentPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;


}