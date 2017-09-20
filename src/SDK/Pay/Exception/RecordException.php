<?php
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
 * 错误类.
 *
 * @author 肖俊明<xiaojunming@eelly.net>
 * @since  2017年09月20日
 * @version 1.0
 */
class RecordException extends LogicException
{
    /**
     *错误信息
     */
    public const PARAMETER_ERROR = '参数有误';
}