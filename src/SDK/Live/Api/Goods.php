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

namespace Eelly\SDK\Live\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Live\Service\GoodsInterface;
use SDK\Live\DTO\GoodsDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Goods implements GoodsInterface
{
    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getGoods(int $goodsId): GoodsDTO
    {
        return EellyClient::request('live/goods', 'getGoods', true, $goodsId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getGoodsAsync(int $goodsId)
    {
        return EellyClient::request('live/goods', 'getGoods', false, $goodsId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addGoods(array $data): bool
    {
        return EellyClient::request('live/goods', 'addGoods', true, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addGoodsAsync(array $data)
    {
        return EellyClient::request('live/goods', 'addGoods', false, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateGoods(int $goodsId, array $data): bool
    {
        return EellyClient::request('live/goods', 'updateGoods', true, $goodsId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateGoodsAsync(int $goodsId, array $data)
    {
        return EellyClient::request('live/goods', 'updateGoods', false, $goodsId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteGoods(int $goodsId): bool
    {
        return EellyClient::request('live/goods', 'deleteGoods', true, $goodsId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteGoodsAsync(int $goodsId)
    {
        return EellyClient::request('live/goods', 'deleteGoods', false, $goodsId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listGoodsPage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('live/goods', 'listGoodsPage', true, $condition, $currentPage, $limit);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listGoodsPageAsync(array $condition = [], int $currentPage = 1, int $limit = 10)
    {
        return EellyClient::request('live/goods', 'listGoodsPage', false, $condition, $currentPage, $limit);
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