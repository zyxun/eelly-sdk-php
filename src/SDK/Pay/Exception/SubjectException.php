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
 * 科目明细异常处理类
 *
 * @author wechan<liweiquan@eelly.net>
 *
 * @since  2017年11月08日
 */
class SubjectException extends LogicException
{
    public const SUBJECT_CODE_NOT_EXIT = '不存在的科目代码!';
}
