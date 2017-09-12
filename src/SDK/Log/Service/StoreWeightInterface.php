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

namespace Eelly\SDK\Log\Service;

use Eelly\DTO\StoreWeightDTO;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface StoreWeightInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getStoreWeight(int $StoreWeightId): StoreWeightDTO;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addStoreWeight(array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateStoreWeight(int $StoreWeightId, array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteStoreWeight(int $StoreWeightId): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listStoreWeightPage(array $condition = [], int $limit = 10, int $currentPage = 1): array;
}
