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

namespace Eelly\SDK\Goods\Exception;

use Eelly\Exception\LogicException;

/**
 * 询价商品报价异常类.
 *
 * @author wechan<liweiquan@eelly.net>
 *
 * @since 2018年01月03日
 */
class EnquiryUserException extends LogicException
{
    public const TYPE_ERROR = '类型有误';
}
