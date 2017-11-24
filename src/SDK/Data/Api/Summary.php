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
use Eelly\SDK\Data\Service\SummaryInterface;
use Eelly\DTO\SummaryDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Summary implements SummaryInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getSummary(int $summaryId): SummaryDTO
    {
        return EellyClient::request('data/summary', __FUNCTION__, true, $summaryId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getSummaryAsync(int $summaryId)
    {
        return EellyClient::request('data/summary', __FUNCTION__, false, $summaryId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addSummary(array $data): bool
    {
        return EellyClient::request('data/summary', __FUNCTION__, true, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addSummaryAsync(array $data)
    {
        return EellyClient::request('data/summary', __FUNCTION__, false, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateSummary(int $summaryId, array $data): bool
    {
        return EellyClient::request('data/summary', __FUNCTION__, true, $summaryId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateSummaryAsync(int $summaryId, array $data)
    {
        return EellyClient::request('data/summary', __FUNCTION__, false, $summaryId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteSummary(int $summaryId): bool
    {
        return EellyClient::request('data/summary', __FUNCTION__, true, $summaryId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteSummaryAsync(int $summaryId)
    {
        return EellyClient::request('data/summary', __FUNCTION__, false, $summaryId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listSummaryPage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('data/summary', __FUNCTION__, true, $condition, $currentPage, $limit);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listSummaryPageAsync(array $condition = [], int $currentPage = 1, int $limit = 10)
    {
        return EellyClient::request('data/summary', __FUNCTION__, false, $condition, $currentPage, $limit);
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