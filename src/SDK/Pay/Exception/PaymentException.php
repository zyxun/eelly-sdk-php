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
 * @since  2017年11月13日
 *
 * @version 1.0
 */
class PaymentException extends LogicException
{

    /**
     * 支付交易处理状态失败
     */
    public const UPDATE_DATA_STATUS_FAIL = '支付交易处理状态失败';

    /**
     * 账号扣款失败
     */
    public const REDUCE_PAY_ACCOUNT_FAIL = '账号扣款失败';

    /**
     * 会员资金账号不存在
     */
    public const ACCOUNT_DATA_NOT_FOUND = '会员资金账号不存在';

    /**
     *
     */
    public const ACCOUNT_DATA_MONEY_ENOUGH = '会员资金余额充足，请选用余额支付或纯第三方支付方式';


    public const NO_FIND_THIRD_PAY_EXIT = '未发现第三方支付记录';

    /**
     * 退款金额大于下单金额
     */
    public const REFUND_MONEY_THAN_PAYMENT_MONEY = '退款金额大于下单金额';
    
    public const MONEY_ERROR = '金额有误';
    
}