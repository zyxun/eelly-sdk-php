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

namespace Eelly\SDK\User\Service;

use Eelly\DTO\EntranceDTO;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface EntranceInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getEntrance(int $EntranceId): EntranceDTO;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addEntrance(array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateEntrance(int $EntranceId, array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteEntrance(int $EntranceId): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listEntrancePage(array $condition = [], int $limit = 10, int $currentPage = 1): array;
}
