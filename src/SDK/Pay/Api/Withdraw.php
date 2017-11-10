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

use Eelly\DTO\WithdrawDTO;
use Eelly\SDK\EellyClient;
use Eelly\SDK\Pay\Service\WithdrawInterface;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class Withdraw implements WithdrawInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getWithdraw(int $withdrawId): WithdrawDTO
    {
        return EellyClient::request('pay/withdraw', 'getWithdraw', $withdrawId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addWithdraw(array $data): bool
    {
        return EellyClient::request('pay/withdraw', 'addWithdraw', $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateWithdraw(int $withdrawId, array $data): bool
    {
        return EellyClient::request('pay/withdraw', 'updateWithdraw', $withdrawId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteWithdraw(int $withdrawId): bool
    {
        return EellyClient::request('pay/withdraw', 'deleteWithdraw', $withdrawId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listWithdrawPage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('pay/withdraw', 'listWithdrawPage', $condition, $currentPage, $limit);
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
