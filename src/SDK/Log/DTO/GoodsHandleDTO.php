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

namespace Eelly\SDK\Log\DTO;

use Eelly\DTO\AbstractDTO;

class GoodsHandleDTO extends AbstractDTO
{
    /**
     * 商品操作ID，自增主键.
     *
     * @var int
     */
    public $lghId;

    /**
     * 操作类型：1 禁售 2 需优化 3 商品上架 4 违规处罚 …….
     *
     * @var int
     */
    public $type;

    /**
     * 商品ID.
     *
     * @var int
     */
    public $goodsId;

    /**
     * 商品名称.
     *
     * @var string
     */
    public $name;

    /**
     * 管理员ID.
     *
     * @var int
     */
    public $adminId;

    /**
     * 管理员名称.
     *
     * @var string
     */
    public $adminName;

    /**
     * 备注.
     *
     * @var string
     */
    public $remark;

    /**
     * 投诉举报时间.
     *
     * @var string
     */
    public $createdTime;
}
