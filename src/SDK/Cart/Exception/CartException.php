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

namespace Eelly\SDK\Cart\Exception;

use Eelly\Exception\LogicException;

/**
 * @author hehui<hehui@eelly.net>
 */
class CartException extends LogicException
{

    public const DATA_MAX_COUNT = '已达到最大数量';
}
