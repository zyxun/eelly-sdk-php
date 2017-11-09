<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Pay\Service;

use Eelly\DTO\SubjectDayDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface SubjectDayInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getSubjectDay(int $subjectDayId): SubjectDayDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addSubjectDay(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateSubjectDay(int $subjectDayId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteSubjectDay(int $subjectDayId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listSubjectDayPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;


}