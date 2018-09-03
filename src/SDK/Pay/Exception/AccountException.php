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
 * 会员资金账户报错.
 *
 * @author 肖俊明<xiaojunming@eelly.net>
 *
 * @since  2017年09月21日
 */
class AccountException extends LogicException
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
     * 请求超时
     */
    public const REQUEST_TIME_OUT = '请求超时';

    /**
     * 金额不足
     */
    public const MONEY_NOT_ENOUGH = '金额不足';

    /**
     * 会员核心交易数据插入失败
     */
    public const RECORD_INSERT_ERROR = '会员核心交易数据插入失败';

    /**
     * 账号不存在
     */
    public const ACCOUNT_NOT_EXIST = '账号不存在';

    /**
     * 还未进行实名认证
     */
    public const NOT_VERIFIED = '还未进行实名认证';

    /**
     * 未设置支付密码
     */
    public const NOT_SET_PAY_PASSWORD = '未设置支付密码';

    /**
     * 账号更新数据失败
     */
    public const ACCOUNT_UPDATE_FAIL = '账号更新数据失败';

    /**
     * 申请提现数据插入失败
     */
    public const PAY_WITHDRAW_INSERT_FAIL = '申请提现数据插入失败';

    /**
     * 支付密码错误
     */
    public const PAY_PASSWORD_FAIL = '支付密码错误';
}
