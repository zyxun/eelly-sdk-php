<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Contact\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Contact\Service\StatisticsInterface;
use Eelly\DTO\StatisticsDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class Statistics implements StatisticsInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getStatistics(int $statisticsId): StatisticsDTO
    {
        return EellyClient::request('contact/statistics', 'getStatistics', $statisticsId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addStatistics(array $data): bool
    {
        return EellyClient::request('contact/statistics', 'addStatistics', $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateStatistics(int $statisticsId, array $data): bool
    {
        return EellyClient::request('contact/statistics', 'updateStatistics', $statisticsId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteStatistics(int $statisticsId): bool
    {
        return EellyClient::request('contact/statistics', 'deleteStatistics', $statisticsId);
    }

    /**
     *
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