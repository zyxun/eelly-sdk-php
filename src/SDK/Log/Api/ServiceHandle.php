<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Log\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Log\Service\ServiceHandleInterface;
use Eelly\DTO\ServiceHandleDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class ServiceHandle implements ServiceHandleInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getServiceHandle(int $ServiceHandleId): ServiceHandleDTO
    {
        return EellyClient::request('log/servicehandle', 'getServiceHandle', $ServiceHandleId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addServiceHandle(array $data): bool
    {
        return EellyClient::request('log/servicehandle', 'addServiceHandle', $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateServiceHandle(int $ServiceHandleId, array $data): bool
    {
        return EellyClient::request('log/servicehandle', 'updateServiceHandle', $ServiceHandleId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteServiceHandle(int $ServiceHandleId): bool
    {
        return EellyClient::request('log/servicehandle', 'deleteServiceHandle', $ServiceHandleId);
    }

    /**
     *
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