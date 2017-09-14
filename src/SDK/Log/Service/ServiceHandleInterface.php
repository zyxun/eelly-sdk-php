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

use Eelly\DTO\ServiceHandleDTO;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface ServiceHandleInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getServiceHandle(int $ServiceHandleId): ServiceHandleDTO;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addServiceHandle(array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateServiceHandle(int $ServiceHandleId, array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteServiceHandle(int $ServiceHandleId): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listServiceHandlePage(array $condition = [], int $limit = 10, int $currentPage = 1): array;
}
