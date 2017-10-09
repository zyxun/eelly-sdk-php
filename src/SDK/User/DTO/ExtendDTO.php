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

/**
 * ExtendDTO.
 *
 * @author zhangzeqiang<zhangzeqiang@eelly.net>
 */
class ExtendDTO extends AbstractDTO
{
    /**
     * 用户ID.
     *
     * @var int
     */
    public $userId;

    /**
     * 真实姓名.
     *
     * @var string
     */
    public $realname;

    /**
     * 性别：0 未知 1 男 2 女.
     *
     * @var int
     */
    public $gender;

    /**
     * 出生日期
     *
     * @var int
     */
    public $birthday;

    /**
     * 地区编码：：el_config->region_gb->gb_code.
     *
     * @var int
     */
    public $gbCode;

    /**
     * 详细地址（暂时保留）.
     *
     * @var string
     */
    public $address;

    /**
     * 绑定邮箱.
     *
     * @var string
     */
    public $email;

    /**
     * 注册时间.
     *
     * @var int
     */
    public $regTime;

    /**
     * 注册IP.
     *
     * @var string
     */
    public $regIp;

    /**
     * 注册渠道：0 商城注册 1 APP注册 2 WAP注册.
     *
     * @var int
     */
    public $regChannel;

    /**
     * 注册方式：0 未知 1 手机 2 邮箱 3 QQ绑定 4 微信 可增加.
     *
     * @var int
     */
    public $regType;

    /**
     * 推荐的用户ID：0 默认.
     *
     * @var int
     */
    public $regFromUserId;

    /**
     * 用户标识：1 绑定手机 2 绑定邮箱 4 设置密保 8 实名认证 16 用户身份 32 刷单用户.
     *
     * @var int
     */
    public $flag;

    /**
     * 添加时间.
     *
     * @var int
     */
    public $createdTime;

    /**
     * 修改时间.
     *
     * @var unknown
     */
    public $updateTime;

}
