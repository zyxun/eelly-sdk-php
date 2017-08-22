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

namespace Eelly\SDK\Store\Api;

use Eelly\DTO\UidDTO;
use Eelly\SDK\EellyClient;
use Eelly\SDK\Store\Service\StoreInterface;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class Store implements StoreInterface
{
    /**
     * {@inheritdoc}
     *
     * @see \Eelly\SDK\Store\Service\StoreInterface::addStore()
     */
    public function addStore(array $storeData, UidDTO $user = null): bool
    {
        return EellyClient::request('store/addStore', __FUNCTION__, $storeData, $user);
    }

    /**
     *
     * {@inheritDoc}
     * @see \Eelly\SDK\Store\Service\StoreInterface::addStoreOperator()
     */
    public function addStoreOperator(int $userId, int $storeId, UidDTO $user = null): bool
    {
        return EellyClient::request('store/addStoreOperator', __FUNCTION__, $userId, $storeId, $user);
    }

    /**
     *
     * {@inheritDoc}
     * @see \Eelly\SDK\Store\Service\StoreInterface::deleteStoreOperator()
     */
    public function deleteStoreOperator(int $operatorId, int $userId, UidDTO $user = null): bool
    {
        return EellyClient::request('store/deleteStoreOperator', __FUNCTION__, $operatorId, $userId, $user);
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
