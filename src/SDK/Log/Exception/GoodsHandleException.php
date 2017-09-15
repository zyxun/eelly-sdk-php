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

namespace Eelly\SDK\Log\Exception;

use Eelly\Exception\LogicException;

class GoodsHandleException extends LogicException
{
    public const PARAMETER_ERROR = '参数有误';
}
