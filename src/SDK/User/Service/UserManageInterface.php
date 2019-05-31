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

/**
 * 管理后台用户操作.
 *
 * @author hehui<hehui@eelly.net>
 */
interface UserManageInterface
{
    /**
     * 更改用户状态
     *
     * @param array $data
     *
     * @return bool
     *
     * @internal
     *
     * @author zhangyangxun
     *
     * @since 2018-12-21
     */
    public function changeUserStatus(array $data): bool;

    /**
     * 解绑用户手机.
     *
     * @param int    $userId
     * @param string $mobile
     * @param string $confirmCode 操作验证串
     *
     * @return bool
     *
     * @author zhangyangxun
     *
     * @since 2018-12-25
     *
     * @internal
     */
    public function unbindUserMobile(int $userId, string $mobile, string $confirmCode = ''): bool;

    /**
     * 解绑手机前获取账号信息和操作验证串.
     *
     * @param int    $userId
     * @param string $mobile
     *
     * @return array
     *
     * @returnExample({"hasPassword":true, "isBindQQ":false, "isBindWechat":false, "confirmCode":"5cd747335b5c1f10f53ce0f8f913a6db"})
     *
     * @author zhangyangxun
     *
     * @since 2018-12-26
     *
     * @internal
     */
    public function checkUnbindMobile(int $userId, string $mobile): array;
}
