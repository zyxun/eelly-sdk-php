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
use Eelly\SDK\Activity\Service\ConditionRelInterface;
use Eelly\DTO\ConditionRelDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class ConditionRel implements ConditionRelInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getConditionRel(int $conditionRelId): ConditionRelDTO
    {
        return EellyClient::request('activity/conditionrel', 'getConditionRel', $conditionRelId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addConditionRel(array $data): bool
    {
        return EellyClient::request('activity/conditionrel', 'addConditionRel', $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateConditionRel(int $conditionRelId, array $data): bool
    {
        return EellyClient::request('activity/conditionrel', 'updateConditionRel', $conditionRelId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteConditionRel(int $conditionRelId): bool
    {
        return EellyClient::request('activity/conditionrel', 'deleteConditionRel', $conditionRelId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listConditionRelPage(array $condition = [], int $limit = 10, int $currentPage = 1): array
    {
        return EellyClient::request('activity/conditionrel', 'listConditionRelPage', $condition, $limit, $currentPage);
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