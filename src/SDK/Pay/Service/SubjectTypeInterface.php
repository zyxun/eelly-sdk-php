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

use Eelly\DTO\SubjectTypeDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface SubjectTypeInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getSubjectType(int $subjectTypeId): SubjectTypeDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addSubjectType(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateSubjectType(int $subjectTypeId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteSubjectType(int $subjectTypeId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listSubjectTypePage(array $condition = [], int $currentPage = 1, int $limit = 10): array;


}