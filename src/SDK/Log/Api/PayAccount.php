<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Log\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Log\DTO\PayAccountDTO;
use Eelly\SDK\Log\Service\PayAccountInterface;


/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class PayAccount implements PayAccountInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getPayAccount(int $payAccountId): PayAccountDTO
    {
        return EellyClient::request('log/payaccount', 'getPayAccount', $payAccountId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addPayAccount(array $data): bool
    {
        return EellyClient::request('log/payaccount', 'addPayAccount',true,$data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updatePayAccount(int $payAccountId, array $data): bool
    {
        return EellyClient::request('log/payaccount', 'updatePayAccount', $payAccountId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deletePayAccount(int $payAccountId): bool
    {
        return EellyClient::request('log/payaccount', 'deletePayAccount', $payAccountId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listPayAccountPage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('log/payaccount', 'listPayAccountPage', $condition, $currentPage, $limit);
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