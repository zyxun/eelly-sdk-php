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
 * 发起交易报错类.
 *
 * @author 肖俊明<xiaojunming@eelly.net>
 * @since  2017年09月21日
 */
class ApplyException extends LogicException
{
    /**
     *错误信息.
     */
    public const PARAMETER_ERROR = '参数有误';
    /**
     *无权限
     */
    public const REQUEST_FORBIDDEN = '未登录';

    /**
     *无权限
     */
    public const REQUEST_FORBIDDEN_ERROR = '无权操作';

    /**
     *数据未找到
     */
    public const DATA_NOT_FOUND = '数据未找到';

    /**
     * 类不存在
     */
    public const CLASS_NOT_FOUND = '类不存在';
}