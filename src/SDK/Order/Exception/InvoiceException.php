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

namespace Eelly\SDK\Order\Exception;

use Eelly\Exception\LogicException;

/**
 * Order模块异常类.
 *
 * @author wangjiang<wangjiang@eelly.net>
 *
 * @since 2017-09-19
 */
class InvoiceException extends LogicException
{

    public const NO_PERMISSIONS = '没有该权限操作';

    public const PARAMETER_EMPTY = '参数不能为空';

    public const INVOICE_NO_NOT_EXIT = '物流为空';
}
