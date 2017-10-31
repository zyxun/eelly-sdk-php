<?php
declare(strict_types=1);
/**
 * PHP version 5.5
 *
 * @copyright  Copyright (c) 2012-2015 EELLY Inc. (http://www.eelly.com)
 * @link       http://www.eelly.com
 * @license    衣联网版权所有
 */


namespace Eelly\SDK\Contact\Exception;


use Eelly\Exception\LogicException;

/**
 * BlackException.
 *
 * @author 肖俊明<xiaojunming@eelly.net>
 * @since  2017年10月28日
 */
class BlackException extends LogicException
{
    /**
     * 数据存在
     */
    public const DATA_ALREADER_EXIT = '该数据已经存在黑名单中';
}