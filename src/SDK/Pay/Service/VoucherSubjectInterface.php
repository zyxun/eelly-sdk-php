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

use Eelly\DTO\VoucherSubjectDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface VoucherSubjectInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getVoucherSubject(int $voucherSubjectId): VoucherSubjectDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addVoucherSubject(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateVoucherSubject(int $voucherSubjectId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteVoucherSubject(int $voucherSubjectId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listVoucherSubjectPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;


}