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

use Eelly\DTO\VoucherDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface VoucherInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getVoucher(int $voucherId): VoucherDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addVoucher(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateVoucher(int $voucherId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteVoucher(int $voucherId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listVoucherPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;


}