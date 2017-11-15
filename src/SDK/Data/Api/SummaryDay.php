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

use Eelly\DTO\SummaryDayDTO;
use Eelly\SDK\Data\Service\SummaryDayInterface;
use Eelly\SDK\EellyClient;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class SummaryDay implements SummaryDayInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getSummaryDay(int $summaryDayId): SummaryDayDTO
    {
        return EellyClient::request('data/summaryday', 'getSummaryDay', $summaryDayId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addSummaryDay(array $data): bool
    {
        return EellyClient::request('data/summaryday', 'addSummaryDay', $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateSummaryDay(int $summaryDayId, array $data): bool
    {
        return EellyClient::request('data/summaryday', 'updateSummaryDay', $summaryDayId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteSummaryDay(int $summaryDayId): bool
    {
        return EellyClient::request('data/summaryday', 'deleteSummaryDay', $summaryDayId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listSummaryDayPage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('data/summaryday', 'listSummaryDayPage', $condition, $currentPage, $limit);
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
