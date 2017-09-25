<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Contact\Service;

use Eelly\DTO\GradeChangeDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface GradeChangeInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getGradeChange(int $gradeChangeId): GradeChangeDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addGradeChange(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateGradeChange(int $gradeChangeId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteGradeChange(int $gradeChangeId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listGradeChangePage(array $condition = [], int $currentPage = 1, int $limit = 10): array;


}