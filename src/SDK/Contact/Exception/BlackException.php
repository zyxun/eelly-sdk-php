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
 * BlackException.
 *
 * @author 肖俊明<xiaojunming@eelly.net>
 *
 * @since  2017年10月28日
 */
class BlackException extends LogicException
{
    /**
     * 数据存在.
     */
    public const DATA_ALREADER_EXIT = '该数据已经存在黑名单中';
}
