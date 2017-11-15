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

use Eelly\DTO\VoucherTypeDTO;
use Eelly\SDK\EellyClient;
use Eelly\SDK\Pay\Service\VoucherTypeInterface;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class VoucherType implements VoucherTypeInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getVoucherType(int $voucherTypeId): VoucherTypeDTO
    {
        return EellyClient::request('pay/vouchertype', 'getVoucherType', $voucherTypeId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addVoucherType(array $data): bool
    {
        return EellyClient::request('pay/vouchertype', 'addVoucherType', $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateVoucherType(int $voucherTypeId, array $data): bool
    {
        return EellyClient::request('pay/vouchertype', 'updateVoucherType', $voucherTypeId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteVoucherType(int $voucherTypeId): bool
    {
        return EellyClient::request('pay/vouchertype', 'deleteVoucherType', $voucherTypeId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listVoucherTypePage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('pay/vouchertype', 'listVoucherTypePage', $condition, $currentPage, $limit);
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
