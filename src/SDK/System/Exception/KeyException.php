<?php
/**
 * Created by PhpStorm.
 *
 * @author liangxinyi<liangxinyi@eelly.net>
 * Date: 2017/7/15
 * Time: 11:54
 */
declare(strict_types=1);

/*
 * This file is part of eelly package.
 *
 * (c) eelly.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Eelly\SDK\System\Exception;

use Eelly\Exception\LogicException;

class KeyException extends LogicException
{
    public function __construct(string $message, int $code, \Exception $previous = null)
    {
        parent::__construct($message, $context = null, $code, $previous = null);
    }
}
