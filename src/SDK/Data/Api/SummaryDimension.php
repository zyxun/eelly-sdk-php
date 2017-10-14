<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Data\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Data\Service\SummaryDimensionInterface;
use Eelly\DTO\SummaryDimensionDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class SummaryDimension implements SummaryDimensionInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getSummaryDimension(int $summaryDimensionId): SummaryDimensionDTO
    {
        return EellyClient::request('data/summarydimension', 'getSummaryDimension', $summaryDimensionId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addSummaryDimension(array $data): bool
    {
        return EellyClient::request('data/summarydimension', 'addSummaryDimension', $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateSummaryDimension(int $summaryDimensionId, array $data): bool
    {
        return EellyClient::request('data/summarydimension', 'updateSummaryDimension', $summaryDimensionId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteSummaryDimension(int $summaryDimensionId): bool
    {
        return EellyClient::request('data/summarydimension', 'deleteSummaryDimension', $summaryDimensionId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listSummaryDimensionPage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('data/summarydimension', 'listSummaryDimensionPage', $condition, $currentPage, $limit);
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