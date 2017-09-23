<?php

declare(strict_types=1);
/**
 * PHP version 7.1
 *
 * @copyright  Copyright (c) 2012-2015 EELLY Inc. (http://www.eelly.com)
 * @link       http://www.eelly.com
 * @license    衣联网版权所有
 */


namespace Eelly\SDK\Pay\Exception;


use Eelly\Exception\LogicException;

/**
 * 会员资金账户报错.
 *
 * @author 肖俊明<xiaojunming@eelly.net>
 * @since  2017年09月21日
 */
class AccountException extends LogicException
{
    /**
     *错误信息.
     */
    public const PARAMETER_ERROR = '参数有误';

    /**
     * 权限不够
     */
    public const REQUEST_FORBIDDEN = '无权操作';
}