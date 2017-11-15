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

namespace Eelly\SDK\Activity\Exception;

use Eelly\Exception\LogicException;

class ActivityException extends LogicException
{
    public const PARAMETER_EMPTY = '参数有误';

    public const CLASS_NO_EXIST = '类不存在';

    public const DATA_NOT_EXIST = '数据不存在';
}
