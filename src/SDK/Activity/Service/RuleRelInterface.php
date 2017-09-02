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

use Eelly\DTO\RuleRelDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface RuleRelInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getRuleRel(int $ruleRelId): RuleRelDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addRuleRel(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateRuleRel(int $ruleRelId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteRuleRel(int $ruleRelId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listRuleRelPage(array $condition = [], int $limit = 10, int $currentPage = 1): array;


}