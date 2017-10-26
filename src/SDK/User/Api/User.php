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
    public function getInfo(UidDTO $user = null): UserDTO
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
    public function addUser(array $data): int
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

    public function getByUserName(string $username): array
    {
        return EellyClient::request('user/user', 'getByUserName', $username);
    }

    public function addUcUser(string $username, string $password, string $email, int $uid = 0, string $regip = ''): int
    {
        return EellyClient::request('user/user', 'addUcUser', $username, $password, $email, $uid, $regip);
    }

    public function editUcUser(string $username, string $oldpw, string $newpw, string $email, int $ignoreoldpw = 0): int
    {
        return EellyClient::request('user/user', 'editUcUser', $username, $oldpw, $newpw, $email, $ignoreoldpw);
    }

    public function getUcUserByUid(int $uid, string $fields = ''): array
    {
        return EellyClient::request('user/user', 'getUcUserByUid', $uid, $fields);
    }

    public function getUcAvatarByIds(string $uids): array
    {
        return EellyClient::request('user/user', 'getUcAvatarByIds', $uids);
    }

    public function getUcUserByEmail(string $email): array
    {
        return EellyClient::request('user/user', 'getUcUserByEmail', $email);
    }

    public function getUcUserByUsername(string $username): array
    {
        return EellyClient::request('user/user', 'getUcUserByUsername', $username);
    }

    public function checkThirdKey(int $type, string $key): int
    {
        return EellyClient::request('user/user', 'checkThirdKey', $type, $key);
    }

    public function updateUserAvatar(int $uid, string $avatar): bool
    {
        return EellyClient::request('user/user', 'updateUserAvatar', $uid, $avatar);
    }
	
	  /**
     * 获取会员搜索引擎所需数据.
     *
     * @param int $currentPage  当前页
     * @param int $limit    限制数
     * @return array
     * @requestExample({"currentPage":1,"limit":100})
     * @returnExample()
     * @throws \Eelly\SDK\
     * @author liangxinyi<liangxinyi@eelly.net>
     * @since 2017-10-23
     */
    public function listUserElasticData(int $currentPage = 1,int $limit = 100):array
	{
		return EellyClient::request('user/user', 'listUserElasticData', $currentPage, $limit);
	}

 	/**
     * {@inheritdoc}
     */
    public function checkIsExistUserMobile(string $mobile): int
    {
        return EellyClient::request('user/user', 'checkIsExistUserMobile', $mobile);
    }

    /**
     * {@inheritdoc}
     */
    public function registerUser(array $data): int
    {
        return EellyClient::request('user/user', 'registerUser', $data);
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
