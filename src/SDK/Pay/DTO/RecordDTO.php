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

class RecordDTO extends AbstractDTO
{
    /**
     * 交易ID，自增主键
     * @var
     */
    public $prId;

    /**
     * 帐户ID
     * @var
     */
    public $paId;

    /**
     * 操作类型：1 充值 2 提现 3 消费 4 结算 5 退款 6 诚保冻结 7 诚保解冻
     * @var
     */
    public $type;

    /**
     * 关联ID
     * @var
     */
    public $itemId;

    /**
     * 衣联交易号
     * @var
     */
    public $billNo;

    /**
     * 成交金额：单位为分
     * @var
     */
    public $money;

    /**
     * 备注：JSON格式
     * @var
     */
    public $remark;

    /**
     * 添加时间
     * @var
     */
    public $createdTime;
}
