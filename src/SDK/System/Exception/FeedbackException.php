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

namespace Eelly\SDK\System\Exception;

use Eelly\Exception\LogicException;

/**
 * Feedback模块异常类.
 *
 * @author zhangzeqiang<zhangzeqiang@eelly.net>
 *
 * @since 2017-09-05
 */
class FeedbackException extends LogicException
{
    public const DATA_LOG_TIME_OUT_RANGE = [
        'STATUS_CODE' => 701,
        'ERR_CODE'    => 701001,
        'FRIEND_MSG'  => '您搜索时间大于或等于一个月，请指定在一个月内进行搜索！',
        'ERR_MSG'     => '您搜索时间大于或等于一个月，请指定在一个月内进行搜索！',
    ];

    public function __construct(string $message, int $code, int $errCode, \Exception $previous = null)
    {
        $message = $message."[$errCode]";
        parent::__construct($message, $context = null, $code, $previous = null);
    }
}
