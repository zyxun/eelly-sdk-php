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

namespace Eelly\SDK\User\Service;

use Eelly\DTO\UserDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface UserInterface
{

    /**
     * 检查用户密码.
     *
     * @param string $username 用户名(支持使用用户名和手机号)
     * @param string $password 用户密码
     * @throws \Eelly\Exception\LogicException
     * @return bool 该用户密码是否正确
     */
    public function checkPassword(string $username, string $password):bool;

    /**
     * 通过密码获取用户信息.
     *
     * @param string $username 用户名(支持使用用户名和手机号)
     * @param string $password 用户密码
     * @throws \Eelly\Exception\LogicException
     * @return UserDTO
     */
    public function getUserByPassword(string $username, string $password):UserDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getUser(int $UserId): UserDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addUser(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateUser(int $UserId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteUser(int $UserId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listUserPage(array $condition = [], int $limit = 10, int $currentPage = 1): array;


}