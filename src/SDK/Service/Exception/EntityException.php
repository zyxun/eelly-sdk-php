<?php

declare(strict_types=1);

/*
 * This file is part of eelly package.
 *
 * (c) eelly.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Eelly\SDK\Service\Exception;

use Eelly\Exception\LogicException;

class EntityException extends LogicException
{
    public function __construct(string $message, int $code, \Exception $previous = null)
    {
        parent::__construct($message, $context = null, $code, $previous = null);
    }
}
