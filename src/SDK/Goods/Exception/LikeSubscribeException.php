<?php
declare(strict_types=1);
/**
 * PHP version 5.5
 *
 * @copyright  Copyright (c) 2012-2015 EELLY Inc. (http://www.eelly.com)
 * @link       http://www.eelly.com
 * @license    衣联网版权所有
 */


namespace Eelly\SDK\Goods\Exception;


use Eelly\Exception\LogicException;

/**
 * LikeSubscribeException.
 *
 * @author 肖俊明<xiaojunming@eelly.net>
 * @since  date
 */
class LikeSubscribeException extends LogicException
{
    /**
     *
     */
    public const DATA_SUBSCRIBE_EXIT = '您已经订阅过该商品';
}