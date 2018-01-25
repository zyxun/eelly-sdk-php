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

namespace Eelly\SDK\Live\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Live\Service\UserInterface;
use SDK\Live\DTO\UserDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class User implements UserInterface
{
    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getUser(int $userId): UserDTO
    {
        return EellyClient::request('live/user', 'getUser', true, $userId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getUserAsync(int $userId)
    {
        return EellyClient::request('live/user', 'getUser', false, $userId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addUser(array $data): bool
    {
        return EellyClient::request('live/user', 'addUser', true, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addUserAsync(array $data)
    {
        return EellyClient::request('live/user', 'addUser', false, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateUser(int $userId, array $data): bool
    {
        return EellyClient::request('live/user', 'updateUser', true, $userId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateUserAsync(int $userId, array $data)
    {
        return EellyClient::request('live/user', 'updateUser', false, $userId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteUser(int $userId): bool
    {
        return EellyClient::request('live/user', 'deleteUser', true, $userId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteUserAsync(int $userId)
    {
        return EellyClient::request('live/user', 'deleteUser', false, $userId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listUserPage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('live/user', 'listUserPage', true, $condition, $currentPage, $limit);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listUserPageAsync(array $condition = [], int $currentPage = 1, int $limit = 10)
    {
        return EellyClient::request('live/user', 'listUserPage', false, $condition, $currentPage, $limit);
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