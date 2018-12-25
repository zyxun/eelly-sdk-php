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

use Eelly\SDK\EellyClient;
use Eelly\SDK\User\Service\UserManageInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class UserManage implements UserManageInterface
{
    /**
     * 更改用户状态
     *
     * @param array $data
     * @return bool
     *
     * @internal
     *
     * @author zhangyangxun
     * @since 2018-12-21
     */
    public function changeUserStatus(array $data): bool
    {
        return EellyClient::request('user/userManage', 'changeUserStatus', true, $data);
    }

    /**
     * 更改用户状态
     *
     * @param array $data
     * @return bool
     *
     * @internal
     *
     * @author zhangyangxun
     * @since 2018-12-21
     */
    public function changeUserStatusAsync(array $data)
    {
        return EellyClient::request('user/userManage', 'changeUserStatus', false, $data);
    }

    /**
     * 解绑用户手机
     *
     * @param int    $userId
     * @param string $mobile
     * @return bool
     *
     * @author zhangyangxun
     * @since 2018-12-25
     *
     * @internal
     */
    public function UnbindUserMobile(int $userId, string $mobile): bool
    {
        return EellyClient::request('user/userManage', 'UnbindUserMobile', true, $userId, $mobile);
    }

    /**
     * 解绑用户手机
     *
     * @param int    $userId
     * @param string $mobile
     * @return bool
     *
     * @author zhangyangxun
     * @since 2018-12-25
     *
     * @internal
     */
    public function UnbindUserMobileAsync(int $userId, string $mobile)
    {
        return EellyClient::request('user/userManage', 'UnbindUserMobile', false, $userId, $mobile);
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