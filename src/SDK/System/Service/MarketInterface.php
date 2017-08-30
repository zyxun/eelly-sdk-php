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

namespace Eelly\SDK\System\Service;

use Eelly\DTO\MarketDTO;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface MarketInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getMarket(int $MarketId): MarketDTO;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addMarket(array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateMarket(int $MarketId, array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteMarket(int $MarketId): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listMarketPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;


}

