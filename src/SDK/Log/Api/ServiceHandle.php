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

use Eelly\DTO\ServiceHandleDTO;
use Eelly\SDK\EellyClient;
use Eelly\SDK\Log\Service\ServiceHandleInterface;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class ServiceHandle implements ServiceHandleInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getServiceHandle(int $ServiceHandleId): ServiceHandleDTO
    {
        return EellyClient::request('log/servicehandle', 'getServiceHandle', $ServiceHandleId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addServiceHandle(array $data): bool
    {
        return EellyClient::request('log/servicehandle', 'addServiceHandle', $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateServiceHandle(int $ServiceHandleId, array $data): bool
    {
        return EellyClient::request('log/servicehandle', 'updateServiceHandle', $ServiceHandleId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteServiceHandle(int $ServiceHandleId): bool
    {
        return EellyClient::request('log/servicehandle', 'deleteServiceHandle', $ServiceHandleId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listServiceHandlePage(array $condition = [], int $limit = 10, int $currentPage = 1): array
    {
        return EellyClient::request('log/servicehandle', 'listServiceHandlePage', $condition, $limit, $currentPage);
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
