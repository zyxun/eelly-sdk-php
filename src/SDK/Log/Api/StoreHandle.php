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

use Eelly\DTO\StoreHandleDTO;
use Eelly\SDK\EellyClient;
use Eelly\SDK\Log\Service\StoreHandleInterface;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class StoreHandle implements StoreHandleInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getStoreHandle(int $StoreHandleId): StoreHandleDTO
    {
        return EellyClient::request('log/storehandle', 'getStoreHandle', $StoreHandleId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addStoreHandle(array $data): bool
    {
        return EellyClient::request('log/storehandle', 'addStoreHandle', $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateStoreHandle(int $StoreHandleId, array $data): bool
    {
        return EellyClient::request('log/storehandle', 'updateStoreHandle', $StoreHandleId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteStoreHandle(int $StoreHandleId): bool
    {
        return EellyClient::request('log/storehandle', 'deleteStoreHandle', $StoreHandleId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listStoreHandlePage(array $condition = [], int $limit = 10, int $currentPage = 1): array
    {
        return EellyClient::request('log/storehandle', 'listStoreHandlePage', $condition, $limit, $currentPage);
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
