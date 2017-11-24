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
use Eelly\SDK\Log\Service\StoreHandleInterface;
use Eelly\DTO\StoreHandleDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class StoreHandle implements StoreHandleInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getStoreHandle(int $StoreHandleId): StoreHandleDTO
    {
        return EellyClient::request('log/storeHandle', __FUNCTION__, true, $StoreHandleId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getStoreHandleAsync(int $StoreHandleId)
    {
        return EellyClient::request('log/storeHandle', __FUNCTION__, false, $StoreHandleId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addStoreHandle(array $data): bool
    {
        return EellyClient::request('log/storeHandle', __FUNCTION__, true, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addStoreHandleAsync(array $data)
    {
        return EellyClient::request('log/storeHandle', __FUNCTION__, false, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateStoreHandle(int $StoreHandleId, array $data): bool
    {
        return EellyClient::request('log/storeHandle', __FUNCTION__, true, $StoreHandleId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateStoreHandleAsync(int $StoreHandleId, array $data)
    {
        return EellyClient::request('log/storeHandle', __FUNCTION__, false, $StoreHandleId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteStoreHandle(int $StoreHandleId): bool
    {
        return EellyClient::request('log/storeHandle', __FUNCTION__, true, $StoreHandleId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteStoreHandleAsync(int $StoreHandleId)
    {
        return EellyClient::request('log/storeHandle', __FUNCTION__, false, $StoreHandleId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listStoreHandlePage(array $condition = [], int $limit = 10, int $currentPage = 1): array
    {
        return EellyClient::request('log/storeHandle', __FUNCTION__, true, $condition, $limit, $currentPage);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listStoreHandlePageAsync(array $condition = [], int $limit = 10, int $currentPage = 1)
    {
        return EellyClient::request('log/storeHandle', __FUNCTION__, false, $condition, $limit, $currentPage);
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