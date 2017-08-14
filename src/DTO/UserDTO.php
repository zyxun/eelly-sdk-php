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

namespace Eelly\DTO;

class UserDTO extends AbstractDTO
{
    /**
     * 用户ID，自增主键.
     *
     * @var int
     */
    public $user_id;

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
}
