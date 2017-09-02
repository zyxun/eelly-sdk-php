<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Activity\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Activity\Service\RuleRelInterface;
use Eelly\DTO\RuleRelDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class RuleRel implements RuleRelInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getRuleRel(int $ruleRelId): RuleRelDTO
    {
        return EellyClient::request('activity/rulerel', 'getRuleRel', $ruleRelId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addRuleRel(array $data): bool
    {
        return EellyClient::request('activity/rulerel', 'addRuleRel', $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateRuleRel(int $ruleRelId, array $data): bool
    {
        return EellyClient::request('activity/rulerel', 'updateRuleRel', $ruleRelId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteRuleRel(int $ruleRelId): bool
    {
        return EellyClient::request('activity/rulerel', 'deleteRuleRel', $ruleRelId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listRuleRelPage(array $condition = [], int $limit = 10, int $currentPage = 1): array
    {
        return EellyClient::request('activity/rulerel', 'listRuleRelPage', $condition, $limit, $currentPage);
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