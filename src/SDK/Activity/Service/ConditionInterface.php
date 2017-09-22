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

use Eelly\DTO\ConditionDTO;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface ConditionInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getCondition(int $conditionId): ConditionDTO;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addCondition(array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateCondition(int $conditionId, array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteCondition(int $conditionId): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listConditionPage(array $condition = [], int $limit = 10, int $currentPage = 1): array;
}
