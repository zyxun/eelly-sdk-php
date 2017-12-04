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

namespace Eelly\SDK\Order\Exception;

use Eelly\Exception\LogicException;

/**
 * EvaluationGoods模块异常类.
 *
 * @author zhangzeqiang<zhangzeqiang@eelly.net>
 *
 * @since  2017年11月29日
 */
class EvaluationGoodsException extends LogicException
{
    public const PARAMETER_ERROR = '参数有误';

    public const DATA_NOT_EXIT = '记录不存在';

    public const DATA_INSERT_FAIL = '插入失败';

    public const DATA_UPDATE_FAIL = '更新失败';

    public const DATA_DELETE_FAIL = '删除失败';

    public const DATA_ALREADER_EXIT = '该数据已经存在';

    public const NO_PERMISSIONS = '没有该权限操作';

    public const PARAMETER_EMPTY = '参数不能为空';
}
