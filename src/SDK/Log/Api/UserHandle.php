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
use Eelly\SDK\Log\Service\UserHandleInterface;
use Eelly\DTO\UserHandleDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class UserHandle implements UserHandleInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getUserHandle(int $UserHandleId): UserHandleDTO
    {
        return EellyClient::request('log/userhandle', 'getUserHandle', $UserHandleId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addUserHandle(array $data): bool
    {
        return EellyClient::request('log/userhandle', 'addUserHandle', $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateUserHandle(int $UserHandleId, array $data): bool
    {
        return EellyClient::request('log/userhandle', 'updateUserHandle', $UserHandleId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteUserHandle(int $UserHandleId): bool
    {
        return EellyClient::request('log/userhandle', 'deleteUserHandle', $UserHandleId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listUserHandlePage(array $condition = [], int $limit = 10, int $currentPage = 1): array
    {
        return EellyClient::request('log/userhandle', 'listUserHandlePage', $condition, $limit, $currentPage);
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