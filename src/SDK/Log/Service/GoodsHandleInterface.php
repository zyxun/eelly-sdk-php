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

use Eelly\DTO\GoodsHandleDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface GoodsHandleInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getGoodsHandle(int $goodsHandleId, int $id): GoodsHandleDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addGoodsHandle(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateGoodsHandle(int $GoodsHandleId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteGoodsHandle(int $GoodsHandleId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listGoodsHandlePage(array $condition = [], int $limit = 10, int $currentPage = 1): array;


}