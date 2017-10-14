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

use Eelly\DTO\SummaryDayDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface SummaryDayInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getSummaryDay(int $summaryDayId): SummaryDayDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addSummaryDay(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateSummaryDay(int $summaryDayId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteSummaryDay(int $summaryDayId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listSummaryDayPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;


}