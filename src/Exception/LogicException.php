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

namespace Eelly\Exception;

use Throwable;

/**
 * 逻辑异常.
 *
 * @author hehui<hehui@eelly.net>
 */
class LogicException extends \LogicException
{
    /**
     * @var array
     */
    private $context;

    /**
     * @param string    $message  错误信息
     * @param array     $context  上下文细信息
     * @param int       $code     错误编号
     * @param Throwable $previous 上级异常
     */
    public function __construct(string $message = '', array $context = null, $code = null, Throwable $previous = null)
    {
        parent::__construct($message, (int) $code, $previous);
        // default context
        if (null === $context) {
            $context = [
                'code' => $this->getCode(),
                'line' => $this->getLine(),
                'file' => $this->getFile(),
            ];
        }
        $this->context = $context;
    }

    /**
     * 获取上下文信息.
     *
     * @return array
     */
    public function getContext()
    {
        return $this->context;
    }
}
