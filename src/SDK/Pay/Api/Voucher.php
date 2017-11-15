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

use Eelly\DTO\VoucherDTO;
use Eelly\SDK\EellyClient;
use Eelly\SDK\Pay\Service\VoucherInterface;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class Voucher implements VoucherInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getVoucher(int $voucherId): VoucherDTO
    {
        return EellyClient::request('pay/voucher', 'getVoucher', $voucherId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addVoucher(array $data): bool
    {
        return EellyClient::request('pay/voucher', 'addVoucher', $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateVoucher(int $voucherId, array $data): bool
    {
        return EellyClient::request('pay/voucher', 'updateVoucher', $voucherId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteVoucher(int $voucherId): bool
    {
        return EellyClient::request('pay/voucher', 'deleteVoucher', $voucherId);
    }

    /**
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
