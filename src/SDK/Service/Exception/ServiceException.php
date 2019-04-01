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

class ServiceException extends LogicException
{
    public const MONEY_ERROR = '金额有误';
    
    public const MONEY_INTEGRITY_ERROR = '保证金金额不足';
    
    public const SERVICE_NOT_PAY = '服务支付记录不存在';
}
