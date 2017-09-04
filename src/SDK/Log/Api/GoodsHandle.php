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
use Eelly\SDK\Log\Service\GoodsHandleInterface;
use Eelly\DTO\GoodsHandleDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class GoodsHandle implements GoodsHandleInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getGoodsHandle(int $GoodsHandleId): GoodsHandleDTO
    {
        return EellyClient::request('log/goodshandle', 'getGoodsHandle', $GoodsHandleId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addGoodsHandle(array $data): bool
    {
        return EellyClient::request('log/goodshandle', 'addGoodsHandle', $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateGoodsHandle(int $GoodsHandleId, array $data): bool
    {
        return EellyClient::request('log/goodshandle', 'updateGoodsHandle', $GoodsHandleId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteGoodsHandle(int $GoodsHandleId): bool
    {
        return EellyClient::request('log/goodshandle', 'deleteGoodsHandle', $GoodsHandleId);
    }

    /**
     *
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