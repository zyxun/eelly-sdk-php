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
use Eelly\SDK\Log\Service\StoreWeightInterface;
use Eelly\DTO\StoreWeightDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class StoreWeight implements StoreWeightInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getStoreWeight(int $StoreWeightId): StoreWeightDTO
    {
        return EellyClient::request('log/storeweight', 'getStoreWeight', $StoreWeightId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addStoreWeight(array $data): bool
    {
        return EellyClient::request('log/storeweight', 'addStoreWeight', $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateStoreWeight(int $StoreWeightId, array $data): bool
    {
        return EellyClient::request('log/storeweight', 'updateStoreWeight', $StoreWeightId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteStoreWeight(int $StoreWeightId): bool
    {
        return EellyClient::request('log/storeweight', 'deleteStoreWeight', $StoreWeightId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listStoreWeightPage(array $condition = [], int $limit = 10, int $currentPage = 1): array
    {
        return EellyClient::request('log/storeweight', 'listStoreWeightPage', $condition, $limit, $currentPage);
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