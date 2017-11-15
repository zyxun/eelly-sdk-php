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

namespace Eelly\SDK\Pay\Api;

use Eelly\DTO\AccountAdjustDTO;
use Eelly\SDK\EellyClient;
use Eelly\SDK\Pay\Service\AccountAdjustInterface;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class AccountAdjust implements AccountAdjustInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getAccountAdjust(int $accountAdjustId): AccountAdjustDTO
    {
        return EellyClient::request('pay/accountadjust', 'getAccountAdjust', $accountAdjustId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addAccountAdjust(array $data): bool
    {
        return EellyClient::request('pay/accountadjust', 'addAccountAdjust', $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateAccountAdjust(int $accountAdjustId, array $data): bool
    {
        return EellyClient::request('pay/accountadjust', 'updateAccountAdjust', $accountAdjustId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteAccountAdjust(int $accountAdjustId): bool
    {
        return EellyClient::request('pay/accountadjust', 'deleteAccountAdjust', $accountAdjustId);
    }

    /**
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
