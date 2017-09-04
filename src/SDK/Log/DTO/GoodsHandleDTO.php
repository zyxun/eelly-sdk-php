<?php

declare(strict_types=1);
/**
 * PHP version 7.1
 *
 * @copyright  Copyright (c) 2012-2015 EELLY Inc. (http://www.eelly.com)
 * @link       http://www.eelly.com
 * @license    衣联网版权所有
 */


namespace Eelly\SDK\Log\DTO;

use Eelly\DTO\AbstractDTO;

class GoodsHandleDTO extends AbstractDTO
{
    /**
     * 商品操作ID，自增主键
     *
     * @var int
     */
    public $lghId;

    /**
     * 操作类型：1 禁售 2 需优化 3 商品上架 4 违规处罚 ……
     *
     * @var int
     */
    public $type;

    /**
     * 商品ID
     *
     * @var int
     */
    public $goodsId;

    /**
     * 商品名称
     *
     * @var string
     */
    public $name;

    /**
     * 管理员ID
     *
     * @var int
     */
    public $adminId;

    /**
     * 管理员名称
     *
     * @var string
     */
    public $adminName;

    /**
     * 备注
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