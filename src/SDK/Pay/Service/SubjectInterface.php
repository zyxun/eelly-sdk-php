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

use Eelly\DTO\SubjectDTO;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface SubjectInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getSubject(int $subjectId): SubjectDTO;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addSubject(array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateSubject(int $subjectId, array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteSubject(int $subjectId): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listSubjectPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;
}
