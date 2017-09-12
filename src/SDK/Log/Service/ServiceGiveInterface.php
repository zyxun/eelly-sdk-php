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

use Eelly\DTO\ServiceGiveDTO;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface ServiceGiveInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getServiceGive(int $ServiceGiveId): ServiceGiveDTO;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addServiceGive(array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateServiceGive(int $ServiceGiveId, array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteServiceGive(int $ServiceGiveId): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listServiceGivePage(array $condition = [], int $limit = 10, int $currentPage = 1): array;
}
