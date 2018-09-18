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

use Order\Validation\CommonValidation;
use Eelly\Exception\LogicException;

/**
 * 退货退款异常.
 *
 * @author sunanzhi <sunanzhi@hotmail.com>
 * @since 2018.9.12
 */
class BuyerRefundException extends LogicException
{

    /**
     * 订单不存在
     */
    public const ORDER_NOT_EXIST = '订单不存在';

    /**
     * 订单没有权限
     */
    public const ORDER_NOT_PERMISSION = '订单没有权限';

    /**
     * 退款金额不能大于订单金额
     */
    public const RETURN_AMOUNT_THAN_ORDER_AMOUNT = '退款金额不能大于订单金额';

    /**
     * 订单已经完结
     */
    public const ORDER_END = '订单已经完结';

    /**
     * 订单不处于等待卖家发货中
     */
    public const ORDER_NOT_IN_PENDING_SHIP = '订单不处于等待卖家发货中';

    /**
     * 退款理由错误
     */
    public const ORDER_REMARK_ERROR = '退款理由错误';

    /**
     * 订单状态更新错误
     */
    public const ORDER_OS_ID_UPDATE_ERROR = '订单状态更新错误';

    /**
     * 添加订单日志错误
     */
    public const ADD_ORDER_LOG_ERROR = '添加订单日志错误';

    /**
     * 添加订单退货退款日志错误
     */
    public const ADD_ORDER_REFUND_LOG_ERROR = '添加订单退货退款日志错误';

    /**
     * 更新退货退款数据失败
     */
    public const ORDER_REFUND_UPDATE_ERROR = '更新退货退款数据失败';

    /**
     * 添加退货退款数据失败
     */
    public const ORDER_REFUND_ADD_ERROR = '添加退货退款数据失败';

    /**
     * 添加退货商品错误
     */
    public const ORDER_REFUND_GOODS_ADD_ERROR = '添加退货商品错误';

    /**
     * 删除退货商品错误
     */
    public const ORDER_REFUND_GOODS_DELETE_ERROR = '删除退货商品错误';

    /**
     * 订单未处于退货退款状态
     */
    public const ORDER_NOT_IN_REFUND = '订单未处于退货退款状态';

    /**
     * 订单退款数据不存在
     */
    public const ORDER_RETURN_AMOUNT_NOT_EXIST = '订单退款数据不存在';

    /**
     * 订单商品格式错误
     */
    public const ORDER_REFUND_GOODS_NOT_ARRAY = '订单商品格式错误';

    /**
     * 卖家还未发货
     */
    public const ORDER_NOT_SHIP = '卖家还未发货';

    /**
     * 卖家已发货
     */
    public const ORDER_SHIP = '卖家已发货';

    /**
     * 申请仲裁数据不存在
     */
    public const ARBITRATE_NOT_EXIST = '申请仲裁数据不存在';

    /**
     * 退货退款日志不存在
     */
    public const ORDER_REFUND_LOG_NOT_EXIST = '退货退款日志不存在';

    /**
     * 最新一条退货退款日志不存在
     */
    public const LAST_ORDER_REFUND_LOG_NOT_EXIST = '最新一条退货退款日志不存在';

    /**
     * 商品数据不存在
     */
    public const ORDER_REFUND_GOODS_NOT_EXIST = '商品数据不存在';

    /**
     * 订单状态日志不存在
     */
    public const ORDER_LOG_NOT_EXIST = '订单状态日志不存在';

    /**
     * 添加退货数据失败
     */
    public const ADD_ORDER_INVOICE_ERROR = '添加退货数据失败';

    /**
     * 店铺信息获取错误
     */
    public const STORE_INFO_ERROR = '店铺信息获取错误';

    /**
     * 退货信息不存在
     */
    public const ORDER_INVOICE_NOT_EXIST = '退货信息不存在';

    /**
     * 更新退货信息错误
     */
    public const ORDER_INVOICE_UPDATE_ERROR = '更新退货信息错误';

    /**
     * 订单仲裁状态错误
     */
    public const ORDER_ARBITRATE_STATUS_ERROR = '订单仲裁状态错误';

    /**
     * 添加仲裁数据失败
     */
    public const ADD_ORDER_ARBITRATE_ERROR = '添加仲裁数据失败';

    /**
     * 更新仲裁数据失败
     */
    public const UPDATE_ORDER_ARBITRATE_ERROR = '更新仲裁数据失败';

    /**
     * 添加仲裁日志错误
     */
    public const ADD_ORDER_ARBITRATE_LOG_ERROR = '添加仲裁日志错误';

    /**
     * 仲裁数据不存在
     */
    public const ORDER_ARBITRATE_NOT_EXIST = '仲裁数据不存在';
}