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

use Eelly\DTO\AccountLogDTO;
use Eelly\SDK\EellyClient;
use Eelly\SDK\Pay\Service\AccountLogInterface;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class AccountLog implements AccountLogInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getAccountLog(int $accountLogId): AccountLogDTO
    {
        return EellyClient::request('pay/accountlog', 'getAccountLog', $accountLogId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addAccountLog(array $data): bool
    {
        return EellyClient::request('pay/accountlog', 'addAccountLog', $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateAccountLog(int $accountLogId, array $data): bool
    {
        return EellyClient::request('pay/accountlog', 'updateAccountLog', $accountLogId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteAccountLog(int $accountLogId): bool
    {
        return EellyClient::request('pay/accountlog', 'deleteAccountLog', $accountLogId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listAccountLogPage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('pay/accountlog', 'listAccountLogPage', $condition, $currentPage, $limit);
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
