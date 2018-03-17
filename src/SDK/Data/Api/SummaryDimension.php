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
use Eelly\SDK\Data\Service\SummaryDimensionInterface;
use Eelly\DTO\SummaryDimensionDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class SummaryDimension implements SummaryDimensionInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getSummaryDimension(int $summaryDimensionId): SummaryDimensionDTO
    {
        return EellyClient::request('data/summaryDimension', 'getSummaryDimension', true, $summaryDimensionId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getSummaryDimensionAsync(int $summaryDimensionId)
    {
        return EellyClient::request('data/summaryDimension', 'getSummaryDimension', false, $summaryDimensionId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addSummaryDimension(array $data): bool
    {
        return EellyClient::request('data/summaryDimension', 'addSummaryDimension', true, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addSummaryDimensionAsync(array $data)
    {
        return EellyClient::request('data/summaryDimension', 'addSummaryDimension', false, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateSummaryDimension(int $summaryDimensionId, array $data): bool
    {
        return EellyClient::request('data/summaryDimension', 'updateSummaryDimension', true, $summaryDimensionId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateSummaryDimensionAsync(int $summaryDimensionId, array $data)
    {
        return EellyClient::request('data/summaryDimension', 'updateSummaryDimension', false, $summaryDimensionId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteSummaryDimension(int $summaryDimensionId): bool
    {
        return EellyClient::request('data/summaryDimension', 'deleteSummaryDimension', true, $summaryDimensionId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteSummaryDimensionAsync(int $summaryDimensionId)
    {
        return EellyClient::request('data/summaryDimension', 'deleteSummaryDimension', false, $summaryDimensionId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listSummaryDimensionPage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('data/summaryDimension', 'listSummaryDimensionPage', true, $condition, $currentPage, $limit);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listSummaryDimensionPageAsync(array $condition = [], int $currentPage = 1, int $limit = 10)
    {
        return EellyClient::request('data/summaryDimension', 'listSummaryDimensionPage', false, $condition, $currentPage, $limit);
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