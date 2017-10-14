<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Data\Service;

use Eelly\DTO\SummaryDimensionDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface SummaryDimensionInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getSummaryDimension(int $summaryDimensionId): SummaryDimensionDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addSummaryDimension(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateSummaryDimension(int $summaryDimensionId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteSummaryDimension(int $summaryDimensionId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listSummaryDimensionPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;


}