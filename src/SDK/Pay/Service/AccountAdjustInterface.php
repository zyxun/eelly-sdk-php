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

use Eelly\DTO\AccountAdjustDTO;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface AccountAdjustInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getAccountAdjust(int $accountAdjustId): AccountAdjustDTO;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addAccountAdjust(array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateAccountAdjust(int $accountAdjustId, array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteAccountAdjust(int $accountAdjustId): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listAccountAdjustPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;
}
