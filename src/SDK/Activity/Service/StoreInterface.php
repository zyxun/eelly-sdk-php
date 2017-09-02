<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Activity\Service;

use Eelly\DTO\StoreDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface StoreInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getStore(int $storeId): StoreDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addStore(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateStore(int $storeId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteStore(int $storeId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listStorePage(array $condition = [], int $limit = 10, int $currentPage = 1): array;


}