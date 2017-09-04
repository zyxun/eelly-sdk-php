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

use Eelly\DTO\StoreWeightDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface StoreWeightInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getStoreWeight(int $StoreWeightId): StoreWeightDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addStoreWeight(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateStoreWeight(int $StoreWeightId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteStoreWeight(int $StoreWeightId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listStoreWeightPage(array $condition = [], int $limit = 10, int $currentPage = 1): array;


}