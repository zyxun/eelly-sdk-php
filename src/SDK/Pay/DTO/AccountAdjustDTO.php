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

namespace Eelly\SDK\Pay\DTO;

use Eelly\DTO\AbstractDTO;

class AccountAdjustDTO extends AbstractDTO
{
    /**
     * 账户日资金核算主键id，自增主键
     *
     * @var int
     */
    public $paaId;

    /**
     * 账户id
     *
     * @var int
     */
    public $paId;

    /**
     * 帐户金额
     *
     * @var int
     */
    public $accountMoney;

    /**
     * 帐户变更金额汇总
     *
     * @var int
     */
    public $changeMoney;

    /**
     * 比较结果：0 未比较 1 平衡 2 不平衡
     *
     * @var int
     */
    public $status;

    /**
     * 备注
     *
     * @var string
     */
    public $remark;

    /**
     * 添加时间
     *
     * @var int
     */
    public $createdTime;
    
}
