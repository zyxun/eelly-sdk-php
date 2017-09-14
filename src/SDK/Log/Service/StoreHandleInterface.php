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

use Eelly\DTO\StoreHandleDTO;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface StoreHandleInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getStoreHandle(int $StoreHandleId): StoreHandleDTO;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addStoreHandle(array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateStoreHandle(int $StoreHandleId, array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteStoreHandle(int $StoreHandleId): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listStoreHandlePage(array $condition = [], int $limit = 10, int $currentPage = 1): array;
}
