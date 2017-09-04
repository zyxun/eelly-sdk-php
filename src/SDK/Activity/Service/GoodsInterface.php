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

use Eelly\DTO\GoodsDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface GoodsInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getGoods(int $goodsId): GoodsDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addGoods(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateGoods(int $goodsId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteGoods(int $goodsId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listGoodsPage(array $condition = [], int $limit = 10, int $currentPage = 1): array;


}