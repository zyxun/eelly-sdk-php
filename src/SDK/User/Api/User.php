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
use Eelly\SDK\User\Exception\UserException;
use Eelly\SDK\User\Service\UserInterface;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class User implements UserInterface
{
    /**
     * @inheritDoc
     */
    public function getMineDataApp(int $userId): array
    {
        // TODO: Implement getMineDataApp() method.
    }

    /**
     * @inheritDoc
     */
    public function getCodeCardInfo(int $userId): array
    {
        // TODO: Implement getCodeCardInfo() method.
    }

    /**
     * @inheritDoc
     */
    public function checkBindStatus(int $type, UidDTO $user = null): array
    {
        // TODO: Implement checkBindStatus() method.
    }

    /**
     * @inheritDoc
     */
    public function bindingMobile(array $data, UidDTO $user = null): bool
    {
        // TODO: Implement bindingMobile() method.
    }

    /**
     * @inheritDoc
     */
    public function checkUserIsBindingMobile(int $userId): array
    {
        // TODO: Implement checkUserIsBindingMobile() method.
    }

    /**
     * {@inheritdoc}
     */
    public function checkPassword(string $username, string $password): bool
    {
        return EellyClient::request('user/user', 'checkPassword', true, $username, $password);
    }

    /**
     * {@inheritdoc}
     */
    public function getUserByPassword(string $username, string $password): UserDTO
    {
        return EellyClient::request('user/user', 'getUserByPassword', true, $username, $password);
    }

    /**
     * {@inheritdoc}
     */
    public function getInfo(UidDTO $user = null): UserDTO
    {
        return EellyClient::request('user/user', 'info', true, $user);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getUser(int $userId): UserDTO
    {
        return EellyClient::request('user/user', 'getUser', true, $userId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addUser(array $data): int
    {
        return EellyClient::request('user/user', 'addUser', true, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateUser(int $userId, array $data): bool
    {
        return EellyClient::request('user/user', 'updateUser', true, $userId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteUser(int $userId): bool
    {
        return EellyClient::request('user/user', 'deleteUser', true, $userId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listUserPage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('user/user', 'listUserPage', true, $condition, $limit, $currentPage);
    }

    public function getByUserName(string $username): array
    {
        return EellyClient::request('user/user', 'getByUserName', true, $username);
    }

    public function addUcUser(string $username, string $password, string $email, int $uid = 0, string $regip = ''): int
    {
        return EellyClient::request('user/user', 'addUcUser', true, $username, $password, $email, $uid, $regip);
    }

    public function editUcUser(string $username, string $oldpw, string $newpw, string $email, int $ignoreoldpw = 0): int
    {
        return EellyClient::request('user/user', 'editUcUser', true, $username, $oldpw, $newpw, $email, $ignoreoldpw);
    }

    public function getUcUserByUid(int $uid, string $fields = ''): array
    {
        return EellyClient::request('user/user', 'getUcUserByUid', true, $uid, $fields);
    }

    public function getUcAvatarByIds(string $uids): array
    {
        return EellyClient::request('user/user', 'getUcAvatarByIds', true, $uids);
    }

    public function getUcUserByEmail(string $email): array
    {
        return EellyClient::request('user/user', 'getUcUserByEmail', true, $email);
    }

    public function getUcUserByUsername(string $username): array
    {
        return EellyClient::request('user/user', 'getUcUserByUsername', true, $username);
    }

    public function checkThirdKey(int $type, string $key): int
    {
        return EellyClient::request('user/user', 'checkThirdKey', true, $type, $key);
    }

    public function updateUserAvatar(int $uid, string $avatar): bool
    {
        return EellyClient::request('user/user', 'updateUserAvatar', true, $uid, $avatar);
    }

    /**
     * 获取会员搜索引擎所需数据.
     *
     * @param int $currentPage 当前页
     * @param int $limit       限制数
     *
     * @throws \Eelly\SDK\
     *
     * @return array
     * @requestExample({"currentPage":1,"limit":100})
     * @returnExample()
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-10-23
     */
    public function listUserElasticData(int $currentPage = 1, int $limit = 100): array
    {
        return EellyClient::request('user/user', 'listUserElasticData', true, $currentPage, $limit);
    }

    /**
     * {@inheritdoc}
     */
    public function checkIsExistUserMobile(string $mobile): int
    {
        return EellyClient::request('user/user', 'checkIsExistUserMobile', true, $mobile);
    }

    /**
     * {@inheritdoc}
     */
    public function registerUser(array $data): int
    {
        return EellyClient::request('user/user', 'registerUser', true, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getListByUserIds(array $userIds): array
    {
        return EellyClient::request('user/user', 'getListByUserIds', true, $userIds);
    }

    /**
     * 校验密码强度.
     *
     * @param string $password 密码
     *
     * @return int -1:密码不符合规则;<2:密码过于简单
     * @requestExample({'password':123456})
     * @returnExample({-1})
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年10月28日
     */
    public function checkPasswordPowerRule(string $password): int
    {
        return EellyClient::request('user/user', 'checkPasswordPowerRule', true, $password);
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
