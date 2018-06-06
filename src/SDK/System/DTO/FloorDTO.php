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

namespace Eelly\SDK\System\DTO;

use Eelly\DTO\AbstractDTO;

/**
 * Class FloorDTO.
 */
class FloorDTO extends AbstractDTO
{
    /**
     * 记录ID.
     *
     * @var int
     */
    public $floorId;

    /**
     * 所属市场id.
     *
     * @var int
     */
    public $marketId;

    /**
     * 楼层名称.
     *
     * @var string
     */
    public $floorName;

    /**
     * 楼层店铺数.
     *
     * @var int
     */
    public $floorStores;

    /**
     * 楼层服务
     *
     * @var string
     */
    public $floorServer;

    /**
     * 楼层主营.
     *
     * @var string
     */
    public $category;

    /**
     * 排序.
     *
     * @var int
     */
    public $sort;

    /**
     * 备注.
     *
     * @var string
     */
    public $remark;

    /**
     * 添加时间.
     *
     * @var int
     */
    public $createdTime;

    /**
     * 修改时间.
     *
     * @var string
     */
    public $updateTime;
}
