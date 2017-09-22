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

use Eelly\DTO\GoodsHistory1DTO;
use Eelly\SDK\EellyClient;
use Eelly\SDK\Log\Service\GoodsHistory1Interface;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class GoodsHistory1 implements GoodsHistory1Interface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getGoodsHistory1(int $GoodsHistory1Id): GoodsHistory1DTO
    {
        return EellyClient::request('log/goodshistory1', 'getGoodsHistory1', $GoodsHistory1Id);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addGoodsHistory1(array $data): bool
    {
        return EellyClient::request('log/goodshistory1', 'addGoodsHistory1', $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateGoodsHistory1(int $GoodsHistory1Id, array $data): bool
    {
        return EellyClient::request('log/goodshistory1', 'updateGoodsHistory1', $GoodsHistory1Id, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteGoodsHistory1(int $GoodsHistory1Id): bool
    {
        return EellyClient::request('log/goodshistory1', 'deleteGoodsHistory1', $GoodsHistory1Id);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listGoodsHistory1Page(array $condition = [], int $limit = 10, int $currentPage = 1): array
    {
        return EellyClient::request('log/goodshistory1', 'listGoodsHistory1Page', $condition, $limit, $currentPage);
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
