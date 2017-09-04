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
use Eelly\SDK\Activity\Service\RuleInterface;
use Eelly\DTO\RuleDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class Rule implements RuleInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getRule(int $ruleId): RuleDTO
    {
        return EellyClient::request('activity/rule', 'getRule', $ruleId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addRule(array $data): bool
    {
        return EellyClient::request('activity/rule', 'addRule', $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateRule(int $ruleId, array $data): bool
    {
        return EellyClient::request('activity/rule', 'updateRule', $ruleId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteRule(int $ruleId): bool
    {
        return EellyClient::request('activity/rule', 'deleteRule', $ruleId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listRulePage(array $condition = [], int $limit = 10, int $currentPage = 1): array
    {
        return EellyClient::request('activity/rule', 'listRulePage', $condition, $limit, $currentPage);
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