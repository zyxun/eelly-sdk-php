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

use Eelly\DTO\WithdrawDTO;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface WithdrawInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getWithdraw(int $withdrawId): WithdrawDTO;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addWithdraw(array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateWithdraw(int $withdrawId, array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteWithdraw(int $withdrawId): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listWithdrawPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;
}
