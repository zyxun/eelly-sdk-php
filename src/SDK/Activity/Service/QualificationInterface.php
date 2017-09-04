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

use Eelly\DTO\QualificationDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface QualificationInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getQualification(int $qualificationId): QualificationDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addQualification(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateQualification(int $qualificationId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteQualification(int $qualificationId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listQualificationPage(array $condition = [], int $limit = 10, int $currentPage = 1): array;


}