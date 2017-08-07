<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\User\Service;

use Eelly\DTO\GradeDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface GradeInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getGrade(int $GradeId): GradeDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addGrade(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateGrade(int $GradeId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteGrade(int $GradeId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listGradePage(array $condition = [], int $limit = 10, int $currentPage = 1): array;


}