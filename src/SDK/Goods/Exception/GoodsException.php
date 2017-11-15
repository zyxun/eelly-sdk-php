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
 * Goods模块异常类.
 *
 * @author wangjiang<wangjiang@eelly.net>
 *
 * @since 2017-08-08
 */
class GoodsException extends LogicException
{
    public const DATA_EXCEPTION = '数据异常';
}
