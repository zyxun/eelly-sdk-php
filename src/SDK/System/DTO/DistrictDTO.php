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
 * Class DistrictDTO.
 */
class DistrictDTO extends AbstractDTO
{
    /**
     * 商圈ID.
     *
     * @var int
     */
    public $districtId;

    /**
     * 区域ID.
     *
     * @var int
     */
    public $gbCode;

    /**
     * 商圈名称.
     *
     * @var string
     */
    public $districtName;

    /**
     * 商圈logo.
     *
     * @var string
     */
    public $logo;

    /**
     * 商圈描述.
     *
     * @var string
     */
    public $remark;

    /**
     * 管理员ID.
     *
     * @var int
     */
    public $adminId;

    /**
     * 管理员名字.
     *
     * @var string
     */
    public $adminName;

    /**
     * 排序.
     *
     * @var int
     */
    public $sort;

    /**
     * 创建时间.
     *
     * @var int
     */
    public $createdTime;
}
