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

namespace Eelly\SDK\Activity\Service;

use Eelly\DTO\StoreDTO;

/**
 * 店铺及商品级活动参加申请.
 * 
 * @author eellytools<localhost.shell@gmail.com>
 */
interface StoreInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getStore(int $storeId): StoreDTO;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addStore(array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateStore(int $storeId, array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteStore(int $storeId): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listStorePage(array $condition = [], int $limit = 10, int $currentPage = 1): array;
}
