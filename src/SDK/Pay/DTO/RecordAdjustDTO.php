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

class RecordAdjustDTO extends AbstractDTO
{
    /**
     * 交易流水ID
     *
     * @var int
     */
    public $prId;

    /**
     * 衣联交易号
     *
     * @var string
     */
    public $billNo;

    /**
     * 操作类型：1 充值 2 提现 3 消费 4 结算 5 退款 6 诚保冻结 7 诚保解冻
     *
     * @var int
     */
    public $type;
    
    /**
     * 帐户变更金额
     *
     * @var int
     */
    public $changeMoney;

    /**
     * 凭证发生金额
     *
     * @var int
     */
    public $voucherMoney;

    /**
     * 清算金额：操作类型为1、2、5才需比较清算金额
     *
     * @var int
     */
    public $settlementMoney;

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
