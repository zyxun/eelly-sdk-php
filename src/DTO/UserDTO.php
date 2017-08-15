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

/**
 * Class UserDTO.
 */
class UserDTO extends AbstractDTO
{
    /**
     * 用户id.
     *
     * @var int
     */
    public $userId;

    /**
     * 用户名.
     *
     * @var string
     */
    public $username;

    /**
     * 手机号.
     *
     * @var string
     */
    public $mobile;
}
