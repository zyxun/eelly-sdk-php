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

namespace Eelly\SDK\Pay\Exception;

use Eelly\Exception\LogicException;

/**
 * 错误类.
 *
 * @author 张泽强 <zhangzeqiang@eelly.net>
 *
 * @since  2017年11月11日
 *
 * @version 1.0
 */
class WithdrawException extends LogicException
{
    /**
     *错误信息.
     */
    public const PARAMETER_EXIST_BILLNO = '此交易号已存在';

    /**
     * status 值为1或2
     */
    public const DATA_STATUS_HANDLED = '提现已处理完毕或正在处理中,请勿重复提交';

    /**
     * 支付交易处理状态失败
     */
    public const UPDATE_DATA_STATUS_FAIL = '更新支付交易处理状态失败';

    /**
     * 会员资金账号不存在
     */
    public const ACCOUNT_DATA_NOT_FOUND = '会员资金账号不存在';

    /**
     * 申请交易账号不存在
     */
    public const PAY_WITHDRAW_NOT_EXIST = '申请交易账号不存在';

    /**
     * 进行重复状态的操作
     * 请勿重复进行操作
     */
    public const REPEAT_HANDLE_ACTION = '请勿重复进行操作';

    /**
     * 授权的微信账号数据不存在
     */
    public const WECHAT_PURSE_INFO_NOT_EXIST = '授权的微信账号数据不存在';

    /**
     * 提现账号和现有的账号不匹配
     */
    public const PAY_ACCOUNT_BANK_ACCOUNT_NOT_EQ = '提现账号和现有的账号不匹配';

    /**
     * 提现次数上限
     */
    public const MAXIMUM_NUMBER_OF_WITHDRAWALS = '提现次数上限';

    /**
     * 提现状态发现变更
     */
    public const PAY_WITHDRAW_STATUS_CHANGE = '提现状态已发生变更';

    /**
     * 保存请求数据错误
     */
    public const PAY_REQUEST_ERROR = '保存请求数据错误';

    /**
     * 保存回调数据错误
     */
    public const PAY_CALLBACK_ERROR = '保存回调数据错误';

    /**
     * 提现金额和冻结金额有误
     */
    public const PAY_WITHDRAW_MONEY_NOT_EQ = '提现金额和冻结金额有误';

    /**
     * 提现失败
     */
    public const PAY_WITHDRAW_ERROR = '提现失败';

    /**
     * 添加交易数据记录失败
     */
    public const ADD_RECORD_ERROR = '添加交易数据记录失败';


    /**
     * 添加账号资金变更记录失败
     */
    public const ADD_ACCOUNT_LOG = '添加账号资金变更记录失败';

    /**
     * 更新账号信息失败
     */
    public const PAY_UPDATE_ERROR = '更新账号信息失败';
}