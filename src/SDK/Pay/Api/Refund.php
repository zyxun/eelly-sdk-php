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

use Eelly\DTO\RefundDTO;
use Eelly\SDK\EellyClient;
use Eelly\SDK\Pay\Service\RefundInterface;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class Refund implements RefundInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getRefund(int $refundId): RefundDTO
    {
        return EellyClient::request('pay/refund', 'getRefund', $refundId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addRefund(array $data): bool
    {
        return EellyClient::request('pay/refund', 'addRefund', $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateRefund(int $refundId, array $data): bool
    {
        return EellyClient::request('pay/refund', 'updateRefund', $refundId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteRefund(int $refundId): bool
    {
        return EellyClient::request('pay/refund', 'deleteRefund', $refundId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listRefundPage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('pay/refund', 'listRefundPage', $condition, $currentPage, $limit);
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
