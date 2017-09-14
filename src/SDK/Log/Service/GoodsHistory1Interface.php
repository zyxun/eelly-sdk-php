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

use Eelly\DTO\GoodsHistory1DTO;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface GoodsHistory1Interface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getGoodsHistory1(int $GoodsHistory1Id): GoodsHistory1DTO;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addGoodsHistory1(array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateGoodsHistory1(int $GoodsHistory1Id, array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteGoodsHistory1(int $GoodsHistory1Id): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listGoodsHistory1Page(array $condition = [], int $limit = 10, int $currentPage = 1): array;
}
