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

use Eelly\DTO\SummaryDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface SummaryInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getSummary(int $summaryId): SummaryDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addSummary(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateSummary(int $summaryId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteSummary(int $summaryId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listSummaryPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;


}