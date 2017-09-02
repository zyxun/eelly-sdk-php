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

use Eelly\DTO\ConditionRelDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface ConditionRelInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getConditionRel(int $conditionRelId): ConditionRelDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addConditionRel(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateConditionRel(int $conditionRelId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteConditionRel(int $conditionRelId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listConditionRelPage(array $condition = [], int $limit = 10, int $currentPage = 1): array;


}