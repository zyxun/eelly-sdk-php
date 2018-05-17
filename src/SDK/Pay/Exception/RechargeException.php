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
 * 充值交易流水.
 *
 * @author 张泽强 <zhangzeqiang@eelly.net>
 *
 * @since  2017年11月10日
 *
 * @version 1.0
 */
class RechargeException extends LogicException
{
    /**
     *错误信息.
     */
    public const DATA_BILLNO_EXIST = '交易流水号已存在';

    /**
     * 支付交易处理状态失败
     */
    public const UPDATE_DATA_STATUS_FAIL = '更新支付交易处理状态失败';

    /**
     * 更新payment表的prec_id
     */
    public const UPDATE_PAYMENT_PREC_FAIL = '更新支付交易充值失败';

    /**
     * 会员资金账号不存在
     */
    public const ACCOUNT_DATA_NOT_FOUND = '会员资金账号不存在';

    public const NOLY_SUPPORT_TYPE = '目前只支持微信小程序自动退款';

    public const MAX_RETURN_MONEY = '退款金额已经超过支付金额';
}