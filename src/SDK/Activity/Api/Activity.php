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

use Eelly\DTO\ActivityDTO;
use Eelly\SDK\Activity\Service\ActivityInterface;
use Eelly\SDK\EellyClient;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class Activity implements ActivityInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getActivity(int $activityId): ActivityDTO
    {
        return EellyClient::request('activity/activity', 'getActivity', $activityId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addActivity(array $data): bool
    {
        return EellyClient::request('activity/activity', 'addActivity', $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateActivity(int $activityId, array $data): bool
    {
        return EellyClient::request('activity/activity', 'updateActivity', $activityId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteActivity(int $activityId): bool
    {
        return EellyClient::request('activity/activity', 'deleteActivity', $activityId);
    }

    /**
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
