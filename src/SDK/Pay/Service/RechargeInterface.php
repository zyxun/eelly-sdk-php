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

use Eelly\DTO\RechargeDTO;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface RechargeInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getRecharge(int $rechargeId): RechargeDTO;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addRecharge(array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateRecharge(int $rechargeId, array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteRecharge(int $rechargeId): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listRechargePage(array $condition = [], int $currentPage = 1, int $limit = 10): array;
}
