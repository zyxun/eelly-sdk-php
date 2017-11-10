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

namespace Eelly\SDK\Pay\Service;

use Eelly\DTO\SubjectAdjustDTO;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface SubjectAdjustInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getSubjectAdjust(int $subjectAdjustId): SubjectAdjustDTO;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addSubjectAdjust(array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateSubjectAdjust(int $subjectAdjustId, array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteSubjectAdjust(int $subjectAdjustId): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listSubjectAdjustPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;
}
