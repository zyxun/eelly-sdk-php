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

use Eelly\DTO\VoucherDTO;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface VoucherInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getVoucher(int $voucherId): VoucherDTO;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addVoucher(array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateVoucher(int $voucherId, array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteVoucher(int $voucherId): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listVoucherPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;
}
