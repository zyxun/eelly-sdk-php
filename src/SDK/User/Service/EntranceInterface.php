<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\User\Service;

use Eelly\DTO\EntranceDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface EntranceInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getEntrance(int $EntranceId): EntranceDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addEntrance(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateEntrance(int $EntranceId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteEntrance(int $EntranceId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listEntrancePage(array $condition = [], int $limit = 10, int $currentPage = 1): array;


}