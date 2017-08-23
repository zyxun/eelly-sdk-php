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

use Eelly\DTO\StoreHandleDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface StoreHandleInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getStoreHandle(int $StoreHandleId): StoreHandleDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addStoreHandle(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateStoreHandle(int $StoreHandleId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteStoreHandle(int $StoreHandleId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listStoreHandlePage(array $condition = [], int $limit = 10, int $currentPage = 1): array;


}