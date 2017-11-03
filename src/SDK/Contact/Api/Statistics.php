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

namespace Eelly\SDK\Contact\Api;

use Eelly\DTO\StatisticsDTO;
use Eelly\SDK\Contact\Service\StatisticsInterface;
use Eelly\SDK\EellyClient;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class Statistics implements StatisticsInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getStatistics(int $statisticsId): StatisticsDTO
    {
        return EellyClient::request('contact/statistics', 'getStatistics', $statisticsId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addStatistics(array $data): bool
    {
        return EellyClient::request('contact/statistics', 'addStatistics', $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateStatistics(int $statisticsId, array $data): bool
    {
        return EellyClient::request('contact/statistics', 'updateStatistics', $statisticsId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteStatistics(int $statisticsId): bool
    {
        return EellyClient::request('contact/statistics', 'deleteStatistics', $statisticsId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listStatisticsPage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('contact/statistics', 'listStatisticsPage', $condition, $currentPage, $limit);
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
