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

namespace Eelly\SDK\Log\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Log\Service\GoodsHistory1Interface;
use Eelly\DTO\GoodsHistory1DTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class GoodsHistory1 implements GoodsHistory1Interface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getGoodsHistory1(int $GoodsHistory1Id): GoodsHistory1DTO
    {
        return EellyClient::request('log/goodsHistory1', __FUNCTION__, true, $GoodsHistory1Id);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getGoodsHistory1Async(int $GoodsHistory1Id)
    {
        return EellyClient::request('log/goodsHistory1', __FUNCTION__, false, $GoodsHistory1Id);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addGoodsHistory1(array $data): bool
    {
        return EellyClient::request('log/goodsHistory1', __FUNCTION__, true, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addGoodsHistory1Async(array $data)
    {
        return EellyClient::request('log/goodsHistory1', __FUNCTION__, false, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateGoodsHistory1(int $GoodsHistory1Id, array $data): bool
    {
        return EellyClient::request('log/goodsHistory1', __FUNCTION__, true, $GoodsHistory1Id, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateGoodsHistory1Async(int $GoodsHistory1Id, array $data)
    {
        return EellyClient::request('log/goodsHistory1', __FUNCTION__, false, $GoodsHistory1Id, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteGoodsHistory1(int $GoodsHistory1Id): bool
    {
        return EellyClient::request('log/goodsHistory1', __FUNCTION__, true, $GoodsHistory1Id);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteGoodsHistory1Async(int $GoodsHistory1Id)
    {
        return EellyClient::request('log/goodsHistory1', __FUNCTION__, false, $GoodsHistory1Id);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listGoodsHistory1Page(array $condition = [], int $limit = 10, int $currentPage = 1): array
    {
        return EellyClient::request('log/goodsHistory1', __FUNCTION__, true, $condition, $limit, $currentPage);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listGoodsHistory1PageAsync(array $condition = [], int $limit = 10, int $currentPage = 1)
    {
        return EellyClient::request('log/goodsHistory1', __FUNCTION__, false, $condition, $limit, $currentPage);
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