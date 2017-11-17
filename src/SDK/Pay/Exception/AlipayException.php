<?php
declare(strict_types=1);
/**
 * PHP version 5.5
 *
 * @copyright  Copyright (c) 2012-2015 EELLY Inc. (http://www.eelly.com)
 * @link       http://www.eelly.com
 * @license    衣联网版权所有
 */


namespace Eelly\SDK\Pay\Exception;


use Eelly\Exception\LogicException;

class AlipayException extends LogicException
{
    public const ACCOUNT_NOT_EXIT = '账号不存在';

    public const CALL_PARAMETER_ERROR = '支付宝回调出错';
}