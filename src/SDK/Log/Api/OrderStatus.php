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
use Eelly\SDK\Log\Service\OrderStatusInterface;
use Eelly\DTO\OrderStatusDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class OrderStatus implements OrderStatusInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getOrderStatus(int $OrderStatusId): OrderStatusDTO
    {
        return EellyClient::request('log/orderstatus', 'getOrderStatus', $OrderStatusId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addOrderStatus(array $data): bool
    {
        return EellyClient::request('log/orderstatus', 'addOrderStatus', $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateOrderStatus(int $OrderStatusId, array $data): bool
    {
        return EellyClient::request('log/orderstatus', 'updateOrderStatus', $OrderStatusId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteOrderStatus(int $OrderStatusId): bool
    {
        return EellyClient::request('log/orderstatus', 'deleteOrderStatus', $OrderStatusId);
    }

    /**
     *
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