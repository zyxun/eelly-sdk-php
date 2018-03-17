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

namespace Eelly\SDK\Data\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Data\Service\SummaryDayInterface;
use Eelly\DTO\SummaryDayDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class SummaryDay implements SummaryDayInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getSummaryDay(int $summaryDayId): SummaryDayDTO
    {
        return EellyClient::request('data/summaryDay', 'getSummaryDay', true, $summaryDayId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getSummaryDayAsync(int $summaryDayId)
    {
        return EellyClient::request('data/summaryDay', 'getSummaryDay', false, $summaryDayId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addSummaryDay(array $data): bool
    {
        return EellyClient::request('data/summaryDay', 'addSummaryDay', true, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addSummaryDayAsync(array $data)
    {
        return EellyClient::request('data/summaryDay', 'addSummaryDay', false, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateSummaryDay(int $summaryDayId, array $data): bool
    {
        return EellyClient::request('data/summaryDay', 'updateSummaryDay', true, $summaryDayId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateSummaryDayAsync(int $summaryDayId, array $data)
    {
        return EellyClient::request('data/summaryDay', 'updateSummaryDay', false, $summaryDayId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteSummaryDay(int $summaryDayId): bool
    {
        return EellyClient::request('data/summaryDay', 'deleteSummaryDay', true, $summaryDayId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteSummaryDayAsync(int $summaryDayId)
    {
        return EellyClient::request('data/summaryDay', 'deleteSummaryDay', false, $summaryDayId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listSummaryDayPage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('data/summaryDay', 'listSummaryDayPage', true, $condition, $currentPage, $limit);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listSummaryDayPageAsync(array $condition = [], int $currentPage = 1, int $limit = 10)
    {
        return EellyClient::request('data/summaryDay', 'listSummaryDayPage', false, $condition, $currentPage, $limit);
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