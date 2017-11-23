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

use Eelly\SDK\Pay\DTO\RefundDTO;


/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface RefundInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getRefund(int $refundId): RefundDTO;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addRefund(array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateRefund(int $refundId, array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteRefund(int $refundId): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listRefundPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;
}
