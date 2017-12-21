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

class BuyException extends LogicException
{
    public const WAIT_CHECK_CERTIFICATION = '请等待认证审核完毕后再进行够买服务';

    public const ADD_CERTIFICATION_FAIL   = '认证关联失败,请稍候再试';
}
