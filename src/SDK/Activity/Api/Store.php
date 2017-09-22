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

namespace Eelly\SDK\Activity\Api;

use Eelly\DTO\StoreDTO;
use Eelly\SDK\Activity\Service\StoreInterface;
use Eelly\SDK\EellyClient;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class Store implements StoreInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getStore(int $storeId): StoreDTO
    {
        return EellyClient::request('activity/store', 'getStore', $storeId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addStore(array $data): bool
    {
        return EellyClient::request('activity/store', 'addStore', $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateStore(int $storeId, array $data): bool
    {
        return EellyClient::request('activity/store', 'updateStore', $storeId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteStore(int $storeId): bool
    {
        return EellyClient::request('activity/store', 'deleteStore', $storeId);
    }

    /**
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
