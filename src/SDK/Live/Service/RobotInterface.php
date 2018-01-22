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

namespace Eelly\SDK\Live\Service;

use \SDK\Live\DTO\RobotDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
interface RobotInterface
{
    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getRobot(int $robotId): RobotDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addRobot(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateRobot(int $robotId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteRobot(int $robotId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listRobotPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;


}