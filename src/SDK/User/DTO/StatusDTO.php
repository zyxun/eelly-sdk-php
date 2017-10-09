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
 * StatusDTO.
 *
 * @author zhangzeqiang<zhangzeqiang@eelly.net>
 */
class StatusDTO extends AbstractDTO
{
    /**
     * 用户ID.
     *
     * @var int
     */
    public $userId;

    /**
     * 上次登录时间.
     *
     * @var int
     */
    public $lastLogin;

    /**
     * 上次登录IP.
     *
     * @var string
     */
    public $lastIp;

    /**
     * 上次充值时间.
     *
     * @var int
     */
    public $lastCharge;

    /**
     * 上次提现时间.
     *
     * @var int
     */
    public $lastDraw;

    /**
     * 上次下单时间.
     *
     * @var int
     */
    public $lastOrder;

    /**
     * 上次求货时间.
     *
     * @var int
     */
    public $lastForGoods;

    /**
     * 上次评论时间.
     *
     * @var int
     */
    public $lastComment;

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
