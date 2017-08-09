<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */
namespace Eelly\SDK\Store\Exception;

use Eelly\Exception\LogicException;

/**
 * Store模块异常类
 *
 * @author wangjiang<wangjiang@eelly.net>
 * @since 2017-08-08
 */
class StoreException extends LogicException
{
    const PARAMETER_ERROR = '参数有误';

    const DATA_NOT_EXIT = '记录不存在';

    const DATA_INSERT_FAIL = '插入失败';

    const DATA_UPDATE_FAIL = '更新失败';

    const DATA_DELETE_FAIL = '删除失败';

    const DATA_ALREADER_EXIT = '该数据已经存在';

    const NO_PERMISSIONS = '没有该权限操作';

    const PARAMETER_EMPTY = '参数不能为空';
}