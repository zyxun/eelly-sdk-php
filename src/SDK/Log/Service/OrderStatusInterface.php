<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Log\Service;

use Eelly\DTO\OrderStatusDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface OrderStatusInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getOrderStatus(int $OrderStatusId): OrderStatusDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addOrderStatus(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateOrderStatus(int $OrderStatusId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteOrderStatus(int $OrderStatusId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listOrderStatusPage(array $condition = [], int $limit = 10, int $currentPage = 1): array;


}