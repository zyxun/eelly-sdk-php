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
 * @author 肖俊明<xiaojunming@eelly.net>
 *
 * @since  2017年09月20日
 *
 * @version 1.0
 */
class RecordException extends LogicException
{
    /**
     *错误信息.
     */
    public const PARAMETER_ERROR = '参数有误';
}
