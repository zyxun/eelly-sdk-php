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

use Eelly\DTO\SubjectAdjustDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface SubjectAdjustInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getSubjectAdjust(int $subjectAdjustId): SubjectAdjustDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addSubjectAdjust(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateSubjectAdjust(int $subjectAdjustId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteSubjectAdjust(int $subjectAdjustId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listSubjectAdjustPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;


}