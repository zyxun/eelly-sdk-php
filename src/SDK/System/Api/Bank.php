<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\System\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\System\Service\BankInterface;
use Eelly\DTO\BankDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class Bank implements BankInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getBank(int $BankId): BankDTO
    {
        return EellyClient::request('system/bank', 'getBank', $BankId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addBank(array $data): bool
    {
        return EellyClient::request('system/bank', 'addBank', $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateBank(int $BankId, array $data): bool
    {
        return EellyClient::request('system/bank', 'updateBank', $BankId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteBank(int $BankId): bool
    {
        return EellyClient::request('system/bank', 'deleteBank', $BankId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listBankPage(array $condition = [], int $limit = 10, int $currentPage = 1): array
    {
        return EellyClient::request('system/bank', 'listBankPage', $condition, $limit, $currentPage);
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