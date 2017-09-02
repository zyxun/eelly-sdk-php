<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Log\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Log\Service\GoodsPriceInterface;
use Eelly\DTO\GoodsPriceDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class GoodsPrice implements GoodsPriceInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getGoodsPrice(int $GoodsPriceId): GoodsPriceDTO
    {
        return EellyClient::request('log/goodsprice', 'getGoodsPrice', $GoodsPriceId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addGoodsPrice(array $data): bool
    {
        return EellyClient::request('log/goodsprice', 'addGoodsPrice', $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateGoodsPrice(int $GoodsPriceId, array $data): bool
    {
        return EellyClient::request('log/goodsprice', 'updateGoodsPrice', $GoodsPriceId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteGoodsPrice(int $GoodsPriceId): bool
    {
        return EellyClient::request('log/goodsprice', 'deleteGoodsPrice', $GoodsPriceId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listGoodsPricePage(array $condition = [], int $limit = 10, int $currentPage = 1): array
    {
        return EellyClient::request('log/goodsprice', 'listGoodsPricePage', $condition, $limit, $currentPage);
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