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

use Eelly\DTO\RuleRelDTO;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface RuleRelInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getRuleRel(int $ruleRelId): RuleRelDTO;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addRuleRel(array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateRuleRel(int $ruleRelId, array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteRuleRel(int $ruleRelId): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listRuleRelPage(array $condition = [], int $limit = 10, int $currentPage = 1): array;
}
