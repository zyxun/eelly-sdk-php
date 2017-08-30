<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\System\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\System\Service\MarketInterface;
use Eelly\DTO\MarketDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class Market implements MarketInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getMarket(int $MarketId): MarketDTO
    {
        return EellyClient::request('system/market', 'getMarket', $MarketId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addMarket(array $data): bool
    {
        return EellyClient::request('system/market', 'addMarket', $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateMarket(int $MarketId, array $data): bool
    {
        return EellyClient::request('system/market', 'updateMarket', $MarketId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteMarket(int $MarketId): bool
    {
        return EellyClient::request('system/market', 'deleteMarket', $MarketId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listMarketPage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('system/market', 'listMarketPage', $condition, $limit, $currentPage);
    }

    /**
     * @return self
     */
    public static function getInstance(): self
    {
        static $instance;
        if (null === $instance) {
            $instance = new self();
        }

        return $instance;
    }
}