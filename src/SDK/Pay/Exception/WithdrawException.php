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
}