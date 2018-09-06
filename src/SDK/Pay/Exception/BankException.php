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
 * 支付模块的支付方式.
 *
 * @author 肖俊明<xiaojunming@eelly.net>
 *
 * @since  2017年09月15日
 *
 * @version 1.0
 */
class BankException extends LogicException
{
    /**
     *错误信息.
     */
    public const PARAMETER_ERROR = '参数有误';
    /**
     * 权限不够
     */
    public const REQUEST_FORBIDDEN = '无权操作';

    /**
     * 重复的事件.
     */
    public const DUPLICATE_EVENT = '账户已经存在该卡号';

    /**
     * 账户不存在.
     */
    public const SERVER_ACCOUNT_ERROR = '银行信息不存在';

    /**
     * 交易号生成失败
     */
    public const GENERATE_BILLNO_ERROR = '交易号生成失败';

    /**
     * 微信钱包已被绑定
     */
    public const WECHAT_PURSE_EXIST = '微信钱包已被绑定';

    /**
     * 绑定微信钱包失败
     */
    public const SAVE_WECHAT_PURSE_FAIL = '绑定微信钱包失败';

    /**
     * 微信钱包信息不存在
     */
    public const WECHAT_PURSE_NOT_EXIST = '微信钱包信息不存在';

    /**
     * 添加银行卡错误
     */
    public const ADD_BANK_ERROR = '添加银行卡错误';

    /**
     * 更新银行卡信息错误
     */
    public const UPDATE_BANK_ERROR = '更新银行卡信息错误';

    /**
     * 设置默认银行卡错误
     */
    public const SET_DEFAULT_ERROR = '设置默认银行卡错误';

    /**
     * 银行账号信息不存在
     */
    public const PAY_BANK_NOT_EXIST = '银行账号信息不存在';

    /**
     * 解绑银行卡失败
     */
    public const UNTIED_PAY_BANK_FAIL = '解绑银行卡失败';
}
