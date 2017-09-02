<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Activity\Service;

use Eelly\DTO\QualificationRelDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface QualificationRelInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getQualificationRel(int $qualificationRelId): QualificationRelDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addQualificationRel(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateQualificationRel(int $qualificationRelId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteQualificationRel(int $qualificationRelId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listQualificationRelPage(array $condition = [], int $limit = 10, int $currentPage = 1): array;


}