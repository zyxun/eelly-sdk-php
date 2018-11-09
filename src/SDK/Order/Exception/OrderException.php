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
    
    public const CART_SPELLING_GOODS_ERROR = '团购商品不能加入购物车';
    
    public const DIFF_ORDER_USER = '订单的用户不相同，请分开支付!';
    
    public const ORDER_PAY_TYPE_ERROR = '订单支付类型错误';
    
    public const ORDER_GOODS_DATA_NOT_EXIT = '订单商品不存在';
    
    public const ADDRESS_DATA_NOT_EXIT = '收货地址不存在';
    
    public const FREIGHT_DATA_NOT_EXIT = '运费不存在';
    
    public const ORDER_DATA_NOT_EXIT = '订单数据不存在';
    
    public const ORDER_NOT_PAY = '订单还没支付';
    
    public const ORDER_GOODS_SPEC_NOT_FOUND = '订单商品规格不存在';
}
