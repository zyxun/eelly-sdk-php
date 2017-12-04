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

namespace Eelly\SDK\Message\Exception;

use Eelly\Exception\LogicException;

/**
 * @author zhangzeqiang<zhangzeqiang@eelly.net>
 */
class SiteException extends LogicException
{
    public const PARAMETER_ERROR = '参数有误';

    public const DATA_NOT_EXIT = '记录不存在';

    public const DATA_INSERT_FAIL = '插入失败';

    public const DATA_UPDATE_FAIL = '更新失败';

    public const DATA_DELETE_FAIL = '删除失败';

    public const DATA_ALREADER_EXIT = '该数据已经存在';

    public const  NO_PERMISSIONS = '没有该权限操作';

    public const TEMPLATE_NO_START = '模板还没启用，请先启用';

    public const GROUP_NAME_NO_EXIT = '不存在的分组名';

    public const TEMPLATE_NO_FOUND = '模板不存在';
}
