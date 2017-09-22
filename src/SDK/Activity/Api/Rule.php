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

use Eelly\DTO\RuleDTO;
use Eelly\SDK\Activity\Service\RuleInterface;
use Eelly\SDK\EellyClient;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class Rule implements RuleInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getRule(int $ruleId): RuleDTO
    {
        return EellyClient::request('activity/rule', 'getRule', $ruleId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addRule(array $data): bool
    {
        return EellyClient::request('activity/rule', 'addRule', $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateRule(int $ruleId, array $data): bool
    {
        return EellyClient::request('activity/rule', 'updateRule', $ruleId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteRule(int $ruleId): bool
    {
        return EellyClient::request('activity/rule', 'deleteRule', $ruleId);
    }

    /**
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
