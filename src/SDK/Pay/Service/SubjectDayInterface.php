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

use Eelly\DTO\SubjectDayDTO;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface SubjectDayInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getSubjectDay(int $subjectDayId): SubjectDayDTO;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addSubjectDay(array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateSubjectDay(int $subjectDayId, array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteSubjectDay(int $subjectDayId): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listSubjectDayPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;
}
