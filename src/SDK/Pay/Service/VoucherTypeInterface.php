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

use Eelly\DTO\VoucherTypeDTO;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface VoucherTypeInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getVoucherType(int $voucherTypeId): VoucherTypeDTO;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addVoucherType(array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateVoucherType(int $voucherTypeId, array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteVoucherType(int $voucherTypeId): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listVoucherTypePage(array $condition = [], int $currentPage = 1, int $limit = 10): array;
}
