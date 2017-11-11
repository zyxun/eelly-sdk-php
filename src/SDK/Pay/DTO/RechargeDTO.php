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

class RechargeDTO extends AbstractDTO
{
    /**
     * 充值交易ID，自增主键
     *
     * @var int
     */
    public $precId;

    /**
     * 会员帐户ID
     *
     * @var int
     */
    public $paId;

    /**
     * 充值金额：单位为分
     *
     * @var int
     */
    public $money;

    /**
     * 已退款金额：单位为分
     *
     * @var int
     */
    public $refundMoney;

    /**
     * 充值渠道：0 线下 1 支付宝 2 微信钱包 3 QQ钱包 4 银联 5 移动支付
     *
     * @var int
     */
    public $channel;

    /**
     * 充值方式：0 未知 1 储蓄卡 2 信用卡 3 余额充值
     *
     * @var int
     */
    public $style;

    /**
     * 充值银行ID：el_system->system_bank->bank_id
     *
     * @var int
     */
    public $bankId;

    /**
     * 充值银行名称（冗余）
     *
     * @var string
     */
    public $bankName;

    /**
     * 充值帐号：支付宝账号/微信绑定open_id/QQ
     *
     * @var string
     */
    public $bankAccount;

    /**
     * 衣联交易号
     *
     * @var string
     */
    public $billNo;

    /**
     * 第三方交易号(支付宝/微信/银联)
     *
     * @var string
     */
    public $thirdNo;

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
     * 系统及管理备注，不需要给用户看的
     *
     * @var string
     */
    public $adminRemark;

    /**
     * 处理时间
     *
     * @var int
     */
    public $handleTime;

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