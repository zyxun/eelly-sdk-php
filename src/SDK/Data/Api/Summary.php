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
use Eelly\SDK\Data\Service\SummaryInterface;
use Eelly\DTO\SummaryDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class Summary implements SummaryInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getSummary(int $summaryId): SummaryDTO
    {
        return EellyClient::request('data/summary', 'getSummary', $summaryId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addSummary(array $data): bool
    {
        return EellyClient::request('data/summary', 'addSummary', $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateSummary(int $summaryId, array $data): bool
    {
        return EellyClient::request('data/summary', 'updateSummary', $summaryId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteSummary(int $summaryId): bool
    {
        return EellyClient::request('data/summary', 'deleteSummary', $summaryId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listSummaryPage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('data/summary', 'listSummaryPage', $condition, $currentPage, $limit);
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