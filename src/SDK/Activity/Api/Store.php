<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Activity\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Activity\Service\StoreInterface;
use Eelly\DTO\StoreDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class Store implements StoreInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getStore(int $storeId): StoreDTO
    {
        return EellyClient::request('activity/store', 'getStore', $storeId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addStore(array $data): bool
    {
        return EellyClient::request('activity/store', 'addStore', $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateStore(int $storeId, array $data): bool
    {
        return EellyClient::request('activity/store', 'updateStore', $storeId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteStore(int $storeId): bool
    {
        return EellyClient::request('activity/store', 'deleteStore', $storeId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listStorePage(array $condition = [], int $limit = 10, int $currentPage = 1): array
    {
        return EellyClient::request('activity/store', 'listStorePage', $condition, $limit, $currentPage);
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