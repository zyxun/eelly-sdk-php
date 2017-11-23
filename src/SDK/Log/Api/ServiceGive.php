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
use Eelly\SDK\Log\Service\ServiceGiveInterface;
use Eelly\DTO\ServiceGiveDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class ServiceGive implements ServiceGiveInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getServiceGive(int $ServiceGiveId): ServiceGiveDTO
    {
        return EellyClient::request('log/servicegive', __FUNCTION__, true, $ServiceGiveId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getServiceGiveAsync(int $ServiceGiveId)
    {
        return EellyClient::request('log/servicegive', __FUNCTION__, false, $ServiceGiveId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addServiceGive(array $data): bool
    {
        return EellyClient::request('log/servicegive', __FUNCTION__, true, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addServiceGiveAsync(array $data)
    {
        return EellyClient::request('log/servicegive', __FUNCTION__, false, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateServiceGive(int $ServiceGiveId, array $data): bool
    {
        return EellyClient::request('log/servicegive', __FUNCTION__, true, $ServiceGiveId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateServiceGiveAsync(int $ServiceGiveId, array $data)
    {
        return EellyClient::request('log/servicegive', __FUNCTION__, false, $ServiceGiveId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteServiceGive(int $ServiceGiveId): bool
    {
        return EellyClient::request('log/servicegive', __FUNCTION__, true, $ServiceGiveId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteServiceGiveAsync(int $ServiceGiveId)
    {
        return EellyClient::request('log/servicegive', __FUNCTION__, false, $ServiceGiveId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listServiceGivePage(array $condition = [], int $limit = 10, int $currentPage = 1): array
    {
        return EellyClient::request('log/servicegive', __FUNCTION__, true, $condition, $limit, $currentPage);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listServiceGivePageAsync(array $condition = [], int $limit = 10, int $currentPage = 1)
    {
        return EellyClient::request('log/servicegive', __FUNCTION__, false, $condition, $limit, $currentPage);
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