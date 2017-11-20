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

/**
 * 支付宝第三方支付异常捕捉.
 *
 * @author 肖俊明<xiaojunming@eelly.net>
 * @since  2017年11月18日
 */
class AlipayException extends LogicException
{
    /**
     *账号不存在
     */
    public const ACCOUNT_NOT_EXIT = '账号不存在';

    /**
     *支付宝回调失败
     */
    public const CALL_PARAMETER_ERROR = '支付宝回调出错';
}