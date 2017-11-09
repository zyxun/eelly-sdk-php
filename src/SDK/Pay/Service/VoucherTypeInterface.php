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

use Eelly\DTO\VoucherTypeDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface VoucherTypeInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getVoucherType(int $voucherTypeId): VoucherTypeDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addVoucherType(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateVoucherType(int $voucherTypeId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteVoucherType(int $voucherTypeId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listVoucherTypePage(array $condition = [], int $currentPage = 1, int $limit = 10): array;


}