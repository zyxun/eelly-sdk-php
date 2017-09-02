<?php

declare(strict_types=1);
/**
 * PHP version 7.1
 *
 * @copyright  Copyright (c) 2012-2015 EELLY Inc. (http://www.eelly.com)
 * @link       http://www.eelly.com
 * @license    衣联网版权所有
 */


namespace Eelly\SDK\Log\Exception;


use Eelly\Exception\LogicException;

class GoodsHandleException extends LogicException
{
    public const PARAMETER_ERROR = '参数有误';
}