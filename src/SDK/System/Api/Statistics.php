<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\System\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\System\Service\StatisticsInterface;
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
    public function getStatistics(int $StatisticsId): StatisticsDTO
    {
        return EellyClient::request('system/statistics', 'getStatistics', $StatisticsId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addStatistics(array $data): bool
    {
        return EellyClient::request('system/statistics', 'addStatistics', $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateStatistics(int $StatisticsId, array $data): bool
    {
        return EellyClient::request('system/statistics', 'updateStatistics', $StatisticsId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteStatistics(int $StatisticsId): bool
    {
        return EellyClient::request('system/statistics', 'deleteStatistics', $StatisticsId);
    }

    /**
     *
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