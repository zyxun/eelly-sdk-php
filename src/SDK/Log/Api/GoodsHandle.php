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

use Eelly\DTO\GoodsHandleDTO;
use Eelly\SDK\EellyClient;
use Eelly\SDK\Log\Service\GoodsHandleInterface;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class GoodsHandle implements GoodsHandleInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getGoodsHandle(int $GoodsHandleId): GoodsHandleDTO
    {
        return EellyClient::request('log/goodshandle', 'getGoodsHandle', $GoodsHandleId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addGoodsHandle(array $data): bool
    {
        return EellyClient::request('log/goodshandle', 'addGoodsHandle', $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateGoodsHandle(int $GoodsHandleId, array $data): bool
    {
        return EellyClient::request('log/goodshandle', 'updateGoodsHandle', $GoodsHandleId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteGoodsHandle(int $GoodsHandleId): bool
    {
        return EellyClient::request('log/goodshandle', 'deleteGoodsHandle', $GoodsHandleId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listGoodsHandlePage(array $condition = [], int $limit = 10, int $currentPage = 1): array
    {
        return EellyClient::request('log/goodshandle', 'listGoodsHandlePage', $condition, $limit, $currentPage);
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
