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

use Eelly\DTO\SubjectTypeDTO;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface SubjectTypeInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getSubjectType(int $subjectTypeId): SubjectTypeDTO;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addSubjectType(array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateSubjectType(int $subjectTypeId, array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteSubjectType(int $subjectTypeId): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listSubjectTypePage(array $condition = [], int $currentPage = 1, int $limit = 10): array;
}
