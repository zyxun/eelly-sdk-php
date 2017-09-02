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
use Eelly\SDK\Log\Service\StoreTransferInterface;
use Eelly\DTO\StoreTransferDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class StoreTransfer implements StoreTransferInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getStoreTransfer(int $StoreTransferId): StoreTransferDTO
    {
        return EellyClient::request('log/storetransfer', 'getStoreTransfer', $StoreTransferId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addStoreTransfer(array $data): bool
    {
        return EellyClient::request('log/storetransfer', 'addStoreTransfer', $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateStoreTransfer(int $StoreTransferId, array $data): bool
    {
        return EellyClient::request('log/storetransfer', 'updateStoreTransfer', $StoreTransferId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteStoreTransfer(int $StoreTransferId): bool
    {
        return EellyClient::request('log/storetransfer', 'deleteStoreTransfer', $StoreTransferId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listStoreTransferPage(array $condition = [], int $limit = 10, int $currentPage = 1): array
    {
        return EellyClient::request('log/storetransfer', 'listStoreTransferPage', $condition, $limit, $currentPage);
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