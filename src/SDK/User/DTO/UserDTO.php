<?php
declare(strict_types=1);
/**
 * PHP version 5.5
 *
 * @copyright  Copyright (c) 2012-2015 EELLY Inc. (http://www.eelly.com)
 * @link       http://www.eelly.com
 * @license    衣联网版权所有
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
     * 用户帐号
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