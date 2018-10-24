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
 * @since  2017年11月15日
 *
 * @version 1.0
 */
class CallbackException extends LogicException
{
    /**
     *错误信息.
     */
    public const UPDATE_ACCOUNT_FAIL = '更新会员资金失败';

    /**
     * 衣联交易号对应数据找不到.
     */
    public const BILL_NO_DATA_NOT_FOUNT = '衣联交易号对应数据找不到';

    /**
     * 支付类型错误
     */
    public const CHANNEL_TYPE_NOT_EXIT = '支付类型错误';

    /**
     * 回调的交易金额错误
     */
    public const BILL_RECORD_MONEY_ERROR = '回调的交易金额错误';
    
    /**
     * 回调的交易金额错误
     */
    public const PAY_RECHARGE_REL_ERROR = '充值用途类型错误';
}
