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
use Eelly\SDK\Log\Service\StoreWeightInterface;
use Eelly\DTO\StoreWeightDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class StoreWeight implements StoreWeightInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getStoreWeight(int $StoreWeightId): StoreWeightDTO
    {
        return EellyClient::request('log/storeWeight', __FUNCTION__, true, $StoreWeightId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getStoreWeightAsync(int $StoreWeightId)
    {
        return EellyClient::request('log/storeWeight', __FUNCTION__, false, $StoreWeightId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addStoreWeight(array $data): bool
    {
        return EellyClient::request('log/storeWeight', __FUNCTION__, true, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addStoreWeightAsync(array $data)
    {
        return EellyClient::request('log/storeWeight', __FUNCTION__, false, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateStoreWeight(int $StoreWeightId, array $data): bool
    {
        return EellyClient::request('log/storeWeight', __FUNCTION__, true, $StoreWeightId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateStoreWeightAsync(int $StoreWeightId, array $data)
    {
        return EellyClient::request('log/storeWeight', __FUNCTION__, false, $StoreWeightId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteStoreWeight(int $StoreWeightId): bool
    {
        return EellyClient::request('log/storeWeight', __FUNCTION__, true, $StoreWeightId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteStoreWeightAsync(int $StoreWeightId)
    {
        return EellyClient::request('log/storeWeight', __FUNCTION__, false, $StoreWeightId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listStoreWeightPage(array $condition = [], int $limit = 10, int $currentPage = 1): array
    {
        return EellyClient::request('log/storeWeight', __FUNCTION__, true, $condition, $limit, $currentPage);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listStoreWeightPageAsync(array $condition = [], int $limit = 10, int $currentPage = 1)
    {
        return EellyClient::request('log/storeWeight', __FUNCTION__, false, $condition, $limit, $currentPage);
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