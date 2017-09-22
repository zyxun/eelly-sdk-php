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

namespace Eelly\SDK\Store\DTO;

use Eelly\DTO\AbstractDTO;

/**
 * WeightItemDTO.
 *
 * @author wangjiang<wangjiang@eelly.net>
 */
class WeightItemDTO extends AbstractDTO
{
    /**
     * 权重项id.
     *
     * @var int
     */
    public $itemId;

    /**
     * 权重项名称.
     *
     * @var string
     */
    public $itemName;

    /**
     * 权重项基数分(正为加分项,负为扣分项).
     *
     * @var int
     */
    public $itemScore;

    /**
     * 排序.
     *
     * @var int
     */
    public $sort;

    /**
     * 状态 0 禁用 1 正常 4 删除.
     *
     * @var int
     */
    public $status;

    /**
     * 备注.
     *
     * @var string
     */
    public $remark;
}
