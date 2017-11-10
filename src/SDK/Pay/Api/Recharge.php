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

use Eelly\DTO\RechargeDTO;
use Eelly\SDK\EellyClient;
use Eelly\SDK\Pay\Service\RechargeInterface;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class Recharge implements RechargeInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getRecharge(int $rechargeId): RechargeDTO
    {
        return EellyClient::request('pay/recharge', 'getRecharge', $rechargeId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addRecharge(array $data): bool
    {
        return EellyClient::request('pay/recharge', 'addRecharge', $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateRecharge(int $rechargeId, array $data): bool
    {
        return EellyClient::request('pay/recharge', 'updateRecharge', $rechargeId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteRecharge(int $rechargeId): bool
    {
        return EellyClient::request('pay/recharge', 'deleteRecharge', $rechargeId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listRechargePage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('pay/recharge', 'listRechargePage', $condition, $currentPage, $limit);
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
