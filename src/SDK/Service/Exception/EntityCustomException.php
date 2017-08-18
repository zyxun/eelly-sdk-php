<?php
/**
 * Created by PhpStorm.
 * @author liangxinyi<liangxinyi@eelly.net>
 * Date: 2017/7/15
 * Time: 11:54
 */
declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Service\Exception;


use Eelly\Exception\LogicException;

class EntityCustomException extends LogicException {
//
    public function __construct(string $message, int $code, \Exception $previous = null)
    {
        parent::__construct($message, $context = null, $code, $previous = null);
    }




}