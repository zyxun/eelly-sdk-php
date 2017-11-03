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

use Eelly\DTO\SummaryDimensionDTO;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface SummaryDimensionInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getSummaryDimension(int $summaryDimensionId): SummaryDimensionDTO;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addSummaryDimension(array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateSummaryDimension(int $summaryDimensionId, array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteSummaryDimension(int $summaryDimensionId): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listSummaryDimensionPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;
}
