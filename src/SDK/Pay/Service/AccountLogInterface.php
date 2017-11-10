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

use Eelly\DTO\AccountLogDTO;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface AccountLogInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getAccountLog(int $accountLogId): AccountLogDTO;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addAccountLog(array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateAccountLog(int $accountLogId, array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteAccountLog(int $accountLogId): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listAccountLogPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;
}
