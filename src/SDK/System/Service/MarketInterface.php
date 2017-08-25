<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\System\Service;

use Eelly\DTO\MarketDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface MarketInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getMarket(int $MarketId): MarketDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addMarket(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateMarket(int $MarketId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteMarket(int $MarketId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listMarketPage(array $condition = [], int $limit = 10, int $currentPage = 1): array;


}