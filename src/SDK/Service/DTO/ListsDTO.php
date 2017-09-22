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

namespace Eelly\SDK\Service\DTO;

use Eelly\DTO\AbstractDTO;

class ListsDTO extends AbstractDTO
{
    /**
     * 服务清单ID.
     *
     * @var int
     */
    public $slId;

    /**
     * 服务ID.
     *
     * @var int
     */
    public $serviceId;

    /**
     * 收费金额，单位为分.
     *
     * @var int
     */
    public $money;

    /**
     * 数量设置：对应计数模式的数量，0为无限制.
     *
     * @var int
     */
    public $number;

    /**
     * 服务期限：表示N个月.
     *
     * @var int
     */
    public $timeLimit;

    /**
     * 折扣：0<=X<=1，0和1都表示无折扣.
     *
     * @var float
     */
    public $discount;

    /**
     * 服务状态：1 启用 2 停用 4 删除.
     *
     * @var int
     */
    public $status;

    /**
     * 赠送状态：1 启用 2 停用.
     *
     * @var int
     */
    public $isBestow;

    /**
     * 服务扩展字段：JSON格式，用于存放特殊数据.
     *
     * @var int
     */
    public $extField;
}
