<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Activity\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Activity\Service\GoodsInterface;
use Eelly\DTO\GoodsDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class Goods implements GoodsInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getGoods(int $goodsId): GoodsDTO
    {
        return EellyClient::request('activity/goods', 'getGoods', $goodsId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addGoods(array $data): bool
    {
        return EellyClient::request('activity/goods', 'addGoods', $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateGoods(int $goodsId, array $data): bool
    {
        return EellyClient::request('activity/goods', 'updateGoods', $goodsId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteGoods(int $goodsId): bool
    {
        return EellyClient::request('activity/goods', 'deleteGoods', $goodsId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listGoodsPage(array $condition = [], int $limit = 10, int $currentPage = 1): array
    {
        return EellyClient::request('activity/goods', 'listGoodsPage', $condition, $limit, $currentPage);
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