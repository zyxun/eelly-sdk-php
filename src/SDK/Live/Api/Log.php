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
use Eelly\SDK\Live\Service\LogInterface;
use SDK\Live\DTO\LogDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Log implements LogInterface
{
    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getLog(int $logId): LogDTO
    {
        return EellyClient::request('live/log', 'getLog', true, $logId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getLogAsync(int $logId)
    {
        return EellyClient::request('live/log', 'getLog', false, $logId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addLog(array $data): bool
    {
        return EellyClient::request('live/log', 'addLog', true, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addLogAsync(array $data)
    {
        return EellyClient::request('live/log', 'addLog', false, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateLog(int $logId, array $data): bool
    {
        return EellyClient::request('live/log', 'updateLog', true, $logId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateLogAsync(int $logId, array $data)
    {
        return EellyClient::request('live/log', 'updateLog', false, $logId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteLog(int $logId): bool
    {
        return EellyClient::request('live/log', 'deleteLog', true, $logId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteLogAsync(int $logId)
    {
        return EellyClient::request('live/log', 'deleteLog', false, $logId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listLogPage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('live/log', 'listLogPage', true, $condition, $currentPage, $limit);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listLogPageAsync(array $condition = [], int $currentPage = 1, int $limit = 10)
    {
        return EellyClient::request('live/log', 'listLogPage', false, $condition, $currentPage, $limit);
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