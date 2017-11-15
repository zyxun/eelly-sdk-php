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
}