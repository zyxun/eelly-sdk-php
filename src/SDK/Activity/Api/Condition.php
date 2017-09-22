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

use Eelly\DTO\ConditionDTO;
use Eelly\SDK\Activity\Service\ConditionInterface;
use Eelly\SDK\EellyClient;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class Condition implements ConditionInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getCondition(int $conditionId): ConditionDTO
    {
        return EellyClient::request('activity/condition', 'getCondition', $conditionId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addCondition(array $data): bool
    {
        return EellyClient::request('activity/condition', 'addCondition', $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateCondition(int $conditionId, array $data): bool
    {
        return EellyClient::request('activity/condition', 'updateCondition', $conditionId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteCondition(int $conditionId): bool
    {
        return EellyClient::request('activity/condition', 'deleteCondition', $conditionId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listConditionPage(array $condition = [], int $limit = 10, int $currentPage = 1): array
    {
        return EellyClient::request('activity/condition', 'listConditionPage', $condition, $limit, $currentPage);
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
