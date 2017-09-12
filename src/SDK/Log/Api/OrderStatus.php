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

use Eelly\DTO\OrderStatusDTO;
use Eelly\SDK\EellyClient;
use Eelly\SDK\Log\Service\OrderStatusInterface;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class OrderStatus implements OrderStatusInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getOrderStatus(int $OrderStatusId): OrderStatusDTO
    {
        return EellyClient::request('log/orderstatus', 'getOrderStatus', $OrderStatusId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addOrderStatus(array $data): bool
    {
        return EellyClient::request('log/orderstatus', 'addOrderStatus', $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateOrderStatus(int $OrderStatusId, array $data): bool
    {
        return EellyClient::request('log/orderstatus', 'updateOrderStatus', $OrderStatusId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteOrderStatus(int $OrderStatusId): bool
    {
        return EellyClient::request('log/orderstatus', 'deleteOrderStatus', $OrderStatusId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listOrderStatusPage(array $condition = [], int $limit = 10, int $currentPage = 1): array
    {
        return EellyClient::request('log/orderstatus', 'listOrderStatusPage', $condition, $limit, $currentPage);
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
