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

use Eelly\DTO\VoucherSubjectDTO;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface VoucherSubjectInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getVoucherSubject(int $voucherSubjectId): VoucherSubjectDTO;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addVoucherSubject(array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateVoucherSubject(int $voucherSubjectId, array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteVoucherSubject(int $voucherSubjectId): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listVoucherSubjectPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;
}
