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

use Eelly\DTO\QualificationDTO;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface QualificationInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getQualification(int $qualificationId): QualificationDTO;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addQualification(array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateQualification(int $qualificationId, array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteQualification(int $qualificationId): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listQualificationPage(array $condition = [], int $limit = 10, int $currentPage = 1): array;
}
