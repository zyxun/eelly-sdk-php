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

namespace Eelly\SDK\Live\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Live\Service\RobotInterface;
use SDK\Live\DTO\RobotDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Robot implements RobotInterface
{
    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getRobot(int $robotId): RobotDTO
    {
        return EellyClient::request('live/robot', 'getRobot', true, $robotId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getRobotAsync(int $robotId)
    {
        return EellyClient::request('live/robot', 'getRobot', false, $robotId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addRobot(array $data): bool
    {
        return EellyClient::request('live/robot', 'addRobot', true, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addRobotAsync(array $data)
    {
        return EellyClient::request('live/robot', 'addRobot', false, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateRobot(int $robotId, array $data): bool
    {
        return EellyClient::request('live/robot', 'updateRobot', true, $robotId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateRobotAsync(int $robotId, array $data)
    {
        return EellyClient::request('live/robot', 'updateRobot', false, $robotId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteRobot(int $robotId): bool
    {
        return EellyClient::request('live/robot', 'deleteRobot', true, $robotId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteRobotAsync(int $robotId)
    {
        return EellyClient::request('live/robot', 'deleteRobot', false, $robotId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listRobotPage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('live/robot', 'listRobotPage', true, $condition, $currentPage, $limit);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listRobotPageAsync(array $condition = [], int $currentPage = 1, int $limit = 10)
    {
        return EellyClient::request('live/robot', 'listRobotPage', false, $condition, $currentPage, $limit);
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