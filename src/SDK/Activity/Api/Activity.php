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
use Eelly\SDK\Activity\Service\ActivityInterface;
use Eelly\DTO\ActivityDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class Activity implements ActivityInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getActivity(int $activityId): ActivityDTO
    {
        return EellyClient::request('activity/activity', 'getActivity', $activityId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addActivity(array $data): bool
    {
        return EellyClient::request('activity/activity', 'addActivity', $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateActivity(int $activityId, array $data): bool
    {
        return EellyClient::request('activity/activity', 'updateActivity', $activityId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteActivity(int $activityId): bool
    {
        return EellyClient::request('activity/activity', 'deleteActivity', $activityId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listActivityPage(array $condition = [], int $limit = 10, int $currentPage = 1): array
    {
        return EellyClient::request('activity/activity', 'listActivityPage', $condition, $limit, $currentPage);
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