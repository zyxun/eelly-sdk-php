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

namespace Eelly\SDK\Activity\Api;

use Eelly\DTO\RuleRelDTO;
use Eelly\SDK\Activity\Service\RuleRelInterface;
use Eelly\SDK\EellyClient;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class RuleRel implements RuleRelInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getRuleRel(int $ruleRelId): RuleRelDTO
    {
        return EellyClient::request('activity/rulerel', 'getRuleRel', true, $ruleRelId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addRuleRel(array $data): bool
    {
        return EellyClient::request('activity/rulerel', 'addRuleRel', true, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateRuleRel(int $ruleRelId, array $data): bool
    {
        return EellyClient::request('activity/rulerel', 'updateRuleRel', true, $ruleRelId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteRuleRel(int $ruleRelId): bool
    {
        return EellyClient::request('activity/rulerel', 'deleteRuleRel', true, $ruleRelId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listRuleRelPage(array $condition = [], int $limit = 10, int $currentPage = 1): array
    {
        return EellyClient::request('activity/rulerel', 'listRuleRelPage', true, $condition, $limit, $currentPage);
    }

    /**
     * @return self
     */
    public static function getInstance(): self
    {
        static $instance;
        if (null === $instance) {
            $instance = new self();
        }

        return $instance;
    }
}
