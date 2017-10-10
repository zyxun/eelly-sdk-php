<?php
/**
 * PHP version 7.1
 *
 * @copyright  Copyright (c) 2012-2015 EELLY Inc. (http://www.eelly.com)
 * @link       http://www.eelly.com
 * @license    衣联网版权所有
 */


namespace Eelly\SDK\Contact\Exception;


use Eelly\Exception\LogicException;

/**
 * 联系人错误参数.
 *
 * @author 肖俊明<xiaojunming@eelly.net>
 * @since  2017年09月29日
 */
class ContactException extends LogicException
{
    public const DUPLICATE_EVENT = '标签已存在';
}