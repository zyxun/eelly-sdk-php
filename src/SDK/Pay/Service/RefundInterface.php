<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Pay\Service;

use Eelly\DTO\RefundDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface RefundInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getRefund(int $refundId): RefundDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addRefund(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateRefund(int $refundId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteRefund(int $refundId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listRefundPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;


}