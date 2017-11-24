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

namespace Eelly\SDK\Log\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Log\Service\ServiceHandleInterface;
use Eelly\DTO\ServiceHandleDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class ServiceHandle implements ServiceHandleInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getServiceHandle(int $ServiceHandleId): ServiceHandleDTO
    {
        return EellyClient::request('log/serviceHandle', __FUNCTION__, true, $ServiceHandleId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getServiceHandleAsync(int $ServiceHandleId)
    {
        return EellyClient::request('log/serviceHandle', __FUNCTION__, false, $ServiceHandleId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addServiceHandle(array $data): bool
    {
        return EellyClient::request('log/serviceHandle', __FUNCTION__, true, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addServiceHandleAsync(array $data)
    {
        return EellyClient::request('log/serviceHandle', __FUNCTION__, false, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateServiceHandle(int $ServiceHandleId, array $data): bool
    {
        return EellyClient::request('log/serviceHandle', __FUNCTION__, true, $ServiceHandleId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateServiceHandleAsync(int $ServiceHandleId, array $data)
    {
        return EellyClient::request('log/serviceHandle', __FUNCTION__, false, $ServiceHandleId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteServiceHandle(int $ServiceHandleId): bool
    {
        return EellyClient::request('log/serviceHandle', __FUNCTION__, true, $ServiceHandleId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteServiceHandleAsync(int $ServiceHandleId)
    {
        return EellyClient::request('log/serviceHandle', __FUNCTION__, false, $ServiceHandleId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listServiceHandlePage(array $condition = [], int $limit = 10, int $currentPage = 1): array
    {
        return EellyClient::request('log/serviceHandle', __FUNCTION__, true, $condition, $limit, $currentPage);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listServiceHandlePageAsync(array $condition = [], int $limit = 10, int $currentPage = 1)
    {
        return EellyClient::request('log/serviceHandle', __FUNCTION__, false, $condition, $limit, $currentPage);
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