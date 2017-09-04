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

use Eelly\DTO\ConditionDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface ConditionInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getCondition(int $conditionId): ConditionDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addCondition(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateCondition(int $conditionId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteCondition(int $conditionId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listConditionPage(array $condition = [], int $limit = 10, int $currentPage = 1): array;


}