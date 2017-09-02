<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Log\Service;

use Eelly\DTO\StoreTransferDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface StoreTransferInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getStoreTransfer(int $StoreTransferId): StoreTransferDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addStoreTransfer(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateStoreTransfer(int $StoreTransferId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteStoreTransfer(int $StoreTransferId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listStoreTransferPage(array $condition = [], int $limit = 10, int $currentPage = 1): array;


}