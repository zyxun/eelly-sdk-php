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

namespace Eelly\SDK\Data\Service;

use Eelly\DTO\SummaryDayDTO;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface SummaryDayInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getSummaryDay(int $summaryDayId): SummaryDayDTO;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addSummaryDay(array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateSummaryDay(int $summaryDayId, array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteSummaryDay(int $summaryDayId): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listSummaryDayPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;
}
