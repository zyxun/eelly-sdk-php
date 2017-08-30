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

namespace Eelly\SDK\System\Service;

use Eelly\DTO\StatisticsDTO;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface StatisticsInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getStatistics(int $StatisticsId): StatisticsDTO;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addStatistics(array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateStatistics(int $StatisticsId, array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteStatistics(int $StatisticsId): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listStatisticsPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;


}

