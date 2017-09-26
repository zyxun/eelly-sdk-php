<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Contact\Service;

use Eelly\DTO\StatisticsDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface StatisticsInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getStatistics(int $statisticsId): StatisticsDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addStatistics(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateStatistics(int $statisticsId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteStatistics(int $statisticsId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listStatisticsPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;


}