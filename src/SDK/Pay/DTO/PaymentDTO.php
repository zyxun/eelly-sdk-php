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

class PaymentDTO extends AbstractDTO
{
    /**
     * 支付交易ID，自增主键
     *
     * @var int
     */
    public $ppId;

    /**
     * 会员帐户ID
     *
     * @var int
     */
    public $paId;

    /**
     * 支付类型：1 订单支付 2 购买服务
     *
     * @var int
     */
    public $type;

    /**
     * 关联对象ID：如订单ID、购买服务记录ID等
     *
     * @var int
     */
    public $itemId;

    /**
     * 衣联交易号
     *
     * @var string
     */
    public $billNo;

    /**
     * 支付金额：单位为分
     *
     * @var int
     */
    public $money;

    /**
     * 支付批次：pay_recharge->prec_id，合并支付交易批次相同，纯余额支付为0
     *
     * @var int
     */
    public $precId;

    /**
     * 处理状态：0 待处理 1 成功 2 处理中 3 失败
     *
     * @var int
     */
    public $status;

    /**
     * 对帐状态：0 未对帐 1 对帐成功 2 对帐中 3 对帐失败
     *
     * @var int
     */
    public $checkStatus;

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

    /**
     * 修改时间
     *
     * @var unknown
     */
    public $updateTime;
}