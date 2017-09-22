<?php

declare(strict_types=1);
/**
 * PHP version 7.1+
 *
 * @copyright  Copyright (c) 2012-2015 EELLY Inc. (http://www.eelly.com)
 * @link       http://www.eelly.com
 * @license    衣联网版权所有
 */


namespace Eelly\SDK\Pay\DTO;

use Eelly\DTO\AbstractDTO;


class ApplyDTO extends AbstractDTO
{
    /**
     * 交易申请ID，自增主键
     *
     * @var int
     */
    public $paId;

    /**
     * 户用ID
     *
     * @var int
     */
    public $userId;

    /**
     * 店铺ID
     *
     * @var int
     */
    public $storeId;

    /**
     * 金额
     *
     * @var int
     */
    public $money;

    /**
     * 已退款金额
     *
     * @var int
     */
    public $returnMoney;

    /**
     * 操作类型：1 充值 2 提现 3 消费支付(衣联帐户) 4 结算货款(衣联帐户) 5 退款
     *
     * @var int
     */
    public $type;

    /**
     * 类型渠道：0 线下 1 支付宝 2 微信钱包 3 QQ钱包 4 衣联帐户 5 银联 6 移动支付
     *
     * @var int
     */
    public $channel;

    /**
     * 支付方式：0 未知 1 储蓄卡 2 信用卡 3 余额支付 4 扫码支付
     *
     * @var int
     */
    public $style;

    /**
     * 交易申请银行信息ID
     *
     * @var int
     */
    public $pabId;

    /**
     * 支付宝账号/微信绑定open_id/QQ
     *
     * @var string
     */
    public $payAccount;

    /**
     * 交易批次：同一笔支付的充值和支付批次相同
     *
     * @var int
     */
    public $batchNumber;

    /**
     * 在线支付银行类型代码
     *
     * @var string
     */
    public $bankCode;

    /**
     * 在线支付交易号
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
     * 处理状态：0 未处理 1 成功 2 等待系统处理 3 失败
     *
     * @var int
     */
    public $payStatus;

    /**
     * 业务操作备注
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
     * 开户银行所在地区ID
     *
     * @var int
     */
    public $gbCode;

    /**
     * 开户银行ID：el_config->bank->bank_id
     *
     * @var int
     */
    public $bankId;

    /**
     * 支行名称
     *
     * @var string
     */
    public $bankSubbranch;

    /**
     * 银行账号
     *
     * @var string
     */
    public $bankAccount;
}