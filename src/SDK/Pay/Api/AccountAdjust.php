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
use Eelly\SDK\Pay\Service\AccountAdjustInterface;
use Eelly\DTO\AccountAdjustDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class AccountAdjust implements AccountAdjustInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getAccountAdjust(int $accountAdjustId): AccountAdjustDTO
    {
        return EellyClient::request('pay/accountadjust', 'getAccountAdjust', $accountAdjustId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addAccountAdjust(array $data): bool
    {
        return EellyClient::request('pay/accountadjust', 'addAccountAdjust', $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateAccountAdjust(int $accountAdjustId, array $data): bool
    {
        return EellyClient::request('pay/accountadjust', 'updateAccountAdjust', $accountAdjustId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteAccountAdjust(int $accountAdjustId): bool
    {
        return EellyClient::request('pay/accountadjust', 'deleteAccountAdjust', $accountAdjustId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listAccountAdjustPage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('pay/accountadjust', 'listAccountAdjustPage', $condition, $currentPage, $limit);
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