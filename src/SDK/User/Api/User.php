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

use Eelly\DTO\UidDTO;
use Eelly\DTO\UserDTO;
use Eelly\SDK\EellyClient;
use Eelly\SDK\User\Service\UserInterface;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class User implements UserInterface
{
    /**
     * {@inheritdoc}
     */
    public function checkPassword(string $username, string $password): bool
    {
        return EellyClient::request('user/user', 'checkPassword', $username, $password);
    }

    /**
     * {@inheritdoc}
     */
    public function getUserByPassword(string $username, string $password): UserDTO
    {
        return EellyClient::request('user/user', 'getUserByPassword', $username, $password);
    }

    /**
     * {@inheritdoc}
     */
    public function info(UidDTO $user = null): UserDTO
    {
        return EellyClient::request('user/user', 'info', $user);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getUser(int $userId): UserDTO
    {
        return EellyClient::request('user/user', 'getUser', $userId);
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
    public function updateUser(int $userId, array $data): bool
    {
        return EellyClient::request('user/user', 'updateUser', $userId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteUser(int $userId): bool
    {
        return EellyClient::request('user/user', 'deleteUser', $userId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listUserPage(array $condition = [], int $currentPage = 1, int $limit = 10): array
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
