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

use Eelly\DTO\ConditionRelDTO;
use Eelly\SDK\Activity\Service\ConditionRelInterface;
use Eelly\SDK\EellyClient;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class ConditionRel implements ConditionRelInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getConditionRel(int $conditionRelId): ConditionRelDTO
    {
        return EellyClient::request('activity/conditionrel', 'getConditionRel', true, $conditionRelId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addConditionRel(array $data): bool
    {
        return EellyClient::request('activity/conditionrel', 'addConditionRel', true, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateConditionRel(int $conditionRelId, array $data): bool
    {
        return EellyClient::request('activity/conditionrel', 'updateConditionRel', true, $conditionRelId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteConditionRel(int $conditionRelId): bool
    {
        return EellyClient::request('activity/conditionrel', 'deleteConditionRel', true, $conditionRelId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listConditionRelPage(array $condition = [], int $limit = 10, int $currentPage = 1): array
    {
        return EellyClient::request('activity/conditionrel', 'listConditionRelPage', true, $condition, $limit, $currentPage);
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
