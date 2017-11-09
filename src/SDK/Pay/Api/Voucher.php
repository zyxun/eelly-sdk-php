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
use Eelly\SDK\Pay\Service\VoucherInterface;
use Eelly\DTO\VoucherDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class Voucher implements VoucherInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getVoucher(int $voucherId): VoucherDTO
    {
        return EellyClient::request('pay/voucher', 'getVoucher', $voucherId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addVoucher(array $data): bool
    {
        return EellyClient::request('pay/voucher', 'addVoucher', $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateVoucher(int $voucherId, array $data): bool
    {
        return EellyClient::request('pay/voucher', 'updateVoucher', $voucherId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteVoucher(int $voucherId): bool
    {
        return EellyClient::request('pay/voucher', 'deleteVoucher', $voucherId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listVoucherPage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('pay/voucher', 'listVoucherPage', $condition, $currentPage, $limit);
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