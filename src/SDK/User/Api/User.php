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

namespace Eelly\SDK\User\Api;

use Eelly\DTO\UserDTO;
use Eelly\SDK\EellyClient;
use Eelly\SDK\User\Service\UserInterface;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class User implements UserInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getUser(int $UserId): UserDTO
    {
        return EellyClient::request('user/user', 'getUser', $UserId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addUser(array $data): bool
    {
        return EellyClient::request('user/user', 'addUser', $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateUser(int $UserId, array $data): bool
    {
        return EellyClient::request('user/user', 'updateUser', $UserId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteUser(int $UserId): bool
    {
        return EellyClient::request('user/user', 'deleteUser', $UserId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listUserPage(array $condition = [], int $limit = 10, int $currentPage = 1): array
    {
        return EellyClient::request('user/user', 'listUserPage', $condition, $limit, $currentPage);
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
