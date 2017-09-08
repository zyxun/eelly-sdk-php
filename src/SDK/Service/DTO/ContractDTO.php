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

class ContractDTO extends AbstractDTO
{

    /**
     * 合同id
     *
     * @var int
     */
    public $scId;

    /**
     * 服务对象：1 店+(下游买家) 2 厂+(上游卖家)
     *
     * @var int
     */
    public $type;

    /**
     * 版本名称
     *
     * @var string
     */
    public $name;

    /**
     * 合同期限：表示N个月，大于0
     *
     * @var int
     */
    public $timeLimit;

    /**
     * 收费金额，单位为分
     *
     * @var int
     */
    public $money;

    /**
     * 折扣：0<=X<=1，0和1都表示无折扣
     *
     * @var int
     */
    public $discount;

    /**
     * 服务集合：格式 sl_id,sl_id
     *
     * @var string
     */
    public $serviceIds;

    /**
     * 状态：0 未启用 1 前后台启用显示 2 只后台启用显示
     *
     * @var int
     */
    public $status;

    /**
     * 合同编号前缀
     *
     * @var string
     */
    public $versionNo;

}
