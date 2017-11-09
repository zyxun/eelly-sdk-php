<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Pay\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Pay\Service\VoucherSubjectInterface;
use Eelly\DTO\VoucherSubjectDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class VoucherSubject implements VoucherSubjectInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getVoucherSubject(int $voucherSubjectId): VoucherSubjectDTO
    {
        return EellyClient::request('pay/vouchersubject', 'getVoucherSubject', $voucherSubjectId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addVoucherSubject(array $data): bool
    {
        return EellyClient::request('pay/vouchersubject', 'addVoucherSubject', $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateVoucherSubject(int $voucherSubjectId, array $data): bool
    {
        return EellyClient::request('pay/vouchersubject', 'updateVoucherSubject', $voucherSubjectId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteVoucherSubject(int $voucherSubjectId): bool
    {
        return EellyClient::request('pay/vouchersubject', 'deleteVoucherSubject', $voucherSubjectId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listVoucherSubjectPage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('pay/vouchersubject', 'listVoucherSubjectPage', $condition, $currentPage, $limit);
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