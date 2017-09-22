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

use Eelly\DTO\ConditionRelDTO;

/**
 * 买家参与营销活动条件.
 * 
 * @author eellytools<localhost.shell@gmail.com>
 */
interface ConditionRelInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getConditionRel(int $conditionRelId): ConditionRelDTO;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addConditionRel(array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateConditionRel(int $conditionRelId, array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteConditionRel(int $conditionRelId): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listConditionRelPage(array $condition = [], int $limit = 10, int $currentPage = 1): array;
}
