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

namespace Eelly\SDK\Elastic\Exception;

use Eelly\Exception\LogicException;

class ElasticException extends LogicException
{
    public const TYPE_CREATE_FAIL = '索引类型创建失败';

    public const INDEX_NOT_EXIST = '索引不存在';

    public const TYPE_NOT_EXIST = '索引类型不存在';

    public const TYPE_ALREADY_EXIST = '索引类型已存在';
}
