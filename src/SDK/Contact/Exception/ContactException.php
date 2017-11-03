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

namespace Eelly\SDK\Contact\Exception;

use Eelly\Exception\LogicException;

/**
 * 联系人错误参数.
 *
 * @author 肖俊明<xiaojunming@eelly.net>
 *
 * @since  2017年09月29日
 */
class ContactException extends LogicException
{
    public const DUPLICATE_EVENT = '标签已存在';
}
