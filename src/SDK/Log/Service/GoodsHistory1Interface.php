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

use Eelly\DTO\GoodsHistory1DTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface GoodsHistory1Interface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getGoodsHistory1(int $GoodsHistory1Id): GoodsHistory1DTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addGoodsHistory1(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateGoodsHistory1(int $GoodsHistory1Id, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteGoodsHistory1(int $GoodsHistory1Id): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listGoodsHistory1Page(array $condition = [], int $limit = 10, int $currentPage = 1): array;


}