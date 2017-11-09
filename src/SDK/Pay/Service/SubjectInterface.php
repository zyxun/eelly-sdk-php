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

use Eelly\DTO\SubjectDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface SubjectInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getSubject(int $subjectId): SubjectDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addSubject(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateSubject(int $subjectId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteSubject(int $subjectId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listSubjectPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;


}