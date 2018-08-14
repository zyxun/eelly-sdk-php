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
 * Order模块异常类.
 *
 * @author wangjiang<wangjiang@eelly.net>
 *
 * @since 2017-09-19
 */
class OrderException extends LogicException
{
    public const PARAMETER_ERROR = '参数有误';

    public const DATA_NOT_EXIT = '记录不存在';

    public const DATA_INSERT_FAIL = '插入失败';

    public const DATA_UPDATE_FAIL = '更新失败';

    public const DATA_DELETE_FAIL = '删除失败';

    public const DATA_ALREADER_EXIT = '该数据已经存在';

    public const NO_PERMISSIONS = '没有该权限操作';

    public const PARAMETER_EMPTY = '参数不能为空';

    public const MAX_RETURN_MONEY = '退款金额不可以大于订单金额';

    public const STATUS_NOT_OPERATE = '订单当前状态不可操作';
    
    public const CART_OVER_LIMIT = '进货车商品数量超出限制';
}
