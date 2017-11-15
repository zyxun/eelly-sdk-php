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

namespace Eelly\SDK\Contact\DTO;

use Eelly\DTO\AbstractDTO;

/**
 * 黑名单DTO.
 *
 * @author 肖俊明<xiaojunming@eelly.net>
 *
 * @since  2017年10月25日
 */
class BlackDTO extends AbstractDTO
{
    /**
     * 黑名单所有者用户ID.
     *
     * @var int
     */
    public $ownerId;

    /**
     * 黑名单用户ID.
     *
     * @var int
     */
    public $userId;

    /**
     * 系统来源：1 APP厂+ 2 APP店+ 3 CRM 4 APP云店.
     *
     * @var int
     */
    public $fromType;

    /**
     * 用户类型：1 厂+ 2 店+ 3 云店卖家 4 云店买家.
     *
     * @var int
     */
    public $userType;

    /**
     * 添加时间.
     *
     * @var int
     */
    public $createdTime;
}
