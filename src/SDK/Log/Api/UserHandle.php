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

namespace Eelly\SDK\Log\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Log\Service\UserHandleInterface;
use Eelly\DTO\UserHandleDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class UserHandle implements UserHandleInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getUserHandle(int $UserHandleId): UserHandleDTO
    {
        return EellyClient::request('log/userHandle', __FUNCTION__, true, $UserHandleId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getUserHandleAsync(int $UserHandleId)
    {
        return EellyClient::request('log/userHandle', __FUNCTION__, false, $UserHandleId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addUserHandle(array $data): bool
    {
        return EellyClient::request('log/userHandle', __FUNCTION__, true, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addUserHandleAsync(array $data)
    {
        return EellyClient::request('log/userHandle', __FUNCTION__, false, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateUserHandle(int $UserHandleId, array $data): bool
    {
        return EellyClient::request('log/userHandle', __FUNCTION__, true, $UserHandleId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateUserHandleAsync(int $UserHandleId, array $data)
    {
        return EellyClient::request('log/userHandle', __FUNCTION__, false, $UserHandleId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteUserHandle(int $UserHandleId): bool
    {
        return EellyClient::request('log/userHandle', __FUNCTION__, true, $UserHandleId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteUserHandleAsync(int $UserHandleId)
    {
        return EellyClient::request('log/userHandle', __FUNCTION__, false, $UserHandleId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listUserHandlePage(array $condition = [], int $limit = 10, int $currentPage = 1): array
    {
        return EellyClient::request('log/userHandle', __FUNCTION__, true, $condition, $limit, $currentPage);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listUserHandlePageAsync(array $condition = [], int $limit = 10, int $currentPage = 1)
    {
        return EellyClient::request('log/userHandle', __FUNCTION__, false, $condition, $limit, $currentPage);
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