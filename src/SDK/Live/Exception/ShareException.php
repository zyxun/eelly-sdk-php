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

namespace Eelly\SDK\Live\Exception;

use Eelly\Exception\LogicException;

/**
 * 直播异常类.
 *
 * @author wechan<liweiquan@eelly.net>
 *
 * @since  2018年01月24日
 */
class ShareException extends LogicException
{
    public const TIME_LIMITS = '时间范围错误';
    
    public const GATEWAY_ERROR = '入口错误';
}
