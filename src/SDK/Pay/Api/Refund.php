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

use Eelly\SDK\EellyClient;
use Eelly\SDK\Pay\Service\RefundInterface;
use Eelly\SDK\Pay\DTO\RefundDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Refund implements RefundInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getRefund(int $refundId): RefundDTO
    {
        return EellyClient::request('pay/refund', 'getRefund', true, $refundId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getRefundAsync(int $refundId)
    {
        return EellyClient::request('pay/refund', 'getRefund', false, $refundId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addRefund(array $data): bool
    {
        return EellyClient::request('pay/refund', 'addRefund', true, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addRefundAsync(array $data)
    {
        return EellyClient::request('pay/refund', 'addRefund', false, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateRefund(int $refundId, array $data): bool
    {
        return EellyClient::request('pay/refund', 'updateRefund', true, $refundId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateRefundAsync(int $refundId, array $data)
    {
        return EellyClient::request('pay/refund', 'updateRefund', false, $refundId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteRefund(int $refundId): bool
    {
        return EellyClient::request('pay/refund', 'deleteRefund', true, $refundId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteRefundAsync(int $refundId)
    {
        return EellyClient::request('pay/refund', 'deleteRefund', false, $refundId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listRefundPage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('pay/refund', 'listRefundPage', true, $condition, $currentPage, $limit);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listRefundPageAsync(array $condition = [], int $currentPage = 1, int $limit = 10)
    {
        return EellyClient::request('pay/refund', 'listRefundPage', false, $condition, $currentPage, $limit);
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