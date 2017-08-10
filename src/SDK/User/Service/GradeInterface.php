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

namespace Eelly\SDK\User\Service;

use Eelly\DTO\GradeDTO;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface GradeInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getGrade(int $GradeId): GradeDTO;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addGrade(array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateGrade(int $GradeId, array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteGrade(int $GradeId): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listGradePage(array $condition = [], int $limit = 10, int $currentPage = 1): array;
}
