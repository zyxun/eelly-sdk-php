<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
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
     * @return bool 该用户密码是否正确
     * @throws \Eelly\Exception\LogicException
     */
    public function checkPassword(string $username, string $password):bool;

    /**
     * 通过密码获取用户信息.
     *
     * @param string $username 用户名(支持使用用户名和手机号)
     * @param string $password 用户密码
     * @return UserDTO
     * @throws \Eelly\Exception\LogicException
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