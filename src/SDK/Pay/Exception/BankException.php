<?php
declare(strict_types=1);
/**
 * PHP version 7.1+
 *
 * @copyright  Copyright (c) 2012-2015 EELLY Inc. (http://www.eelly.com)
 * @link       http://www.eelly.com
 * @license    衣联网版权所有
 */


namespace Eelly\SDK\Pay\Exception;


use Eelly\Exception\LogicException;

/**
 * 支付模块的支付方式.
 *
 * @author 肖俊明<xiaojunming@eelly.net>
 * @since  2017年09月15日
 * @version 1.0
 */
class BankException extends LogicException
{
    /**
     *错误信息
     */
    public const PARAMETER_ERROR = '参数有误';
    /**
     * 权限不够
     */
    public const REQUEST_FORBIDDEN = '无权操作';

    /**
     * 重复的事件
     */
    public const DUPLICATE_EVENT = '账户已经存在该卡号';

    /**
     * 账户不存在
     */
    public const SERVER_ACCOUNT_ERROR = '银行信息不存在';
}