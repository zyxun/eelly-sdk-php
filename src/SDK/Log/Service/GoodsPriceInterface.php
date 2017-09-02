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

use Eelly\DTO\GoodsPriceDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface GoodsPriceInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getGoodsPrice(int $GoodsPriceId): GoodsPriceDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addGoodsPrice(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateGoodsPrice(int $GoodsPriceId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteGoodsPrice(int $GoodsPriceId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listGoodsPricePage(array $condition = [], int $limit = 10, int $currentPage = 1): array;


}