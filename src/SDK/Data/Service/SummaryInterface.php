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

use Eelly\DTO\SummaryDTO;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface SummaryInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getSummary(int $summaryId): SummaryDTO;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addSummary(array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateSummary(int $summaryId, array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteSummary(int $summaryId): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listSummaryPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;
}
