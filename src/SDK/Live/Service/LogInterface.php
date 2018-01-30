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

use \SDK\Live\DTO\LogDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
interface LogInterface
{
    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getLog(int $logId): LogDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addLog(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateLog(int $logId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteLog(int $logId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listLogPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;


}