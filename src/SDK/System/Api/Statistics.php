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

namespace Eelly\SDK\System\Api;

use Eelly\DTO\StatisticsDTO;
use Eelly\SDK\EellyClient;
use Eelly\SDK\System\Service\StatisticsInterface;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class Statistics implements StatisticsInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getStatistics(int $StatisticsId): StatisticsDTO
    {
        return EellyClient::request('system/statistics', 'getStatistics', $StatisticsId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addStatistics(array $data): bool
    {
        return EellyClient::request('system/statistics', 'addStatistics', $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateStatistics(int $StatisticsId, array $data): bool
    {
        return EellyClient::request('system/statistics', 'updateStatistics', $StatisticsId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteStatistics(int $StatisticsId): bool
    {
        return EellyClient::request('system/statistics', 'deleteStatistics', $StatisticsId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listStatisticsPage(array $condition = [], int $limit = 10, int $currentPage = 1): array
    {
        return EellyClient::request('system/statistics', 'listStatisticsPage', $condition, $limit, $currentPage);
    }

    /**
     * @return self
     */
    public static function getInstance(): self
    {
        static $instance;
        if (null === $instance) {
            $instance = new self();
        }

        return $instance;
    }
}
