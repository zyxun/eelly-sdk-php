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

namespace Eelly\SDK\Log\Service;

use Eelly\DTO\UserHandleDTO;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface UserHandleInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getUserHandle(int $UserHandleId): UserHandleDTO;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addUserHandle(array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateUserHandle(int $UserHandleId, array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteUserHandle(int $UserHandleId): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listUserHandlePage(array $condition = [], int $limit = 10, int $currentPage = 1): array;
}
