<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Pay\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Pay\Service\RefundInterface;
use Eelly\DTO\RefundDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class Refund implements RefundInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getRefund(int $refundId): RefundDTO
    {
        return EellyClient::request('pay/refund', 'getRefund', $refundId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addRefund(array $data): bool
    {
        return EellyClient::request('pay/refund', 'addRefund', $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateRefund(int $refundId, array $data): bool
    {
        return EellyClient::request('pay/refund', 'updateRefund', $refundId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteRefund(int $refundId): bool
    {
        return EellyClient::request('pay/refund', 'deleteRefund', $refundId);
    }

    /**
     *
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