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
use Eelly\SDK\Log\Service\ServiceUsedInterface;
use Eelly\DTO\ServiceUsedDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class ServiceUsed implements ServiceUsedInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getServiceUsed(int $ServiceUsedId): ServiceUsedDTO
    {
        return EellyClient::request('log/serviceused', __FUNCTION__, true, $ServiceUsedId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getServiceUsedAsync(int $ServiceUsedId)
    {
        return EellyClient::request('log/serviceused', __FUNCTION__, false, $ServiceUsedId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addServiceUsed(array $data): bool
    {
        return EellyClient::request('log/serviceused', __FUNCTION__, true, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addServiceUsedAsync(array $data)
    {
        return EellyClient::request('log/serviceused', __FUNCTION__, false, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateServiceUsed(int $ServiceUsedId, array $data): bool
    {
        return EellyClient::request('log/serviceused', __FUNCTION__, true, $ServiceUsedId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateServiceUsedAsync(int $ServiceUsedId, array $data)
    {
        return EellyClient::request('log/serviceused', __FUNCTION__, false, $ServiceUsedId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteServiceUsed(int $ServiceUsedId): bool
    {
        return EellyClient::request('log/serviceused', __FUNCTION__, true, $ServiceUsedId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteServiceUsedAsync(int $ServiceUsedId)
    {
        return EellyClient::request('log/serviceused', __FUNCTION__, false, $ServiceUsedId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listServiceUsedPage(array $condition = [], int $limit = 10, int $currentPage = 1): array
    {
        return EellyClient::request('log/serviceused', __FUNCTION__, true, $condition, $limit, $currentPage);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listServiceUsedPageAsync(array $condition = [], int $limit = 10, int $currentPage = 1)
    {
        return EellyClient::request('log/serviceused', __FUNCTION__, false, $condition, $limit, $currentPage);
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