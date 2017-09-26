<?php

declare(strict_types=1);

/*
 * This file is part of eelly package.
 *
 * (c) eelly.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Eelly\SDK\Activity\Service;

use Eelly\DTO\QualificationRelDTO;

/**
 * 店铺申请参加营销活动资格.
 * 
 * @author eellytools<localhost.shell@gmail.com>
 */
interface QualificationRelInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getQualificationRel(int $qualificationRelId): QualificationRelDTO;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addQualificationRel(array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateQualificationRel(int $qualificationRelId, array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteQualificationRel(int $qualificationRelId): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listQualificationRelPage(array $condition = [], int $limit = 10, int $currentPage = 1): array;
}
