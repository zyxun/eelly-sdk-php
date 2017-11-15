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

namespace Eelly\SDK\User\DTO;

use Eelly\DTO\AbstractDTO;

class UserDTO extends AbstractDTO
{
    /**
     * 用户ID.
     *
     * @var int
     */
    public $userId;

    /**
     * 用户帐号.
     *
     * @var string
     */
    public $username;

    /**
     * 绑定手机.
     *
     * @var string
     */
    public $mobile;

    /**
     * 头像.
     *
     * @var string
     */
    public $avatar;

    /**
     * 用户状态：0 正常 1 风险帐户 2 禁止登陆 3 黑名单.
     *
     * @var int
     */
    public $status;

    /**
     * 添加时间.
     *
     * @var int
     */
    public $createdTime;
}
