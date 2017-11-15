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
 * EntranceDTO.
 *
 * @author zhangzeqiang<zhangzeqiang@eelly.net>
 */
class EntranceDTO extends AbstractDTO
{
    /**
     * 快速入口ID，自增主键.
     *
     * @var int
     */
    public $ueId;

    /**
     * 店铺ID.
     *
     * @var int
     */
    public $userId;

    /**
     * 入口类型：0 买家后台 1 卖家后台.
     *
     * @var int
     */
    public $type;

    /**
     * 快速入口.
     *
     * @var string
     */
    public $entrance;

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
