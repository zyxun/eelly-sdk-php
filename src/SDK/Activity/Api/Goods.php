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

namespace Eelly\SDK\Activity\Api;

use Eelly\DTO\GoodsDTO;
use Eelly\SDK\Activity\Service\GoodsInterface;
use Eelly\SDK\EellyClient;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class Goods implements GoodsInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getGoods(int $goodsId): GoodsDTO
    {
        return EellyClient::request('activity/goods', 'getGoods', $goodsId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addGoods(array $data): bool
    {
        return EellyClient::request('activity/goods', 'addGoods', $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateGoods(int $goodsId, array $data): bool
    {
        return EellyClient::request('activity/goods', 'updateGoods', $goodsId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteGoods(int $goodsId): bool
    {
        return EellyClient::request('activity/goods', 'deleteGoods', $goodsId);
    }

    /**
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
