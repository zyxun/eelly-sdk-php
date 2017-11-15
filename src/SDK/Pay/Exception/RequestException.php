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
 * @since  2017年11月10日
 *
 * @version 1.0
 */
class RequestException extends LogicException
{
    /**
     *错误信息.
     */
    public const PARAMETER_EXIST_BILLNO = '此交易号已存在';
}