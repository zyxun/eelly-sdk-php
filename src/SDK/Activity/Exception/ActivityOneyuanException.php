<?php
declare(strict_types=1);
/**
 * PHP version 5.5
 *
 * @copyright  Copyright (c) 2012-2015 EELLY Inc. (http://www.eelly.com)
 * @link       http://www.eelly.com
 * @license    衣联网版权所有
 */


namespace Eelly\SDK\Activity\Exception;


use Eelly\Exception\LogicException;

class ActivityOneyuanException extends LogicException
{
    /**
     *
     */
    public const ONEYUAN_BUYER_TIMES_BE_USE_UP = '1元购买的权利已经被用光';
}