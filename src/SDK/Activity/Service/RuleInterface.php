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

use Eelly\DTO\RuleDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface RuleInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getRule(int $ruleId): RuleDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addRule(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateRule(int $ruleId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteRule(int $ruleId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listRulePage(array $condition = [], int $limit = 10, int $currentPage = 1): array;


}