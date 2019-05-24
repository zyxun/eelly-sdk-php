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

namespace Eelly\SDK\Order\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Order\Service\SellerOrderRefactoringInterface;
use Eelly\DTO\UidDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class SellerOrderRefactoring
{
    /**
     * 移动端订单列表.
     *
     * > 返回数据说明
     *
     * key         | type    | value
     * ------------ |------  | --------
     * current      | int    | 当前页码
     * last         | int    | 下一页页码
     * totalPages   | int    | 总页码
     * totalItems   | int    | 数据总量
     * items        | array  |当前数据
     * items[]['orderId']     | string | 订单id
     * items[]['ordern']      | string | 订单编号
     * items[]['buyerName']   | string | 买家名
     * items[]['orderStatus'] | int    | 订单状态
     * items[]['orderAmount'] | int    | 实付(分)
     * items[]initGoodsAmount | int    | 原货款(分)
     * items[]initFreight     | int    | 原运款(分)
     * items[]['freight']     | int    | 运费(分)
     * items[]['createdDate'] | date | 订单日期
     * items[]['ifMerge']     | bool | 是否有可合并订单
     * items[]['totalCount']| int  | 商品总件数
     * items[]['styleCount']| int  | 商品总款数
     * items[]['ifRefund']    | int  | 订单是否申请过退货退款 (1:有 0:没有)
     * items[]['goodsList']   | array | 商品列表
     * items[]['goodsList'][]['goodsName']    | string | 商品名称
     * items[]['goodsList'][]['price']        | int    | 商品价格(分)
     * items[]['goodsList'][]['quantity']     | int    | 商品数量
     * items[]['goodsList'][]['spec']         | string | 商品属性
     * items[]['goodsList'][]['goodsImage']   | string | 商品图片
     * items[]['goodsList'][]['goodsNumber']  | string | 商品货号
     *
     *
     * > 选项栏(tab)
     *
     * 值      |状态说明
     * -------|----------
     * 0      | 全部
     * 1      | 待付款
     * 2      | 待成团
     * 3      | 待发货
     * 4      | 待收货
     * 5      | 已完成
     * 6      | 退货退款
     * 7      | 已取消
     *
     * > 订单状态(orderStatus)
     *
     * 值      |状态说明
     * -------|----------
     * 0 | 未知（错误值）
     * 1 |等待买家付款
     * 2 |买家已付款,等待我发货
     * 3 |买家已付款,等待成团
     * 4 |集赞成功,等待我发货
     * 5 |您已发货,等待买家确认收货
     * 6 |买家申请退款，请及时处理（未发货）
     * 7 |买家申请退款，请及时处理（已发货）
     * 8 |交易完成(买家主动确认收货或10天系统自动收货[未评价])
     * 9 |交易完成(买家主动确认收货或10天系统自动收货[已评价])
     * 10 |交易取消(2天未付款订单自动取消)
     * 11 |交易取消(买家主动取消)
     * 12 |交易取消(卖家主动取消)
     * 13 |已退款，交易取消
     * 14 |交易取消(集赞失败已退款)
     * 15 |买家申请退货退款，请及时处理
     * 16 |您已同意退货，等待买家发出退货
     * 17 |买家已发出退货,等待您签收退货
     * 18 |您已拒绝退款，等待买家修改
     * 19 |您已拒绝退货退款，等待买家修改
     * 20 |退款结算中(您已同意退款，衣联系统正在结算中)
     * 21 |退款结算中(您已确认收到退货，衣联系统正在结算中)
     * 22 |买家已申请衣联客服介入
     * 23 |衣联客服已介入处理
     * 24 |您已申请衣联客服介入
     * 25 |交易完成(客服介入处理完成，卖家责任，钱给买家)
     * 26 |交易完成(客服介入处理完成，买家责任，钱给卖家)
     * 27 |交易完成(客服介入处理完成，双方责任，钱分别结算给买卖家)
     * 28 |交易完成(客服介入处理完成，其他原因)
     * 29 |交易完成(订单部分退款，交易完成)
     *
     * @param array       $params            参数数组
     * @param int         $params['tab']     请求的订单列表栏目
     * @param string      $params['keyword'] 搜索关键字
     * @param int         $params['page']    请求的页码
     * @param int         $params['limit']   每页显示的数量
     * @param UidDTO|null $uidDTO
     *
     * @return array
     * @return array
     *
     * @author hehui<hehui@eelly.net>
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @requestExample({"params":{"tab":0, "keyword":"test", "page":1, "limit":20}})
     *
     * @returnExample(
     * {
     *     "first": 1,
     *     "before": 1,
     *     "current": 1,
     *     "last": 23,
     *     "next": 2,
     *     "totalPages": 23,
     *     "totalItems": 45,
     *     "limit": 2,
     *     "items": [
     *         {
     *             "orderId": "160",
     *             "orderSn": "1811370443",
     *             "sellerName": "莫琼小店",
     *             "osId": "26",
     *             "likes": 2,
     *             "evaluation": null,
     *             "orderAmount": "2",
     *             "freight": "1",
     *             "createdTime": 1524555994,
     *             "orderStatus": 8,
     *             "createdDate": "2018-04-24",
     *             "ifMerge": true,
     *             "productCount": 100,
     *             "goodsList": [
     *                 {
     *                     "ogId": "20000215",
     *                     "orderId": "160",
     *                     "goodsId": "1450168293",
     *                     "gsId": "195022196",
     *                     "price": "1",
     *                     "quantity": "2",
     *                     "goodsName": "【莫琼小店】 2018新款 针织衫\/毛衣  包邮",
     *                     "goodsImage": "https:\/\/img03.eelly.test\/G02\/M00\/00\/03\/small_ooYBAFqzVV2ICEGRAAER2psay8IAAABggBWRl0AARHy759.jpg",
     *                     "goodsNumber": "2",
     *                     "spec": "颜色:如图色,尺码:均码",
     *                     "createdTime": "1524555994",
     *                     "updateTime": "2018-04-24 15:46:32"
     *                 }
     *             ]
     *         },
     *         {
     *             "orderId": "159",
     *             "orderSn": "1811370443",
     *             "sellerName": "莫琼小店",
     *             "osId": "26",
     *             "likes": 0,
     *             "evaluation": null,
     *             "orderAmount": "2",
     *             "freight": "1",
     *             "createdTime": 1524550065,
     *             "orderStatus": 7,
     *             "createdDate": "2018-04-24",
     *             "ifMerge": true,
     *             "productCount": 100,
     *             "goodsList": [
     *                 {
     *                     "ogId": "20000214",
     *                     "orderId": "159",
     *                     "goodsId": "1450168293",
     *                     "gsId": "195022196",
     *                     "price": "1",
     *                     "quantity": "2",
     *                     "goodsName": "【莫琼小店】 2018新款 针织衫\/毛衣  包邮",
     *                     "goodsImage": "https:\/\/img03.eelly.test\/G02\/M00\/00\/03\/small_ooYBAFqzVV2ICEGRAAER2psay8IAAABggBWRl0AARHy759.jpg",
     *                     "goodsNumber": "2",
     *                     "spec": "颜色:如图色,尺码:均码",
     *                     "createdTime": "1524550066",
     *                     "updateTime": "2018-04-24 14:07:43"
     *                 }
     *             ]
     *         }
     *     ]
     * }
     * )
     */
    public function listOrderData(array $params, UidDTO $uidDTO = null): array
    {
        return EellyClient::request('order/sellerOrderRefactoring', 'listOrderData', true, $params, $uidDTO);
    }

    /**
     * 移动端订单列表.
     *
     * > 返回数据说明
     *
     * key         | type    | value
     * ------------ |------  | --------
     * current      | int    | 当前页码
     * last         | int    | 下一页页码
     * totalPages   | int    | 总页码
     * totalItems   | int    | 数据总量
     * items        | array  |当前数据
     * items[]['orderId']     | string | 订单id
     * items[]['ordern']      | string | 订单编号
     * items[]['buyerName']   | string | 买家名
     * items[]['orderStatus'] | int    | 订单状态
     * items[]['orderAmount'] | int    | 实付(分)
     * items[]initGoodsAmount | int    | 原货款(分)
     * items[]initFreight     | int    | 原运款(分)
     * items[]['freight']     | int    | 运费(分)
     * items[]['createdDate'] | date | 订单日期
     * items[]['ifMerge']     | bool | 是否有可合并订单
     * items[]['totalCount']| int  | 商品总件数
     * items[]['styleCount']| int  | 商品总款数
     * items[]['ifRefund']    | int  | 订单是否申请过退货退款 (1:有 0:没有)
     * items[]['goodsList']   | array | 商品列表
     * items[]['goodsList'][]['goodsName']    | string | 商品名称
     * items[]['goodsList'][]['price']        | int    | 商品价格(分)
     * items[]['goodsList'][]['quantity']     | int    | 商品数量
     * items[]['goodsList'][]['spec']         | string | 商品属性
     * items[]['goodsList'][]['goodsImage']   | string | 商品图片
     * items[]['goodsList'][]['goodsNumber']  | string | 商品货号
     *
     *
     * > 选项栏(tab)
     *
     * 值      |状态说明
     * -------|----------
     * 0      | 全部
     * 1      | 待付款
     * 2      | 待成团
     * 3      | 待发货
     * 4      | 待收货
     * 5      | 已完成
     * 6      | 退货退款
     * 7      | 已取消
     *
     * > 订单状态(orderStatus)
     *
     * 值      |状态说明
     * -------|----------
     * 0 | 未知（错误值）
     * 1 |等待买家付款
     * 2 |买家已付款,等待我发货
     * 3 |买家已付款,等待成团
     * 4 |集赞成功,等待我发货
     * 5 |您已发货,等待买家确认收货
     * 6 |买家申请退款，请及时处理（未发货）
     * 7 |买家申请退款，请及时处理（已发货）
     * 8 |交易完成(买家主动确认收货或10天系统自动收货[未评价])
     * 9 |交易完成(买家主动确认收货或10天系统自动收货[已评价])
     * 10 |交易取消(2天未付款订单自动取消)
     * 11 |交易取消(买家主动取消)
     * 12 |交易取消(卖家主动取消)
     * 13 |已退款，交易取消
     * 14 |交易取消(集赞失败已退款)
     * 15 |买家申请退货退款，请及时处理
     * 16 |您已同意退货，等待买家发出退货
     * 17 |买家已发出退货,等待您签收退货
     * 18 |您已拒绝退款，等待买家修改
     * 19 |您已拒绝退货退款，等待买家修改
     * 20 |退款结算中(您已同意退款，衣联系统正在结算中)
     * 21 |退款结算中(您已确认收到退货，衣联系统正在结算中)
     * 22 |买家已申请衣联客服介入
     * 23 |衣联客服已介入处理
     * 24 |您已申请衣联客服介入
     * 25 |交易完成(客服介入处理完成，卖家责任，钱给买家)
     * 26 |交易完成(客服介入处理完成，买家责任，钱给卖家)
     * 27 |交易完成(客服介入处理完成，双方责任，钱分别结算给买卖家)
     * 28 |交易完成(客服介入处理完成，其他原因)
     * 29 |交易完成(订单部分退款，交易完成)
     *
     * @param array       $params            参数数组
     * @param int         $params['tab']     请求的订单列表栏目
     * @param string      $params['keyword'] 搜索关键字
     * @param int         $params['page']    请求的页码
     * @param int         $params['limit']   每页显示的数量
     * @param UidDTO|null $uidDTO
     *
     * @return array
     * @return array
     *
     * @author hehui<hehui@eelly.net>
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @requestExample({"params":{"tab":0, "keyword":"test", "page":1, "limit":20}})
     *
     * @returnExample(
     * {
     *     "first": 1,
     *     "before": 1,
     *     "current": 1,
     *     "last": 23,
     *     "next": 2,
     *     "totalPages": 23,
     *     "totalItems": 45,
     *     "limit": 2,
     *     "items": [
     *         {
     *             "orderId": "160",
     *             "orderSn": "1811370443",
     *             "sellerName": "莫琼小店",
     *             "osId": "26",
     *             "likes": 2,
     *             "evaluation": null,
     *             "orderAmount": "2",
     *             "freight": "1",
     *             "createdTime": 1524555994,
     *             "orderStatus": 8,
     *             "createdDate": "2018-04-24",
     *             "ifMerge": true,
     *             "productCount": 100,
     *             "goodsList": [
     *                 {
     *                     "ogId": "20000215",
     *                     "orderId": "160",
     *                     "goodsId": "1450168293",
     *                     "gsId": "195022196",
     *                     "price": "1",
     *                     "quantity": "2",
     *                     "goodsName": "【莫琼小店】 2018新款 针织衫\/毛衣  包邮",
     *                     "goodsImage": "https:\/\/img03.eelly.test\/G02\/M00\/00\/03\/small_ooYBAFqzVV2ICEGRAAER2psay8IAAABggBWRl0AARHy759.jpg",
     *                     "goodsNumber": "2",
     *                     "spec": "颜色:如图色,尺码:均码",
     *                     "createdTime": "1524555994",
     *                     "updateTime": "2018-04-24 15:46:32"
     *                 }
     *             ]
     *         },
     *         {
     *             "orderId": "159",
     *             "orderSn": "1811370443",
     *             "sellerName": "莫琼小店",
     *             "osId": "26",
     *             "likes": 0,
     *             "evaluation": null,
     *             "orderAmount": "2",
     *             "freight": "1",
     *             "createdTime": 1524550065,
     *             "orderStatus": 7,
     *             "createdDate": "2018-04-24",
     *             "ifMerge": true,
     *             "productCount": 100,
     *             "goodsList": [
     *                 {
     *                     "ogId": "20000214",
     *                     "orderId": "159",
     *                     "goodsId": "1450168293",
     *                     "gsId": "195022196",
     *                     "price": "1",
     *                     "quantity": "2",
     *                     "goodsName": "【莫琼小店】 2018新款 针织衫\/毛衣  包邮",
     *                     "goodsImage": "https:\/\/img03.eelly.test\/G02\/M00\/00\/03\/small_ooYBAFqzVV2ICEGRAAER2psay8IAAABggBWRl0AARHy759.jpg",
     *                     "goodsNumber": "2",
     *                     "spec": "颜色:如图色,尺码:均码",
     *                     "createdTime": "1524550066",
     *                     "updateTime": "2018-04-24 14:07:43"
     *                 }
     *             ]
     *         }
     *     ]
     * }
     * )
     */
    public function listOrderDataAsync(array $params, UidDTO $uidDTO = null)
    {
        return EellyClient::request('order/sellerOrderRefactoring', 'listOrderData', false, $params, $uidDTO);
    }

    /**
     * PC端订单列表.
     *
     * > 返回数据说明
     *
     * key         | type    | value
     * ------------ |------  | --------
     * current      | int    | 当前页码
     * last         | int    | 下一页页码
     * totalPages   | int    | 总页码
     * totalItems   | int    | 数据总量
     * items        | array  |当前数据
     * items[]['orderId']     | string | 订单id
     * items[]['ordern']      | string | 订单编号
     * items[]['buyerName']   | string | 买家名
     * items[]['orderStatus'] | int    | 订单状态
     * items[]['orderAmount'] | int    | 实付(分)
     * items[]initGoodsAmount | int    | 原货款(分)
     * items[]initFreight     | int    | 原运款(分)
     * items[]['freight']     | int    | 运费(分)
     * items[]['createdDate'] | date | 订单日期
     * items[]['ifMerge']     | bool | 是否有可合并订单
     * items[]['totalCount']| int  | 商品总件数
     * items[]['styleCount']| int  | 商品总款数
     * items[]['ifRefund']    | int  | 订单是否申请过退货退款 (1:有 0:没有)
     * items[]['goodsList']   | array | 商品列表
     * items[]['goodsList'][]['goodsName']    | string | 商品名称
     * items[]['goodsList'][]['price']        | int    | 商品价格(分)
     * items[]['goodsList'][]['quantity']     | int    | 商品数量
     * items[]['goodsList'][]['spec']         | string | 商品属性
     * items[]['goodsList'][]['goodsImage']   | string | 商品图片
     *
     *
     * > 选项栏(tab)
     *
     * 值      |状态说明
     * -------|----------
     * 0      | 全部
     * 1      | 待付款
     * 2      | 待成团
     * 3      | 待发货
     * 4      | 待收货
     * 5      | 已完成
     * 6      | 退货退款
     * 7      | 已取消
     *
     *
     * > 订单状态(orderStatus)
     *
     * 值      |状态说明
     * -------|----------
     * 0 | 未知（错误值）
     * 1 |等待买家付款
     * 2 |买家已付款,等待我发货
     * 3 |买家已付款,等待成团
     * 4 |集赞成功,等待我发货
     * 5 |您已发货,等待买家确认收货
     * 6 |买家申请退款，请及时处理（未发货）
     * 7 |买家申请退款，请及时处理（已发货）
     * 8 |交易完成(买家主动确认收货或10天系统自动收货[未评价])
     * 9 |交易完成(买家主动确认收货或10天系统自动收货[已评价])
     * 10 |交易取消(2天未付款订单自动取消)
     * 11 |交易取消(买家主动取消)
     * 12 |交易取消(卖家主动取消)
     * 13 |已退款，交易取消
     * 14 |交易取消(集赞失败已退款)
     * 15 |买家申请退货退款，请及时处理
     * 16 |您已同意退货，等待买家发出退货
     * 17 |买家已发出退货,等待您签收退货
     * 18 |您已拒绝退款，等待买家修改
     * 19 |您已拒绝退货退款，等待买家修改
     * 20 |退款结算中(您已同意退款，衣联系统正在结算中)
     * 21 |退款结算中(您已确认收到退货，衣联系统正在结算中)
     * 22 |买家已申请衣联客服介入
     * 23 |衣联客服已介入处理
     * 24 |您已申请衣联客服介入
     * 25 |交易完成(客服介入处理完成，卖家责任，钱给买家)
     * 26 |交易完成(客服介入处理完成，买家责任，钱给卖家)
     * 27 |交易完成(客服介入处理完成，双方责任，钱分别结算给买卖家)
     * 28 |交易完成(客服介入处理完成，其他原因)
     * 29 |交易完成(订单部分退款，交易完成)
     *
     * @param array       $params             参数数组
     * @param int         $params['tab']      请求的订单列表栏目
     * @param array       $params['keywords'] 搜索关键字
     * @param int         $params['page']     请求的页码
     * @param int         $params['limit']    每页显示的数量
     * @param UidDTO|null $uidDTO
     *
     * @return array
     * @return array
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @requestExample({"params":{"tab":0, "keyword":"test", "page":1, "limit":20}})
     *
     * @returnExample(
     * {
     *     "first": 1,
     *     "before": 1,
     *     "current": 1,
     *     "last": 23,
     *     "next": 2,
     *     "totalPages": 23,
     *     "totalItems": 45,
     *     "limit": 2,
     *     "items": [
     *         {
     *             "orderId": "160",
     *             "orderSn": "1811370443",
     *             "sellerName": "莫琼小店",
     *             "osId": "26",
     *             "likes": 2,
     *             "evaluation": null,
     *             "orderAmount": "2",
     *             "freight": "1",
     *             "createdTime": 1524555994,
     *             "orderStatus": 8,
     *             "createdDate": "2018-04-24",
     *             "ifMerge": true,
     *             "productCount": 100,
     *             "goodsList": [
     *                 {
     *                     "ogId": "20000215",
     *                     "orderId": "160",
     *                     "goodsId": "1450168293",
     *                     "gsId": "195022196",
     *                     "price": "1",
     *                     "quantity": "2",
     *                     "goodsName": "【莫琼小店】 2018新款 针织衫\/毛衣  包邮",
     *                     "goodsImage": "https:\/\/img03.eelly.test\/G02\/M00\/00\/03\/small_ooYBAFqzVV2ICEGRAAER2psay8IAAABggBWRl0AARHy759.jpg",
     *                     "goodsNumber": "2",
     *                     "spec": "颜色:如图色,尺码:均码",
     *                     "createdTime": "1524555994",
     *                     "updateTime": "2018-04-24 15:46:32"
     *                 }
     *             ]
     *         },
     *         {
     *             "orderId": "159",
     *             "orderSn": "1811370443",
     *             "sellerName": "莫琼小店",
     *             "osId": "26",
     *             "likes": 0,
     *             "evaluation": null,
     *             "orderAmount": "2",
     *             "freight": "1",
     *             "createdTime": 1524550065,
     *             "orderStatus": 7,
     *             "createdDate": "2018-04-24",
     *             "ifMerge": true,
     *             "productCount": 100,
     *             "goodsList": [
     *                 {
     *                     "ogId": "20000214",
     *                     "orderId": "159",
     *                     "goodsId": "1450168293",
     *                     "gsId": "195022196",
     *                     "price": "1",
     *                     "quantity": "2",
     *                     "goodsName": "【莫琼小店】 2018新款 针织衫\/毛衣  包邮",
     *                     "goodsImage": "https:\/\/img03.eelly.test\/G02\/M00\/00\/03\/small_ooYBAFqzVV2ICEGRAAER2psay8IAAABggBWRl0AARHy759.jpg",
     *                     "goodsNumber": "2",
     *                     "spec": "颜色:如图色,尺码:均码",
     *                     "createdTime": "1524550066",
     *                     "updateTime": "2018-04-24 14:07:43"
     *                 }
     *             ]
     *         }
     *     ]
     * }
     * )
     */
    public function listPcOrderData(array $params, UidDTO $uidDTO = null): array
    {
        return EellyClient::request('order/sellerOrderRefactoring', 'listPcOrderData', true, $params, $uidDTO);
    }

    /**
     * PC端订单列表.
     *
     * > 返回数据说明
     *
     * key         | type    | value
     * ------------ |------  | --------
     * current      | int    | 当前页码
     * last         | int    | 下一页页码
     * totalPages   | int    | 总页码
     * totalItems   | int    | 数据总量
     * items        | array  |当前数据
     * items[]['orderId']     | string | 订单id
     * items[]['ordern']      | string | 订单编号
     * items[]['buyerName']   | string | 买家名
     * items[]['orderStatus'] | int    | 订单状态
     * items[]['orderAmount'] | int    | 实付(分)
     * items[]initGoodsAmount | int    | 原货款(分)
     * items[]initFreight     | int    | 原运款(分)
     * items[]['freight']     | int    | 运费(分)
     * items[]['createdDate'] | date | 订单日期
     * items[]['ifMerge']     | bool | 是否有可合并订单
     * items[]['totalCount']| int  | 商品总件数
     * items[]['styleCount']| int  | 商品总款数
     * items[]['ifRefund']    | int  | 订单是否申请过退货退款 (1:有 0:没有)
     * items[]['goodsList']   | array | 商品列表
     * items[]['goodsList'][]['goodsName']    | string | 商品名称
     * items[]['goodsList'][]['price']        | int    | 商品价格(分)
     * items[]['goodsList'][]['quantity']     | int    | 商品数量
     * items[]['goodsList'][]['spec']         | string | 商品属性
     * items[]['goodsList'][]['goodsImage']   | string | 商品图片
     *
     *
     * > 选项栏(tab)
     *
     * 值      |状态说明
     * -------|----------
     * 0      | 全部
     * 1      | 待付款
     * 2      | 待成团
     * 3      | 待发货
     * 4      | 待收货
     * 5      | 已完成
     * 6      | 退货退款
     * 7      | 已取消
     *
     *
     * > 订单状态(orderStatus)
     *
     * 值      |状态说明
     * -------|----------
     * 0 | 未知（错误值）
     * 1 |等待买家付款
     * 2 |买家已付款,等待我发货
     * 3 |买家已付款,等待成团
     * 4 |集赞成功,等待我发货
     * 5 |您已发货,等待买家确认收货
     * 6 |买家申请退款，请及时处理（未发货）
     * 7 |买家申请退款，请及时处理（已发货）
     * 8 |交易完成(买家主动确认收货或10天系统自动收货[未评价])
     * 9 |交易完成(买家主动确认收货或10天系统自动收货[已评价])
     * 10 |交易取消(2天未付款订单自动取消)
     * 11 |交易取消(买家主动取消)
     * 12 |交易取消(卖家主动取消)
     * 13 |已退款，交易取消
     * 14 |交易取消(集赞失败已退款)
     * 15 |买家申请退货退款，请及时处理
     * 16 |您已同意退货，等待买家发出退货
     * 17 |买家已发出退货,等待您签收退货
     * 18 |您已拒绝退款，等待买家修改
     * 19 |您已拒绝退货退款，等待买家修改
     * 20 |退款结算中(您已同意退款，衣联系统正在结算中)
     * 21 |退款结算中(您已确认收到退货，衣联系统正在结算中)
     * 22 |买家已申请衣联客服介入
     * 23 |衣联客服已介入处理
     * 24 |您已申请衣联客服介入
     * 25 |交易完成(客服介入处理完成，卖家责任，钱给买家)
     * 26 |交易完成(客服介入处理完成，买家责任，钱给卖家)
     * 27 |交易完成(客服介入处理完成，双方责任，钱分别结算给买卖家)
     * 28 |交易完成(客服介入处理完成，其他原因)
     * 29 |交易完成(订单部分退款，交易完成)
     *
     * @param array       $params             参数数组
     * @param int         $params['tab']      请求的订单列表栏目
     * @param array       $params['keywords'] 搜索关键字
     * @param int         $params['page']     请求的页码
     * @param int         $params['limit']    每页显示的数量
     * @param UidDTO|null $uidDTO
     *
     * @return array
     * @return array
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @requestExample({"params":{"tab":0, "keyword":"test", "page":1, "limit":20}})
     *
     * @returnExample(
     * {
     *     "first": 1,
     *     "before": 1,
     *     "current": 1,
     *     "last": 23,
     *     "next": 2,
     *     "totalPages": 23,
     *     "totalItems": 45,
     *     "limit": 2,
     *     "items": [
     *         {
     *             "orderId": "160",
     *             "orderSn": "1811370443",
     *             "sellerName": "莫琼小店",
     *             "osId": "26",
     *             "likes": 2,
     *             "evaluation": null,
     *             "orderAmount": "2",
     *             "freight": "1",
     *             "createdTime": 1524555994,
     *             "orderStatus": 8,
     *             "createdDate": "2018-04-24",
     *             "ifMerge": true,
     *             "productCount": 100,
     *             "goodsList": [
     *                 {
     *                     "ogId": "20000215",
     *                     "orderId": "160",
     *                     "goodsId": "1450168293",
     *                     "gsId": "195022196",
     *                     "price": "1",
     *                     "quantity": "2",
     *                     "goodsName": "【莫琼小店】 2018新款 针织衫\/毛衣  包邮",
     *                     "goodsImage": "https:\/\/img03.eelly.test\/G02\/M00\/00\/03\/small_ooYBAFqzVV2ICEGRAAER2psay8IAAABggBWRl0AARHy759.jpg",
     *                     "goodsNumber": "2",
     *                     "spec": "颜色:如图色,尺码:均码",
     *                     "createdTime": "1524555994",
     *                     "updateTime": "2018-04-24 15:46:32"
     *                 }
     *             ]
     *         },
     *         {
     *             "orderId": "159",
     *             "orderSn": "1811370443",
     *             "sellerName": "莫琼小店",
     *             "osId": "26",
     *             "likes": 0,
     *             "evaluation": null,
     *             "orderAmount": "2",
     *             "freight": "1",
     *             "createdTime": 1524550065,
     *             "orderStatus": 7,
     *             "createdDate": "2018-04-24",
     *             "ifMerge": true,
     *             "productCount": 100,
     *             "goodsList": [
     *                 {
     *                     "ogId": "20000214",
     *                     "orderId": "159",
     *                     "goodsId": "1450168293",
     *                     "gsId": "195022196",
     *                     "price": "1",
     *                     "quantity": "2",
     *                     "goodsName": "【莫琼小店】 2018新款 针织衫\/毛衣  包邮",
     *                     "goodsImage": "https:\/\/img03.eelly.test\/G02\/M00\/00\/03\/small_ooYBAFqzVV2ICEGRAAER2psay8IAAABggBWRl0AARHy759.jpg",
     *                     "goodsNumber": "2",
     *                     "spec": "颜色:如图色,尺码:均码",
     *                     "createdTime": "1524550066",
     *                     "updateTime": "2018-04-24 14:07:43"
     *                 }
     *             ]
     *         }
     *     ]
     * }
     * )
     */
    public function listPcOrderDataAsync(array $params, UidDTO $uidDTO = null)
    {
        return EellyClient::request('order/sellerOrderRefactoring', 'listPcOrderData', false, $params, $uidDTO);
    }

    /**
     * 获取我的订单统计信息(卖家).
     *
     * > 返回数据说明
     *
     * key                | type    | value
     * ------------------ | ------- | --------
     * all                | int     | 所有
     * needPay            | int     | 待付款
     * needShare          | int     | 待成团
     * needShipping       | int     | 待发货
     * needReceiving      | int     | 待收货
     * needFinish         | int     | 已完成
     * needRefund         | int     | 退货退款
     * needCancel         | int     | 已取消
     *
     * @param UidDTO|null $uidDTO uid dto(表示需要登录)
     *
     * @return array
     *
     * @returnExample(
     * {
     *     "all": "3",
     *     "needPay": 0,
     *     "needShare": 1,
     *     "needShipping": 1,
     *     "needReceiving": 0,
     *     "needFinish": 0,
     *     "needRefund":2,
     *     "needCancel":3
     * }
     * )
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     */
    public function listOrderStatusNum(UidDTO $uidDTO = null): array
    {
        return EellyClient::request('order/sellerOrderRefactoring', 'listOrderStatusNum', true, $uidDTO);
    }

    /**
     * 获取我的订单统计信息(卖家).
     *
     * > 返回数据说明
     *
     * key                | type    | value
     * ------------------ | ------- | --------
     * all                | int     | 所有
     * needPay            | int     | 待付款
     * needShare          | int     | 待成团
     * needShipping       | int     | 待发货
     * needReceiving      | int     | 待收货
     * needFinish         | int     | 已完成
     * needRefund         | int     | 退货退款
     * needCancel         | int     | 已取消
     *
     * @param UidDTO|null $uidDTO uid dto(表示需要登录)
     *
     * @return array
     *
     * @returnExample(
     * {
     *     "all": "3",
     *     "needPay": 0,
     *     "needShare": 1,
     *     "needShipping": 1,
     *     "needReceiving": 0,
     *     "needFinish": 0,
     *     "needRefund":2,
     *     "needCancel":3
     * }
     * )
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     */
    public function listOrderStatusNumAsync(UidDTO $uidDTO = null)
    {
        return EellyClient::request('order/sellerOrderRefactoring', 'listOrderStatusNum', false, $uidDTO);
    }

    /**
     * 订单详情(卖家).
     *
     * > 返回数据说明
     *
     * key | type |  value
     * --- | ---- | -------
     * orderStatus     | int      | 订单状态
     * consignee       | string   | 收货人姓名
     * mobile          | string   | 手机
     * regionName      | string   | 省市区
     * address         | string   | 详细地址
     * remark          | string   | 买家留言
     * buyerName       | string   | 买家名称
     * orderAmount     | int      | 实收(分)
     * initGoodsAmount | int      | 原货款(分)
     * initFreight     | int      | 原运费(分)
     * freight         | int      | 运费(分)
     * discountAmount  | int      | 优惠金额(分)
     * changePrice     | int      | 改价(分)
     * orderSn         | string   | 订单号
     * createdDatetime | Datetime | 下单日期时间
     * payDatetime     | Datetime | 支付日期时间
     * shipDatetime    | Datetime | 发货日期时间
     * orderfrom       | string   | 订单来源
     * styleCount      | int       | 商品款数
     * totalCount      | int       | 商品总件数
     * extension       | int       | 订单业务标识：0 普通订单  1 团购订单
     * ifMerge         | bool      | 是否有可合并订单
     * ifRefund        | int       | 订单是否申请过退货退款 (1:有 0:没有)
     * goodsList       | array     | 商品列表
     * goodsList[]['goodsName']    | string | 商品名称
     * goodsList[]['price']        | int    | 商品价格(分)
     * goodsList[]['quantity']     | int    | 商品数量
     * goodsList[]['spec']         | string | 商品属性
     * goodsList[]['goodsImage']   | string | 商品图片
     *
     * > 订单状态(orderStatus)
     *
     * 值      |状态说明
     * -------|----------
     * 0 | 未知（错误值）
     * 1 |等待买家付款
     * 2 |买家已付款,等待我发货
     * 3 |买家已付款,等待成团
     * 4 |集赞成功,等待我发货
     * 5 |您已发货,等待买家确认收货
     * 6 |买家申请退款，请及时处理（未发货）
     * 7 |买家申请退款，请及时处理（已发货）
     * 8 |交易完成(买家主动确认收货或10天系统自动收货[未评价])
     * 9 |交易完成(买家主动确认收货或10天系统自动收货[已评价])
     * 10 |交易取消(2天未付款订单自动取消)
     * 11 |交易取消(买家主动取消)
     * 12 |交易取消(卖家主动取消)
     * 13 |已退款，交易取消
     * 14 |交易取消(集赞失败已退款)
     * 15 |买家申请退货退款，请及时处理
     * 16 |您已同意退货，等待买家发出退货
     * 17 |买家已发出退货,等待您签收退货
     * 18 |您已拒绝退款，等待买家修改
     * 19 |您已拒绝退货退款，等待买家修改
     * 20 |退款结算中(您已同意退款，衣联系统正在结算中)
     * 21 |退款结算中(您已确认收到退货，衣联系统正在结算中)
     * 22 |买家已申请衣联客服介入
     * 23 |衣联客服已介入处理
     * 24 |您已申请衣联客服介入
     * 25 |交易完成(客服介入处理完成，卖家责任，钱给买家)
     * 26 |交易完成(客服介入处理完成，买家责任，钱给卖家)
     * 27 |交易完成(客服介入处理完成，双方责任，钱分别结算给买卖家)
     * 28 |交易完成(客服介入处理完成，其他原因)
     * 29 |交易完成(订单部分退款，交易完成)
     *
     * @param int         $orderId 订单id
     * @param UidDTO|null $uidDTO  uid dto
     *
     * @return array
     *
     * @requestExample({"orderId":"160"})
     *
     * @returnExample(
     * {
     *     "orderId": "160",
     *     "orderSn": "1811370443",
     *     "buyerName": "juju12",
     *     "osId": "26",
     *     "orderAmount": "2",
     *     "payTime": "1524556066",
     *     "shipTime": "0",
     *     "freight": "1",
     *     "createdTime": 1524555994,
     *     "remark": "",
     *     "fromFlag": "0",
     *     "extension": "0",
     *     "likes": "2",
     *     "evaluation": null,
     *     "initGoodsAmount": "2",
     *     "discountAmount": "0",
     *     "initAmount": "0",
     *     "consignee": "蓝厨卫",
     *     "mobile": "11113131313",
     *     "regionName": "山西省 晋城市 沁水县",
     *     "address": "2222",
     *     "orderStatus": 8,
     *     "createdDatetime": "2018-04-24 07:46:34",
     *     "payDatetime": "2018-04-24 07:47:46",
     *     "shipDatetime": "1970-01-01 00:00:00",
     *     "changePrice": 1,
     *     "orderfrom": "未知",
     *     "styleCount": 1,
     *     "totalCount": 0,
     *     "ifMerge": true,
     *     "fExtendReceipt":false,
     *     "receiptEndTime":0,
     *     "goodsList": [
     *         {
     *             "ogId": "20000215",
     *             "orderId": "160",
     *             "goodsId": "1450168293",
     *             "gsId": "195022196",
     *             "price": "1",
     *             "quantity": "2",
     *             "goodsName": "【莫琼小店】 2018新款 针织衫\/毛衣  包邮",
     *             "goodsImage": "https:\/\/img03.eelly.test\/G02\/M00\/00\/03\/small_ooYBAFqzVV2ICEGRAAER2psay8IAAABggBWRl0AARHy759.jpg",
     *             "goodsNumber": "2",
     *             "spec": "颜色:如图色,尺码:均码",
     *             "createdTime": "1524555994",
     *             "updateTime": "2018-04-24 15:46:32"
     *         }
     *     ]
     * }
     * )
     *
     * @author hehui<hehui@eelly.net>
     * @author zhangyingdi<zhangyingdi@eelly.net>
     */
    public function getOrderDetail(int $orderId, UidDTO $uidDTO = null): array
    {
        return EellyClient::request('order/sellerOrderRefactoring', 'getOrderDetail', true, $orderId, $uidDTO);
    }

    /**
     * 订单详情(卖家).
     *
     * > 返回数据说明
     *
     * key | type |  value
     * --- | ---- | -------
     * orderStatus     | int      | 订单状态
     * consignee       | string   | 收货人姓名
     * mobile          | string   | 手机
     * regionName      | string   | 省市区
     * address         | string   | 详细地址
     * remark          | string   | 买家留言
     * buyerName       | string   | 买家名称
     * orderAmount     | int      | 实收(分)
     * initGoodsAmount | int      | 原货款(分)
     * initFreight     | int      | 原运费(分)
     * freight         | int      | 运费(分)
     * discountAmount  | int      | 优惠金额(分)
     * changePrice     | int      | 改价(分)
     * orderSn         | string   | 订单号
     * createdDatetime | Datetime | 下单日期时间
     * payDatetime     | Datetime | 支付日期时间
     * shipDatetime    | Datetime | 发货日期时间
     * orderfrom       | string   | 订单来源
     * styleCount      | int       | 商品款数
     * totalCount      | int       | 商品总件数
     * extension       | int       | 订单业务标识：0 普通订单  1 团购订单
     * ifMerge         | bool      | 是否有可合并订单
     * ifRefund        | int       | 订单是否申请过退货退款 (1:有 0:没有)
     * goodsList       | array     | 商品列表
     * goodsList[]['goodsName']    | string | 商品名称
     * goodsList[]['price']        | int    | 商品价格(分)
     * goodsList[]['quantity']     | int    | 商品数量
     * goodsList[]['spec']         | string | 商品属性
     * goodsList[]['goodsImage']   | string | 商品图片
     *
     * > 订单状态(orderStatus)
     *
     * 值      |状态说明
     * -------|----------
     * 0 | 未知（错误值）
     * 1 |等待买家付款
     * 2 |买家已付款,等待我发货
     * 3 |买家已付款,等待成团
     * 4 |集赞成功,等待我发货
     * 5 |您已发货,等待买家确认收货
     * 6 |买家申请退款，请及时处理（未发货）
     * 7 |买家申请退款，请及时处理（已发货）
     * 8 |交易完成(买家主动确认收货或10天系统自动收货[未评价])
     * 9 |交易完成(买家主动确认收货或10天系统自动收货[已评价])
     * 10 |交易取消(2天未付款订单自动取消)
     * 11 |交易取消(买家主动取消)
     * 12 |交易取消(卖家主动取消)
     * 13 |已退款，交易取消
     * 14 |交易取消(集赞失败已退款)
     * 15 |买家申请退货退款，请及时处理
     * 16 |您已同意退货，等待买家发出退货
     * 17 |买家已发出退货,等待您签收退货
     * 18 |您已拒绝退款，等待买家修改
     * 19 |您已拒绝退货退款，等待买家修改
     * 20 |退款结算中(您已同意退款，衣联系统正在结算中)
     * 21 |退款结算中(您已确认收到退货，衣联系统正在结算中)
     * 22 |买家已申请衣联客服介入
     * 23 |衣联客服已介入处理
     * 24 |您已申请衣联客服介入
     * 25 |交易完成(客服介入处理完成，卖家责任，钱给买家)
     * 26 |交易完成(客服介入处理完成，买家责任，钱给卖家)
     * 27 |交易完成(客服介入处理完成，双方责任，钱分别结算给买卖家)
     * 28 |交易完成(客服介入处理完成，其他原因)
     * 29 |交易完成(订单部分退款，交易完成)
     *
     * @param int         $orderId 订单id
     * @param UidDTO|null $uidDTO  uid dto
     *
     * @return array
     *
     * @requestExample({"orderId":"160"})
     *
     * @returnExample(
     * {
     *     "orderId": "160",
     *     "orderSn": "1811370443",
     *     "buyerName": "juju12",
     *     "osId": "26",
     *     "orderAmount": "2",
     *     "payTime": "1524556066",
     *     "shipTime": "0",
     *     "freight": "1",
     *     "createdTime": 1524555994,
     *     "remark": "",
     *     "fromFlag": "0",
     *     "extension": "0",
     *     "likes": "2",
     *     "evaluation": null,
     *     "initGoodsAmount": "2",
     *     "discountAmount": "0",
     *     "initAmount": "0",
     *     "consignee": "蓝厨卫",
     *     "mobile": "11113131313",
     *     "regionName": "山西省 晋城市 沁水县",
     *     "address": "2222",
     *     "orderStatus": 8,
     *     "createdDatetime": "2018-04-24 07:46:34",
     *     "payDatetime": "2018-04-24 07:47:46",
     *     "shipDatetime": "1970-01-01 00:00:00",
     *     "changePrice": 1,
     *     "orderfrom": "未知",
     *     "styleCount": 1,
     *     "totalCount": 0,
     *     "ifMerge": true,
     *     "fExtendReceipt":false,
     *     "receiptEndTime":0,
     *     "goodsList": [
     *         {
     *             "ogId": "20000215",
     *             "orderId": "160",
     *             "goodsId": "1450168293",
     *             "gsId": "195022196",
     *             "price": "1",
     *             "quantity": "2",
     *             "goodsName": "【莫琼小店】 2018新款 针织衫\/毛衣  包邮",
     *             "goodsImage": "https:\/\/img03.eelly.test\/G02\/M00\/00\/03\/small_ooYBAFqzVV2ICEGRAAER2psay8IAAABggBWRl0AARHy759.jpg",
     *             "goodsNumber": "2",
     *             "spec": "颜色:如图色,尺码:均码",
     *             "createdTime": "1524555994",
     *             "updateTime": "2018-04-24 15:46:32"
     *         }
     *     ]
     * }
     * )
     *
     * @author hehui<hehui@eelly.net>
     * @author zhangyingdi<zhangyingdi@eelly.net>
     */
    public function getOrderDetailAsync(int $orderId, UidDTO $uidDTO = null)
    {
        return EellyClient::request('order/sellerOrderRefactoring', 'getOrderDetail', false, $orderId, $uidDTO);
    }

    /**
     * 获取合并订单列表.
     *
     * 通过订单id获取可合并的订单列表
     *
     * > 返回数据说明
     *
     * key | type |  value
     * --- | ---- | -------
     * [ ]orderId           |  int      | 订单id
     * [ ]orderStatus       |  int      | 订单状态
     * [ ]orderAmount       |  int      | 实收(分)
     * [ ]styleCount        | int       | 商品款数
     * [ ]totalCount        | int       | 商品总件数
     * [ ]goodsList         | array     | 商品列表
     * [ ]goodsList[]['goodsName']    | string | 商品名称
     * [ ]goodsList[]['price']        | int    | 商品价格(分)
     * [ ]goodsList[]['quantity']     | int    | 商品数量
     * [ ]goodsList[]['spec']         | string | 商品属性
     * [ ]goodsList[]['goodsImage']   | string | 商品图片
     *
     *
     * > 订单状态(orderStatus)
     *
     * 值      |状态说明
     * -------|----------
     * 0      | 未知（错误值）
     * 1 |等待买家付款
     * 2 |买家已付款,等待我发货
     * 3 |买家已付款,等待成团
     * 4 |集赞成功,等待我发货
     * 5 |您已发货,等待买家确认收货
     * 6 |买家申请退款，请及时处理（未发货）
     * 7 |买家申请退款，请及时处理（已发货）
     * 8 |交易完成(买家主动确认收货或10天系统自动收货[未评价])
     * 9 |交易完成(买家主动确认收货或10天系统自动收货[已评价])
     * 10 |交易取消(2天未付款订单自动取消)
     * 11 |交易取消(买家主动取消)
     * 12 |交易取消(卖家主动取消)
     * 13 |已退款，交易取消
     * 14 |交易取消(集赞失败已退款)
     * 15 |买家申请退货退款，请及时处理
     * 16 |您已同意退货，等待买家发出退货
     * 17 |买家已发出退货,等待您签收退货
     * 18 |您已拒绝退款，等待买家修改
     * 19 |您已拒绝退货退款，等待买家修改
     * 20 |退款结算中(您已同意退款，衣联系统正在结算中)
     * 21 |退款结算中(您已确认收到退货，衣联系统正在结算中)
     * 22 |买家已申请衣联客服介入
     * 23 |衣联客服已介入处理
     * 24 |您已申请衣联客服介入
     * 25 |交易完成(客服介入处理完成，卖家责任，钱给买家)
     * 26 |交易完成(客服介入处理完成，买家责任，钱给卖家)
     * 27 |交易完成(客服介入处理完成，双方责任，钱分别结算给买卖家)
     * 28 |交易完成(客服介入处理完成，其他原因)
     * 29 |交易完成(订单部分退款，交易完成)
     *
     * @param int         $orderId 订单id
     * @param UidDTO|null $uidDTO  uid dto
     *
     * @return array 订单列表
     *
     * @author hehui<hehui@eelly.net>
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @requestExample({"orderId": 160})
     *
     * @returnExample(
     * [
     *     {
     *         "orderId": "158",
     *         "orderSn": "1811323254",
     *         "refType": "0",
     *         "fromFlag": "0",
     *         "extension": "0",
     *         "batchNumber": "0",
     *         "chunkNumber": "0",
     *         "sellerId": "1762254",
     *         "sellerName": "莫琼小店",
     *         "buyerId": "148086",
     *         "buyerName": "juju12",
     *         "osId": "2",
     *         "payTime": "0",
     *         "shipTime": "0",
     *         "delayTime": "0",
     *         "frozenTime": "0",
     *         "finishedTime": "0",
     *         "orderAmount": "2",
     *         "freight": "1",
     *         "commission": "0",
     *         "returnFlag": "0",
     *         "evaluateFlag": "0",
     *         "deleteFlag": "0",
     *         "remark": "",
     *         "createdTime": 1524550060,
     *         "updateTime": "2018-04-27 22:58:41",
     *         "goodsList": [
     *             {
     *                 "ogId": "20000213",
     *                 "orderId": "158",
     *                 "goodsId": "1450168293",
     *                 "gsId": "195022196",
     *                 "price": "1",
     *                 "quantity": "2",
     *                 "goodsName": "【莫琼小店】 2018新款 针织衫\/毛衣  包邮",
     *                 "goodsImage": "https:\/\/img03.eelly.test\/G02\/M00\/00\/03\/small_ooYBAFqzVV2ICEGRAAER2psay8IAAABggBWRl0AARHy759.jpg",
     *                 "goodsNumber": "2",
     *                 "spec": "颜色:如图色,尺码:均码",
     *                 "createdTime": "1524550060",
     *                 "updateTime": "2018-04-24 14:07:38"
     *             }
     *         ],
     *         "orderStatus": 2,
     *         "createdDate": "2018-04-24",
     *         "styleCount": 1,
     *         "totalCount": 2
     *     },
     *     {
     *         "orderId": "159",
     *         "orderSn": "1811345794",
     *         "refType": "0",
     *         "fromFlag": "0",
     *         "extension": "0",
     *         "batchNumber": "0",
     *         "chunkNumber": "0",
     *         "sellerId": "1762254",
     *         "sellerName": "莫琼小店",
     *         "buyerId": "148086",
     *         "buyerName": "juju12",
     *         "osId": "2",
     *         "payTime": "1524550141",
     *         "shipTime": "0",
     *         "delayTime": "0",
     *         "frozenTime": "0",
     *         "finishedTime": "0",
     *         "orderAmount": "2",
     *         "freight": "1",
     *         "commission": "0",
     *         "returnFlag": "0",
     *         "evaluateFlag": "0",
     *         "deleteFlag": "0",
     *         "remark": "",
     *         "createdTime": 1524550065,
     *         "updateTime": "2018-04-27 22:58:43",
     *         "goodsList": [
     *             {
     *                 "ogId": "20000214",
     *                 "orderId": "159",
     *                 "goodsId": "1450168293",
     *                 "gsId": "195022196",
     *                 "price": "1",
     *                 "quantity": "2",
     *                 "goodsName": "【莫琼小店】 2018新款 针织衫\/毛衣  包邮",
     *                 "goodsImage": "https:\/\/img03.eelly.test\/G02\/M00\/00\/03\/small_ooYBAFqzVV2ICEGRAAER2psay8IAAABggBWRl0AARHy759.jpg",
     *                 "goodsNumber": "2",
     *                 "spec": "颜色:如图色,尺码:均码",
     *                 "createdTime": "1524550066",
     *                 "updateTime": "2018-04-24 14:07:43"
     *             }
     *         ],
     *         "orderStatus": 2,
     *         "createdDate": "2018-04-24",
     *         "styleCount": 1,
     *         "totalCount": 2
     *     }
     * ]
     * )
     */
    public function listMergerOrders(int $orderId, UidDTO $uidDTO = null): array
    {
        return EellyClient::request('order/sellerOrderRefactoring', 'listMergerOrders', true, $orderId, $uidDTO);
    }

    /**
     * 获取合并订单列表.
     *
     * 通过订单id获取可合并的订单列表
     *
     * > 返回数据说明
     *
     * key | type |  value
     * --- | ---- | -------
     * [ ]orderId           |  int      | 订单id
     * [ ]orderStatus       |  int      | 订单状态
     * [ ]orderAmount       |  int      | 实收(分)
     * [ ]styleCount        | int       | 商品款数
     * [ ]totalCount        | int       | 商品总件数
     * [ ]goodsList         | array     | 商品列表
     * [ ]goodsList[]['goodsName']    | string | 商品名称
     * [ ]goodsList[]['price']        | int    | 商品价格(分)
     * [ ]goodsList[]['quantity']     | int    | 商品数量
     * [ ]goodsList[]['spec']         | string | 商品属性
     * [ ]goodsList[]['goodsImage']   | string | 商品图片
     *
     *
     * > 订单状态(orderStatus)
     *
     * 值      |状态说明
     * -------|----------
     * 0      | 未知（错误值）
     * 1 |等待买家付款
     * 2 |买家已付款,等待我发货
     * 3 |买家已付款,等待成团
     * 4 |集赞成功,等待我发货
     * 5 |您已发货,等待买家确认收货
     * 6 |买家申请退款，请及时处理（未发货）
     * 7 |买家申请退款，请及时处理（已发货）
     * 8 |交易完成(买家主动确认收货或10天系统自动收货[未评价])
     * 9 |交易完成(买家主动确认收货或10天系统自动收货[已评价])
     * 10 |交易取消(2天未付款订单自动取消)
     * 11 |交易取消(买家主动取消)
     * 12 |交易取消(卖家主动取消)
     * 13 |已退款，交易取消
     * 14 |交易取消(集赞失败已退款)
     * 15 |买家申请退货退款，请及时处理
     * 16 |您已同意退货，等待买家发出退货
     * 17 |买家已发出退货,等待您签收退货
     * 18 |您已拒绝退款，等待买家修改
     * 19 |您已拒绝退货退款，等待买家修改
     * 20 |退款结算中(您已同意退款，衣联系统正在结算中)
     * 21 |退款结算中(您已确认收到退货，衣联系统正在结算中)
     * 22 |买家已申请衣联客服介入
     * 23 |衣联客服已介入处理
     * 24 |您已申请衣联客服介入
     * 25 |交易完成(客服介入处理完成，卖家责任，钱给买家)
     * 26 |交易完成(客服介入处理完成，买家责任，钱给卖家)
     * 27 |交易完成(客服介入处理完成，双方责任，钱分别结算给买卖家)
     * 28 |交易完成(客服介入处理完成，其他原因)
     * 29 |交易完成(订单部分退款，交易完成)
     *
     * @param int         $orderId 订单id
     * @param UidDTO|null $uidDTO  uid dto
     *
     * @return array 订单列表
     *
     * @author hehui<hehui@eelly.net>
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @requestExample({"orderId": 160})
     *
     * @returnExample(
     * [
     *     {
     *         "orderId": "158",
     *         "orderSn": "1811323254",
     *         "refType": "0",
     *         "fromFlag": "0",
     *         "extension": "0",
     *         "batchNumber": "0",
     *         "chunkNumber": "0",
     *         "sellerId": "1762254",
     *         "sellerName": "莫琼小店",
     *         "buyerId": "148086",
     *         "buyerName": "juju12",
     *         "osId": "2",
     *         "payTime": "0",
     *         "shipTime": "0",
     *         "delayTime": "0",
     *         "frozenTime": "0",
     *         "finishedTime": "0",
     *         "orderAmount": "2",
     *         "freight": "1",
     *         "commission": "0",
     *         "returnFlag": "0",
     *         "evaluateFlag": "0",
     *         "deleteFlag": "0",
     *         "remark": "",
     *         "createdTime": 1524550060,
     *         "updateTime": "2018-04-27 22:58:41",
     *         "goodsList": [
     *             {
     *                 "ogId": "20000213",
     *                 "orderId": "158",
     *                 "goodsId": "1450168293",
     *                 "gsId": "195022196",
     *                 "price": "1",
     *                 "quantity": "2",
     *                 "goodsName": "【莫琼小店】 2018新款 针织衫\/毛衣  包邮",
     *                 "goodsImage": "https:\/\/img03.eelly.test\/G02\/M00\/00\/03\/small_ooYBAFqzVV2ICEGRAAER2psay8IAAABggBWRl0AARHy759.jpg",
     *                 "goodsNumber": "2",
     *                 "spec": "颜色:如图色,尺码:均码",
     *                 "createdTime": "1524550060",
     *                 "updateTime": "2018-04-24 14:07:38"
     *             }
     *         ],
     *         "orderStatus": 2,
     *         "createdDate": "2018-04-24",
     *         "styleCount": 1,
     *         "totalCount": 2
     *     },
     *     {
     *         "orderId": "159",
     *         "orderSn": "1811345794",
     *         "refType": "0",
     *         "fromFlag": "0",
     *         "extension": "0",
     *         "batchNumber": "0",
     *         "chunkNumber": "0",
     *         "sellerId": "1762254",
     *         "sellerName": "莫琼小店",
     *         "buyerId": "148086",
     *         "buyerName": "juju12",
     *         "osId": "2",
     *         "payTime": "1524550141",
     *         "shipTime": "0",
     *         "delayTime": "0",
     *         "frozenTime": "0",
     *         "finishedTime": "0",
     *         "orderAmount": "2",
     *         "freight": "1",
     *         "commission": "0",
     *         "returnFlag": "0",
     *         "evaluateFlag": "0",
     *         "deleteFlag": "0",
     *         "remark": "",
     *         "createdTime": 1524550065,
     *         "updateTime": "2018-04-27 22:58:43",
     *         "goodsList": [
     *             {
     *                 "ogId": "20000214",
     *                 "orderId": "159",
     *                 "goodsId": "1450168293",
     *                 "gsId": "195022196",
     *                 "price": "1",
     *                 "quantity": "2",
     *                 "goodsName": "【莫琼小店】 2018新款 针织衫\/毛衣  包邮",
     *                 "goodsImage": "https:\/\/img03.eelly.test\/G02\/M00\/00\/03\/small_ooYBAFqzVV2ICEGRAAER2psay8IAAABggBWRl0AARHy759.jpg",
     *                 "goodsNumber": "2",
     *                 "spec": "颜色:如图色,尺码:均码",
     *                 "createdTime": "1524550066",
     *                 "updateTime": "2018-04-24 14:07:43"
     *             }
     *         ],
     *         "orderStatus": 2,
     *         "createdDate": "2018-04-24",
     *         "styleCount": 1,
     *         "totalCount": 2
     *     }
     * ]
     * )
     */
    public function listMergerOrdersAsync(int $orderId, UidDTO $uidDTO = null)
    {
        return EellyClient::request('order/sellerOrderRefactoring', 'listMergerOrders', false, $orderId, $uidDTO);
    }

    /**
     * 卖家修改订单价格
     *
     * @param int         $orderId 订单id
     * @param int         $price   修改后的订单价格
     * @param int         $freight 修改后的运费
     * @param UidDTO|null $uidDTO
     *
     * @return bool
     *
     * @requestExample({"orderId": 160, "price":1000, "freight":10})
     * @returnExample(true)
     *
     * @author hehui<hehui@eelly.net>
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2018.08.31
     */
    public function changeOrderPrice(int $orderId, int $price, int $freight, UidDTO $uidDTO = null): bool
    {
        return EellyClient::request('order/sellerOrderRefactoring', 'changeOrderPrice', true, $orderId, $price, $freight, $uidDTO);
    }

    /**
     * 卖家修改订单价格
     *
     * @param int         $orderId 订单id
     * @param int         $price   修改后的订单价格
     * @param int         $freight 修改后的运费
     * @param UidDTO|null $uidDTO
     *
     * @return bool
     *
     * @requestExample({"orderId": 160, "price":1000, "freight":10})
     * @returnExample(true)
     *
     * @author hehui<hehui@eelly.net>
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2018.08.31
     */
    public function changeOrderPriceAsync(int $orderId, int $price, int $freight, UidDTO $uidDTO = null)
    {
        return EellyClient::request('order/sellerOrderRefactoring', 'changeOrderPrice', false, $orderId, $price, $freight, $uidDTO);
    }

    /**
     * 卖家取消订单.
     *
     * @param int         $orderId 订单id
     * @param UidDTO|null $uidDTO
     *
     * @return bool
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2018.09.11
     */
    public function cancelOrder(int $orderId, UidDTO $uidDTO = null): bool
    {
        return EellyClient::request('order/sellerOrderRefactoring', 'cancelOrder', true, $orderId, $uidDTO);
    }

    /**
     * 卖家取消订单.
     *
     * @param int         $orderId 订单id
     * @param UidDTO|null $uidDTO
     *
     * @return bool
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2018.09.11
     */
    public function cancelOrderAsync(int $orderId, UidDTO $uidDTO = null)
    {
        return EellyClient::request('order/sellerOrderRefactoring', 'cancelOrder', false, $orderId, $uidDTO);
    }

    /**
     * 添加物流信息跟修改物流信息接口.
     *
     * @param string      $invoiceCode 送货编码：快递公司对应的拼音
     * @param string      $invoiceName 送货公司名称
     * @param string      $invoiceNo   送货单号
     * @param array       $orderIds    订单id列表
     * @param UidDTO|null $uidDTO
     *
     * @return bool
     *
     * @requestExample({"invoiceCode": "sf", "invoiceName":"顺丰", "invoiceNo":"12334454", "orderIds":[116,117]})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2018.09.11
     */
    public function updateLogisticsInfo(string $invoiceCode, string $invoiceName, string $invoiceNo, array $orderIds, UidDTO $uidDTO = null): bool
    {
        return EellyClient::request('order/sellerOrderRefactoring', 'updateLogisticsInfo', true, $invoiceCode, $invoiceName, $invoiceNo, $orderIds, $uidDTO);
    }

    /**
     * 添加物流信息跟修改物流信息接口.
     *
     * @param string      $invoiceCode 送货编码：快递公司对应的拼音
     * @param string      $invoiceName 送货公司名称
     * @param string      $invoiceNo   送货单号
     * @param array       $orderIds    订单id列表
     * @param UidDTO|null $uidDTO
     *
     * @return bool
     *
     * @requestExample({"invoiceCode": "sf", "invoiceName":"顺丰", "invoiceNo":"12334454", "orderIds":[116,117]})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2018.09.11
     */
    public function updateLogisticsInfoAsync(string $invoiceCode, string $invoiceName, string $invoiceNo, array $orderIds, UidDTO $uidDTO = null)
    {
        return EellyClient::request('order/sellerOrderRefactoring', 'updateLogisticsInfo', false, $invoiceCode, $invoiceName, $invoiceNo, $orderIds, $uidDTO);
    }

    /**
     * 根据订单id获取订单收货地址信息.
     *
     * @param int         $orderId 订单id
     * @param UidDTO|null $uidDTO
     *
     * @return array
     *
     * @requestExample({"orderId": 50001744 })
     * @returnExample({"orderId":"2","consignee":"test","gbCode":"510000","regionName":"\u5e7f\u4e1c","address":"test","zipcode":"123456","mobile":"","phone":"13430245645"})
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2018.09.18
     */
    public function getOrderInvoiceData(int $orderId, UidDTO $uidDTO = null): array
    {
        return EellyClient::request('order/sellerOrderRefactoring', 'getOrderInvoiceData', true, $orderId, $uidDTO);
    }

    /**
     * 根据订单id获取订单收货地址信息.
     *
     * @param int         $orderId 订单id
     * @param UidDTO|null $uidDTO
     *
     * @return array
     *
     * @requestExample({"orderId": 50001744 })
     * @returnExample({"orderId":"2","consignee":"test","gbCode":"510000","regionName":"\u5e7f\u4e1c","address":"test","zipcode":"123456","mobile":"","phone":"13430245645"})
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2018.09.18
     */
    public function getOrderInvoiceDataAsync(int $orderId, UidDTO $uidDTO = null)
    {
        return EellyClient::request('order/sellerOrderRefactoring', 'getOrderInvoiceData', false, $orderId, $uidDTO);
    }

    /**
     * 卖家更新买家的收货地址信息.
     *
     * @param int    $orderId                   订单id
     * @param array  $invoiceData               收货地址信息
     * @param string $invoiceData["regionName"] 省市区中文
     * @param string $invoiceData["address"]    详细地址
     * @param string $invoiceData["mobile"]     手机号码
     * @param string $invoiceData["consignee"]  收货人姓名
     * @param string $invoiceData["gbCode"]     地区编码id
     * @param UidDTO $uidDTO
     *
     * @return bool
     *
     * @requestExample({"orderId": 50001744, "invoiceData":{"regionName":"广东省 广州市 越秀区","address":"test","mobile":"13430245645","consignee":"demo","gbCode":"440104"}})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2018.09.18
     */
    public function updateOrderInvoiceData(int $orderId, array $invoiceData, UidDTO $uidDTO = null): bool
    {
        return EellyClient::request('order/sellerOrderRefactoring', 'updateOrderInvoiceData', true, $orderId, $invoiceData, $uidDTO);
    }

    /**
     * 卖家更新买家的收货地址信息.
     *
     * @param int    $orderId                   订单id
     * @param array  $invoiceData               收货地址信息
     * @param string $invoiceData["regionName"] 省市区中文
     * @param string $invoiceData["address"]    详细地址
     * @param string $invoiceData["mobile"]     手机号码
     * @param string $invoiceData["consignee"]  收货人姓名
     * @param string $invoiceData["gbCode"]     地区编码id
     * @param UidDTO $uidDTO
     *
     * @return bool
     *
     * @requestExample({"orderId": 50001744, "invoiceData":{"regionName":"广东省 广州市 越秀区","address":"test","mobile":"13430245645","consignee":"demo","gbCode":"440104"}})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2018.09.18
     */
    public function updateOrderInvoiceDataAsync(int $orderId, array $invoiceData, UidDTO $uidDTO = null)
    {
        return EellyClient::request('order/sellerOrderRefactoring', 'updateOrderInvoiceData', false, $orderId, $invoiceData, $uidDTO);
    }

    /**
     * 卖家延长收货时间.
     *
     * @param int    $orderId 订单id
     * @param UidDTO $uidDTO
     *
     * @return bool
     *
     * @requestExample({"orderId": 50001744 })
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2018.09.18
     */
    public function extendReceiptTime(int $orderId, UidDTO $uidDTO = null): bool
    {
        return EellyClient::request('order/sellerOrderRefactoring', 'extendReceiptTime', true, $orderId, $uidDTO);
    }

    /**
     * 卖家延长收货时间.
     *
     * @param int    $orderId 订单id
     * @param UidDTO $uidDTO
     *
     * @return bool
     *
     * @requestExample({"orderId": 50001744 })
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2018.09.18
     */
    public function extendReceiptTimeAsync(int $orderId, UidDTO $uidDTO = null)
    {
        return EellyClient::request('order/sellerOrderRefactoring', 'extendReceiptTime', false, $orderId, $uidDTO);
    }

    /**
     * 搜索已打印订单.
     *
     * > 返回数据说明
     *
     * key         | type    | value
     * ------------ |------  | --------
     * current      | int    | 当前页码
     * last         | int    | 下一页页码
     * totalPages   | int    | 总页码
     * totalItems   | int    | 数据总量
     * items        | array  |当前数据
     * items[]['orderId']     | string | 订单id
     * items[]['ordern']      | string | 订单编号
     * items[]['buyerName']   | string | 买家名
     * items[]['orderStatus'] | int    | 订单状态
     * items[]['orderAmount'] | int    | 实付(分)
     * items[]initGoodsAmount | int    | 原货款(分)
     * items[]initFreight     | int    | 原运款(分)
     * items[]['freight']     | int    | 运费(分)
     * items[]['createdDate'] | date | 订单日期
     * items[]['ifMerge']     | bool | 是否有可合并订单
     * items[]['productCount']| int  | 商品总件数
     * items[]['ifRefund']    | int  | 订单是否申请过退货退款 (1:有 0:没有)
     * items[]['goodsList']   | array | 商品列表
     * items[]['goodsList'][]['goodsName']    | string | 商品名称
     * items[]['goodsList'][]['price']        | int    | 商品价格(分)
     * items[]['goodsList'][]['quantity']     | int    | 商品数量
     * items[]['goodsList'][]['spec']         | string | 商品属性
     * items[]['goodsList'][]['goodsImage']   | string | 商品图片
     *
     *
     * @param int    $tab    订单筛选值  (0: 全部, 1: 待付款, 2: 待成团, 3: 待发货, 4: 待收货, 5: 待评价 6:退货退款 7:已取消)
     * @param int    $page   第几页
     * @param int    $limit  分页大小
     * @param UidDTO $uidDTO uid dto
     *
     * @return array
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @requestExample({"tab":1, "page":2})
     *
     * @returnExample(
     * {
     *     "first": 1,
     *     "before": 1,
     *     "current": 1,
     *     "last": 23,
     *     "next": 2,
     *     "totalPages": 23,
     *     "totalItems": 45,
     *     "limit": 2,
     *     "items": [
     *         {
     *             "orderId": "160",
     *             "orderSn": "1811370443",
     *             "sellerName": "莫琼小店",
     *             "osId": "26",
     *             "likes": 2,
     *             "evaluation": null,
     *             "orderAmount": "2",
     *             "freight": "1",
     *             "createdTime": 1524555994,
     *             "orderStatus": 8,
     *             "createdDate": "2018-04-24",
     *             "ifMerge": true,
     *             "productCount": 100,
     *             "goodsList": [
     *                 {
     *                     "ogId": "20000215",
     *                     "orderId": "160",
     *                     "goodsId": "1450168293",
     *                     "gsId": "195022196",
     *                     "price": "1",
     *                     "quantity": "2",
     *                     "goodsName": "【莫琼小店】 2018新款 针织衫\/毛衣  包邮",
     *                     "goodsImage": "https:\/\/img03.eelly.test\/G02\/M00\/00\/03\/small_ooYBAFqzVV2ICEGRAAER2psay8IAAABggBWRl0AARHy759.jpg",
     *                     "goodsNumber": "2",
     *                     "spec": "颜色:如图色,尺码:均码",
     *                     "createdTime": "1524555994",
     *                     "updateTime": "2018-04-24 15:46:32"
     *                 }
     *             ]
     *         },
     *         {
     *             "orderId": "159",
     *             "orderSn": "1811370443",
     *             "sellerName": "莫琼小店",
     *             "osId": "26",
     *             "likes": 0,
     *             "evaluation": null,
     *             "orderAmount": "2",
     *             "freight": "1",
     *             "createdTime": 1524550065,
     *             "orderStatus": 7,
     *             "createdDate": "2018-04-24",
     *             "ifMerge": true,
     *             "productCount": 100,
     *             "goodsList": [
     *                 {
     *                     "ogId": "20000214",
     *                     "orderId": "159",
     *                     "goodsId": "1450168293",
     *                     "gsId": "195022196",
     *                     "price": "1",
     *                     "quantity": "2",
     *                     "goodsName": "【莫琼小店】 2018新款 针织衫\/毛衣  包邮",
     *                     "goodsImage": "https:\/\/img03.eelly.test\/G02\/M00\/00\/03\/small_ooYBAFqzVV2ICEGRAAER2psay8IAAABggBWRl0AARHy759.jpg",
     *                     "goodsNumber": "2",
     *                     "spec": "颜色:如图色,尺码:均码",
     *                     "createdTime": "1524550066",
     *                     "updateTime": "2018-04-24 14:07:43"
     *                 }
     *             ]
     *         }
     *     ]
     * }
     * )
     */
    public function searchWaybillOrders(string $keywords = '', int $tab = 0, int $page = 1, int $limit = 20, UidDTO $uidDTO = null): array
    {
        return EellyClient::request('order/sellerOrderRefactoring', 'searchWaybillOrders', true, $keywords, $tab, $page, $limit, $uidDTO);
    }

    /**
     * 搜索已打印订单.
     *
     * > 返回数据说明
     *
     * key         | type    | value
     * ------------ |------  | --------
     * current      | int    | 当前页码
     * last         | int    | 下一页页码
     * totalPages   | int    | 总页码
     * totalItems   | int    | 数据总量
     * items        | array  |当前数据
     * items[]['orderId']     | string | 订单id
     * items[]['ordern']      | string | 订单编号
     * items[]['buyerName']   | string | 买家名
     * items[]['orderStatus'] | int    | 订单状态
     * items[]['orderAmount'] | int    | 实付(分)
     * items[]initGoodsAmount | int    | 原货款(分)
     * items[]initFreight     | int    | 原运款(分)
     * items[]['freight']     | int    | 运费(分)
     * items[]['createdDate'] | date | 订单日期
     * items[]['ifMerge']     | bool | 是否有可合并订单
     * items[]['productCount']| int  | 商品总件数
     * items[]['ifRefund']    | int  | 订单是否申请过退货退款 (1:有 0:没有)
     * items[]['goodsList']   | array | 商品列表
     * items[]['goodsList'][]['goodsName']    | string | 商品名称
     * items[]['goodsList'][]['price']        | int    | 商品价格(分)
     * items[]['goodsList'][]['quantity']     | int    | 商品数量
     * items[]['goodsList'][]['spec']         | string | 商品属性
     * items[]['goodsList'][]['goodsImage']   | string | 商品图片
     *
     *
     * @param int    $tab    订单筛选值  (0: 全部, 1: 待付款, 2: 待成团, 3: 待发货, 4: 待收货, 5: 待评价 6:退货退款 7:已取消)
     * @param int    $page   第几页
     * @param int    $limit  分页大小
     * @param UidDTO $uidDTO uid dto
     *
     * @return array
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @requestExample({"tab":1, "page":2})
     *
     * @returnExample(
     * {
     *     "first": 1,
     *     "before": 1,
     *     "current": 1,
     *     "last": 23,
     *     "next": 2,
     *     "totalPages": 23,
     *     "totalItems": 45,
     *     "limit": 2,
     *     "items": [
     *         {
     *             "orderId": "160",
     *             "orderSn": "1811370443",
     *             "sellerName": "莫琼小店",
     *             "osId": "26",
     *             "likes": 2,
     *             "evaluation": null,
     *             "orderAmount": "2",
     *             "freight": "1",
     *             "createdTime": 1524555994,
     *             "orderStatus": 8,
     *             "createdDate": "2018-04-24",
     *             "ifMerge": true,
     *             "productCount": 100,
     *             "goodsList": [
     *                 {
     *                     "ogId": "20000215",
     *                     "orderId": "160",
     *                     "goodsId": "1450168293",
     *                     "gsId": "195022196",
     *                     "price": "1",
     *                     "quantity": "2",
     *                     "goodsName": "【莫琼小店】 2018新款 针织衫\/毛衣  包邮",
     *                     "goodsImage": "https:\/\/img03.eelly.test\/G02\/M00\/00\/03\/small_ooYBAFqzVV2ICEGRAAER2psay8IAAABggBWRl0AARHy759.jpg",
     *                     "goodsNumber": "2",
     *                     "spec": "颜色:如图色,尺码:均码",
     *                     "createdTime": "1524555994",
     *                     "updateTime": "2018-04-24 15:46:32"
     *                 }
     *             ]
     *         },
     *         {
     *             "orderId": "159",
     *             "orderSn": "1811370443",
     *             "sellerName": "莫琼小店",
     *             "osId": "26",
     *             "likes": 0,
     *             "evaluation": null,
     *             "orderAmount": "2",
     *             "freight": "1",
     *             "createdTime": 1524550065,
     *             "orderStatus": 7,
     *             "createdDate": "2018-04-24",
     *             "ifMerge": true,
     *             "productCount": 100,
     *             "goodsList": [
     *                 {
     *                     "ogId": "20000214",
     *                     "orderId": "159",
     *                     "goodsId": "1450168293",
     *                     "gsId": "195022196",
     *                     "price": "1",
     *                     "quantity": "2",
     *                     "goodsName": "【莫琼小店】 2018新款 针织衫\/毛衣  包邮",
     *                     "goodsImage": "https:\/\/img03.eelly.test\/G02\/M00\/00\/03\/small_ooYBAFqzVV2ICEGRAAER2psay8IAAABggBWRl0AARHy759.jpg",
     *                     "goodsNumber": "2",
     *                     "spec": "颜色:如图色,尺码:均码",
     *                     "createdTime": "1524550066",
     *                     "updateTime": "2018-04-24 14:07:43"
     *                 }
     *             ]
     *         }
     *     ]
     * }
     * )
     */
    public function searchWaybillOrdersAsync(string $keywords = '', int $tab = 0, int $page = 1, int $limit = 20, UidDTO $uidDTO = null)
    {
        return EellyClient::request('order/sellerOrderRefactoring', 'searchWaybillOrders', false, $keywords, $tab, $page, $limit, $uidDTO);
    }

    /**
     * 去指定时间内平台的所有下过单的买家Id (迁移旧代码).
     *
     * @param int $time
     *
     * @return array
     *
     * @requestExample({"time":1540474081})
     * @returnExample(["371333","1762341"])
     *
     * @author 李伟权<liweiquan@eelly.net>
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2018.10.26
     */
    public function getPlatOrderBuyerId(int $time): array
    {
        return EellyClient::request('order/sellerOrderRefactoring', 'getPlatOrderBuyerId', true, $time);
    }

    /**
     * 去指定时间内平台的所有下过单的买家Id (迁移旧代码).
     *
     * @param int $time
     *
     * @return array
     *
     * @requestExample({"time":1540474081})
     * @returnExample(["371333","1762341"])
     *
     * @author 李伟权<liweiquan@eelly.net>
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2018.10.26
     */
    public function getPlatOrderBuyerIdAsync(int $time)
    {
        return EellyClient::request('order/sellerOrderRefactoring', 'getPlatOrderBuyerId', false, $time);
    }

    /**
     * 批量获取买家下过的订单数 (迁移旧代码).
     *
     * @param array $buyerIds 买家ids
     * @param array $status   排除的订单状态
     *
     * @return array
     *
     * @requestExample({"buyerIds":[148086,1762341], "status": [6,12]})
     * @returnExample([{"buyer_id":"371333","num":"7"},{"buyer_id":"1762341","num":"46"}])
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2018.10.26
     */
    public function getBuyerOrdersNum(array $buyerIds, array $status = [])
    {
        return EellyClient::request('order/sellerOrderRefactoring', 'getBuyerOrdersNum', true, $buyerIds, $status);
    }

    /**
     * 批量获取买家下过的订单数 (迁移旧代码).
     *
     * @param array $buyerIds 买家ids
     * @param array $status   排除的订单状态
     *
     * @return array
     *
     * @requestExample({"buyerIds":[148086,1762341], "status": [6,12]})
     * @returnExample([{"buyer_id":"371333","num":"7"},{"buyer_id":"1762341","num":"46"}])
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2018.10.26
     */
    public function getBuyerOrdersNumAsync(array $buyerIds, array $status = [])
    {
        return EellyClient::request('order/sellerOrderRefactoring', 'getBuyerOrdersNum', false, $buyerIds, $status);
    }

    /**
     * 获取用户ids 共同进货（下单含支付）最多 的卖家id 倒序(迁移旧代码).
     *
     * @param array $buyerIds 买家ids
     *
     * @return array
     *
     * @requestExample({"buyerIds":[148086,1762341]})
     * @returnExample([{"count":"2","seller_id":"158252"},{"count":"1","seller_id":"148086"},{"count":"1","seller_id":"1760467"}])
     *
     * @author 李伟权<liweiquan@eelly.net>
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2018.10.26
     */
    public function getSameOrderSellerId(array $buyerIds): array
    {
        return EellyClient::request('order/sellerOrderRefactoring', 'getSameOrderSellerId', true, $buyerIds);
    }

    /**
     * 获取用户ids 共同进货（下单含支付）最多 的卖家id 倒序(迁移旧代码).
     *
     * @param array $buyerIds 买家ids
     *
     * @return array
     *
     * @requestExample({"buyerIds":[148086,1762341]})
     * @returnExample([{"count":"2","seller_id":"158252"},{"count":"1","seller_id":"148086"},{"count":"1","seller_id":"1760467"}])
     *
     * @author 李伟权<liweiquan@eelly.net>
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2018.10.26
     */
    public function getSameOrderSellerIdAsync(array $buyerIds)
    {
        return EellyClient::request('order/sellerOrderRefactoring', 'getSameOrderSellerId', false, $buyerIds);
    }

    /**
     * 根据买家id获取最后下单的订单id.(迁移旧代码).
     *
     * @param array $buyerIds 买家ids
     *
     * @return array
     *
     * @requestExample({"buyerIds":[148086,1762341]})
     * @returnExample([{"order_id":"50002282"},{"order_id":"50002279"}])
     *
     * @author 李伟权<liweiquan@eelly.net>
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2018.10.26
     */
    public function getLastOrderId($buyerIds): array
    {
        return EellyClient::request('order/sellerOrderRefactoring', 'getLastOrderId', true, $buyerIds);
    }

    /**
     * 根据买家id获取最后下单的订单id.(迁移旧代码).
     *
     * @param array $buyerIds 买家ids
     *
     * @return array
     *
     * @requestExample({"buyerIds":[148086,1762341]})
     * @returnExample([{"order_id":"50002282"},{"order_id":"50002279"}])
     *
     * @author 李伟权<liweiquan@eelly.net>
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2018.10.26
     */
    public function getLastOrderIdAsync($buyerIds)
    {
        return EellyClient::request('order/sellerOrderRefactoring', 'getLastOrderId', false, $buyerIds);
    }

    /**
     * 根据订单id获取最后下单的卖家id.(迁移旧代码).
     *
     * @param array $orderIds 订单ids
     *
     * @return array
     *
     * @requestExample({"orderIds":[50002279]})
     * @returnExample([{"seller_id":"1760467","buyer_id":"1762341"}])
     *
     * @author 李伟权<liweiquan@eelly.net>
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2018.10.26
     */
    public function getLastOrderSellerId($orderIds): array
    {
        return EellyClient::request('order/sellerOrderRefactoring', 'getLastOrderSellerId', true, $orderIds);
    }

    /**
     * 根据订单id获取最后下单的卖家id.(迁移旧代码).
     *
     * @param array $orderIds 订单ids
     *
     * @return array
     *
     * @requestExample({"orderIds":[50002279]})
     * @returnExample([{"seller_id":"1760467","buyer_id":"1762341"}])
     *
     * @author 李伟权<liweiquan@eelly.net>
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2018.10.26
     */
    public function getLastOrderSellerIdAsync($orderIds)
    {
        return EellyClient::request('order/sellerOrderRefactoring', 'getLastOrderSellerId', false, $orderIds);
    }

    /**
     * 获取退款总数 (迁移旧代码).
     *
     * @param int    $time    时间戳  gmtime()-X*86400
     * @param string $storeId
     *
     * @return number
     *
     * @requestExample({"time":1345678945, "storeId":1760467})
     * @returnExample(4)
     *
     * @author zengxiong<zengxiong@eelly.net>
     *
     * @since  2018.10.29
     */
    public function getTkCount(int $time, int $storeId): int
    {
        return EellyClient::request('order/sellerOrderRefactoring', 'getTkCount', true, $time, $storeId);
    }

    /**
     * 获取退款总数 (迁移旧代码).
     *
     * @param int    $time    时间戳  gmtime()-X*86400
     * @param string $storeId
     *
     * @return number
     *
     * @requestExample({"time":1345678945, "storeId":1760467})
     * @returnExample(4)
     *
     * @author zengxiong<zengxiong@eelly.net>
     *
     * @since  2018.10.29
     */
    public function getTkCountAsync(int $time, int $storeId)
    {
        return EellyClient::request('order/sellerOrderRefactoring', 'getTkCount', false, $time, $storeId);
    }

    /**
     * 根据下单时间获取某个店铺出售的商品信息 (迁移旧代码).
     *
     * @param int   $storeId 店铺id
     * @param array $byTime  添加时间 (['gt', 1538323200])
     *
     * @return array
     *
     * @requestExample({"storeId":1760467, "byTime":["gt", "1540540846"]})
     * @returnExample([5578928,5578930,5578936])
     *
     * @author 黄文广<huangwenguang@eelly.net>
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since  2018.10.29
     */
    public function getTakeOrderGoodsByTime(int $storeId, array $byTime): array
    {
        return EellyClient::request('order/sellerOrderRefactoring', 'getTakeOrderGoodsByTime', true, $storeId, $byTime);
    }

    /**
     * 根据下单时间获取某个店铺出售的商品信息 (迁移旧代码).
     *
     * @param int   $storeId 店铺id
     * @param array $byTime  添加时间 (['gt', 1538323200])
     *
     * @return array
     *
     * @requestExample({"storeId":1760467, "byTime":["gt", "1540540846"]})
     * @returnExample([5578928,5578930,5578936])
     *
     * @author 黄文广<huangwenguang@eelly.net>
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since  2018.10.29
     */
    public function getTakeOrderGoodsByTimeAsync(int $storeId, array $byTime)
    {
        return EellyClient::request('order/sellerOrderRefactoring', 'getTakeOrderGoodsByTime', false, $storeId, $byTime);
    }

    /**
     * 获取90天仲裁数 服务质量2.0新规则.
     *
     * @param int $time    时间90天 gmtime()-X*86400
     * @param int $storeId 店铺id
     *
     * @return int
     *
     * @requestExample({"time":1540449990, "storeId":1760467})
     * @returnExample(1)
     *
     * @author zengxiong<zengxiong@eelly.net>
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since  2018.10.29
     */
    public function getZcCount(int $time, int $storeId = 0): int
    {
        return EellyClient::request('order/sellerOrderRefactoring', 'getZcCount', true, $time, $storeId);
    }

    /**
     * 获取90天仲裁数 服务质量2.0新规则.
     *
     * @param int $time    时间90天 gmtime()-X*86400
     * @param int $storeId 店铺id
     *
     * @return int
     *
     * @requestExample({"time":1540449990, "storeId":1760467})
     * @returnExample(1)
     *
     * @author zengxiong<zengxiong@eelly.net>
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since  2018.10.29
     */
    public function getZcCountAsync(int $time, int $storeId = 0)
    {
        return EellyClient::request('order/sellerOrderRefactoring', 'getZcCount', false, $time, $storeId);
    }

    /**
     * 根据order_id 获取所有买家的id.
     *
     * @param array $orderId 订单id
     *
     * @return array
     *
     * @requestExample({"orderId":[50002202, 50002203]})
     * @returnExample([{"buyer_id":"2108435"},{"buyer_id":"1762341"}])
     *
     * @author 李伟权<liweiquan@eelly.net>
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since  2018.10.29
     */
    public function getByerIdByOrderId(array $orderId): array
    {
        return EellyClient::request('order/sellerOrderRefactoring', 'getByerIdByOrderId', true, $orderId);
    }

    /**
     * 根据order_id 获取所有买家的id.
     *
     * @param array $orderId 订单id
     *
     * @return array
     *
     * @requestExample({"orderId":[50002202, 50002203]})
     * @returnExample([{"buyer_id":"2108435"},{"buyer_id":"1762341"}])
     *
     * @author 李伟权<liweiquan@eelly.net>
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since  2018.10.29
     */
    public function getByerIdByOrderIdAsync(array $orderId)
    {
        return EellyClient::request('order/sellerOrderRefactoring', 'getByerIdByOrderId', false, $orderId);
    }

    /**
     * 根据买家id获取该买家购买的其他商品 (迁移旧代码).
     *
     * @param array $buyerId 买家id
     * @param int   $addTime 下单时间
     * @param int   $limit   数量
     *
     * @return array
     *
     * @requestExample({"buyerId":[1761505, 1762341, 148086], "addTime":1540540846, "limit":2})
     * @returnExample([{"goods_id":"1580931","goods_name":"test","goods_number":"2"},{"goods_id":"1580932","goods_name":"demo","goods_number":"2"}])
     *
     * @author 李伟权<liweiquan@eelly.net>
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since  2018.10.30
     */
    public function getGoodInfoByOrderBuyerId(array $buyerId, int $addTime = 0, int $limit = 10): array
    {
        return EellyClient::request('order/sellerOrderRefactoring', 'getGoodInfoByOrderBuyerId', true, $buyerId, $addTime, $limit);
    }

    /**
     * 根据买家id获取该买家购买的其他商品 (迁移旧代码).
     *
     * @param array $buyerId 买家id
     * @param int   $addTime 下单时间
     * @param int   $limit   数量
     *
     * @return array
     *
     * @requestExample({"buyerId":[1761505, 1762341, 148086], "addTime":1540540846, "limit":2})
     * @returnExample([{"goods_id":"1580931","goods_name":"test","goods_number":"2"},{"goods_id":"1580932","goods_name":"demo","goods_number":"2"}])
     *
     * @author 李伟权<liweiquan@eelly.net>
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since  2018.10.30
     */
    public function getGoodInfoByOrderBuyerIdAsync(array $buyerId, int $addTime = 0, int $limit = 10)
    {
        return EellyClient::request('order/sellerOrderRefactoring', 'getGoodInfoByOrderBuyerId', false, $buyerId, $addTime, $limit);
    }

    /**
     * 统计用户在店铺下过的订单.
     *
     * @param int   $userId    用户ID
     * @param array $sellerIds 店铺ID数组
     *
     * @return array
     *
     * @requestExample({"userId":1762341, "sellerIds":[158252, 1760467]})
     * @returnExample({"158252":"2","1760467":"49"})
     *
     * @author 郑志明<zhengzhiming@eelly.net>
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since  2018.10.30
     */
    public function getOrderNumForUserIdBySellerId(int $userId, array $sellerIds): array
    {
        return EellyClient::request('order/sellerOrderRefactoring', 'getOrderNumForUserIdBySellerId', true, $userId, $sellerIds);
    }

    /**
     * 统计用户在店铺下过的订单.
     *
     * @param int   $userId    用户ID
     * @param array $sellerIds 店铺ID数组
     *
     * @return array
     *
     * @requestExample({"userId":1762341, "sellerIds":[158252, 1760467]})
     * @returnExample({"158252":"2","1760467":"49"})
     *
     * @author 郑志明<zhengzhiming@eelly.net>
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since  2018.10.30
     */
    public function getOrderNumForUserIdBySellerIdAsync(int $userId, array $sellerIds)
    {
        return EellyClient::request('order/sellerOrderRefactoring', 'getOrderNumForUserIdBySellerId', false, $userId, $sellerIds);
    }

    /**
     * 批量获取买家下过单的供应商数量 (迁移旧代码).
     *
     * @param array $buyerIds 买家ids
     *
     * @return array
     *
     * @requestExample({"buyerIds":[1762341, 2108435]})
     * @returnExample([{"buyer_id":"1762341","total":"70"},{"buyer_id":"2108435","total":"7"}])
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2018.10.31
     */
    public function getBuyerSupplierNum(array $buyerIds): array
    {
        return EellyClient::request('order/sellerOrderRefactoring', 'getBuyerSupplierNum', true, $buyerIds);
    }

    /**
     * 批量获取买家下过单的供应商数量 (迁移旧代码).
     *
     * @param array $buyerIds 买家ids
     *
     * @return array
     *
     * @requestExample({"buyerIds":[1762341, 2108435]})
     * @returnExample([{"buyer_id":"1762341","total":"70"},{"buyer_id":"2108435","total":"7"}])
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2018.10.31
     */
    public function getBuyerSupplierNumAsync(array $buyerIds)
    {
        return EellyClient::request('order/sellerOrderRefactoring', 'getBuyerSupplierNum', false, $buyerIds);
    }

    /**
     * 根据userId获取下过单的卖家Id (迁移旧代码).
     *
     * @param int $userId 用户id
     * @param int $sTime  开始时间
     * @param int $eTime  结束时间
     * @param int $limit  限制条数
     *
     * @return array
     *
     * @requestExample({"userId":148086})
     * @returnExample([1762613,1760467])
     *
     * @author 李伟权<liweiquan@eelly.net>
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2018.11.08
     */
    public function getSellerIdByOrder(int $userId, int $sTime = 0, int $eTime = 0, int $limit = 20): array
    {
        return EellyClient::request('order/sellerOrderRefactoring', 'getSellerIdByOrder', true, $userId, $sTime, $eTime, $limit);
    }

    /**
     * 根据userId获取下过单的卖家Id (迁移旧代码).
     *
     * @param int $userId 用户id
     * @param int $sTime  开始时间
     * @param int $eTime  结束时间
     * @param int $limit  限制条数
     *
     * @return array
     *
     * @requestExample({"userId":148086})
     * @returnExample([1762613,1760467])
     *
     * @author 李伟权<liweiquan@eelly.net>
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2018.11.08
     */
    public function getSellerIdByOrderAsync(int $userId, int $sTime = 0, int $eTime = 0, int $limit = 20)
    {
        return EellyClient::request('order/sellerOrderRefactoring', 'getSellerIdByOrder', false, $userId, $sTime, $eTime, $limit);
    }

    /**
     * 待打印订单列表
     * 
     * > conditions 筛选条件
     * 
     * key | type | value
     * --- | ---- | -----
     * orderSn | string | 订单号
     * searchStr | string | 搜索字段：买家
     * startTime | int | 下单开始时间戳
     * endTime | int | 下单结束时间戳
     * orderBy | string | 升降序 desc: 降序 asc:升序
     * 
     * > 返回数据说明
     * 
     * key | type | value 
     * --- | ---- | -----
     * first | int | 分页：第一页
     * before | int | 分页：上一页
     * current | int | 分页：当前页
     * last | int | 分页：最后一页
     * next | int | 分页：下一页
     * totalPages | int | 分页：全部页
     * totalItems | int | 分页：总数量
     * limit | int | 每页限制数量
     * items | array | 内容
     * 
     * > items 内容数据说明
     * 
     * key | type | value
     * --- | ---- | -----
     * buyerName | string | 买家信息
     * mobile | string | 收件人手机号码
     * consignee | string | 收货人姓名
     * address | string | 收货地址
     * ordersOrderAmount | float | 实付款
     * ordersStyleCount | int | 总款数
     * ordersTotalCount | int | 总件数
     * ordersCount | int | 订单总笔数
     * orders | array | 订单列表数据
     * 
     * > orders 数据
     * 
     * key | type | value
     * --- | ---- | -----
     * orderId | int | 订单id
     * orderSn | string | 订单号
     * buyerName | string | 买家姓名
     * buyerId | int | 买家id
     * osId | int | 订单状态
     * orderAmount | float | 订单价格
     * createdTime | int | 下单时间戳
     * waybillFlag | int | 电子面单打印标记 0:未打印 1:已打印
     * requireLikes | int | 积赞数量？
     * memo | string | 买家留言
     * isFreightCollect | int | 运费是否到付 0:否 1:是
     * avatar | string | 头像链接
     * orderStatus | int | 订单状态
     * createdData | string | 创建日期
     * styleCount | int | 订单总款数
     * totalCount | int | 订单总件数
     *
     * @param integer $storeId 店铺id
     * @param array $conditions 筛选条件
     * @return array
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.12.17
     */
    public function waitToPrintOrderList(int $storeId, array $conditions = []): array
    {
        return EellyClient::request('order/sellerOrderRefactoring', 'waitToPrintOrderList', true, $storeId, $conditions);
    }

    /**
     * 待打印订单列表
     * 
     * > conditions 筛选条件
     * 
     * key | type | value
     * --- | ---- | -----
     * orderSn | string | 订单号
     * searchStr | string | 搜索字段：买家
     * startTime | int | 下单开始时间戳
     * endTime | int | 下单结束时间戳
     * orderBy | string | 升降序 desc: 降序 asc:升序
     * 
     * > 返回数据说明
     * 
     * key | type | value 
     * --- | ---- | -----
     * first | int | 分页：第一页
     * before | int | 分页：上一页
     * current | int | 分页：当前页
     * last | int | 分页：最后一页
     * next | int | 分页：下一页
     * totalPages | int | 分页：全部页
     * totalItems | int | 分页：总数量
     * limit | int | 每页限制数量
     * items | array | 内容
     * 
     * > items 内容数据说明
     * 
     * key | type | value
     * --- | ---- | -----
     * buyerName | string | 买家信息
     * mobile | string | 收件人手机号码
     * consignee | string | 收货人姓名
     * address | string | 收货地址
     * ordersOrderAmount | float | 实付款
     * ordersStyleCount | int | 总款数
     * ordersTotalCount | int | 总件数
     * ordersCount | int | 订单总笔数
     * orders | array | 订单列表数据
     * 
     * > orders 数据
     * 
     * key | type | value
     * --- | ---- | -----
     * orderId | int | 订单id
     * orderSn | string | 订单号
     * buyerName | string | 买家姓名
     * buyerId | int | 买家id
     * osId | int | 订单状态
     * orderAmount | float | 订单价格
     * createdTime | int | 下单时间戳
     * waybillFlag | int | 电子面单打印标记 0:未打印 1:已打印
     * requireLikes | int | 积赞数量？
     * memo | string | 买家留言
     * isFreightCollect | int | 运费是否到付 0:否 1:是
     * avatar | string | 头像链接
     * orderStatus | int | 订单状态
     * createdData | string | 创建日期
     * styleCount | int | 订单总款数
     * totalCount | int | 订单总件数
     *
     * @param integer $storeId 店铺id
     * @param array $conditions 筛选条件
     * @return array
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.12.17
     */
    public function waitToPrintOrderListAsync(int $storeId, array $conditions = [])
    {
        return EellyClient::request('order/sellerOrderRefactoring', 'waitToPrintOrderList', false, $storeId, $conditions);
    }

    /**
     * 已经打印订单列表
     * 
     * > conditions 筛选条件
     * 
     * key | type | value
     * --- | ---- | -----
     * orderSn | string | 订单号
     * searchStr | string | 搜索字段：买家
     * startTime | int | 下单开始时间戳
     * endTime | int | 下单结束时间戳
     * invoiceNo | string | 快递单号
     * orderBy | string | 升降序 desc: 降序 asc:升序
     * 
     * > 返回数据说明
     * 
     * key | type | value 
     * --- | ---- | -----
     * first | int | 分页：第一页
     * before | int | 分页：上一页
     * current | int | 分页：当前页
     * last | int | 分页：最后一页
     * next | int | 分页：下一页
     * totalPages | int | 分页：全部页
     * totalItems | int | 分页：总数量
     * limit | int | 每页限制数量
     * items | array | 内容
     * 
     * > items 内容数据说明
     * 
     * key | type | value
     * --- | ---- | -----
     * buyerName | string | 买家信息
     * mobile | string | 收件人手机号码
     * consignee | string | 收货人姓名
     * address | string | 收货地址
     * ordersOrderAmount | float | 实付款
     * ordersStyleCount | int | 总款数
     * ordersTotalCount | int | 总件数
     * ordersCount | int | 订单总笔数
     * orders | array | 订单列表数据
     * 
     * > orders 数据
     * 
     * key | type | value
     * --- | ---- | -----
     * orderId | int | 订单id
     * orderSn | string | 订单号
     * buyerName | string | 买家姓名
     * buyerId | int | 买家id
     * osId | int | 订单状态
     * orderAmount | float | 订单价格
     * createdTime | int | 下单时间戳
     * waybillFlag | int | 电子面单打印标记 0:未打印 1:已打印
     * requireLikes | int | 积赞数量？
     * memo | string | 买家留言
     * isFreightCollect | int | 运费是否到付 0:否 1:是
     * avatar | string | 头像链接
     * orderStatus | int | 订单状态
     * createdData | string | 创建日期
     * styleCount | int | 订单总款数
     * totalCount | int | 订单总件数
     *
     * @param integer $storeId 店铺id
     * @param array $conditions 筛选条件
     * @return array
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.12.19
     */
    public function alreadyPrintOrderList(int $storeId, array $conditions = []): array
    {
        return EellyClient::request('order/sellerOrderRefactoring', 'alreadyPrintOrderList', true, $storeId, $conditions);
    }

    /**
     * 已经打印订单列表
     * 
     * > conditions 筛选条件
     * 
     * key | type | value
     * --- | ---- | -----
     * orderSn | string | 订单号
     * searchStr | string | 搜索字段：买家
     * startTime | int | 下单开始时间戳
     * endTime | int | 下单结束时间戳
     * invoiceNo | string | 快递单号
     * orderBy | string | 升降序 desc: 降序 asc:升序
     * 
     * > 返回数据说明
     * 
     * key | type | value 
     * --- | ---- | -----
     * first | int | 分页：第一页
     * before | int | 分页：上一页
     * current | int | 分页：当前页
     * last | int | 分页：最后一页
     * next | int | 分页：下一页
     * totalPages | int | 分页：全部页
     * totalItems | int | 分页：总数量
     * limit | int | 每页限制数量
     * items | array | 内容
     * 
     * > items 内容数据说明
     * 
     * key | type | value
     * --- | ---- | -----
     * buyerName | string | 买家信息
     * mobile | string | 收件人手机号码
     * consignee | string | 收货人姓名
     * address | string | 收货地址
     * ordersOrderAmount | float | 实付款
     * ordersStyleCount | int | 总款数
     * ordersTotalCount | int | 总件数
     * ordersCount | int | 订单总笔数
     * orders | array | 订单列表数据
     * 
     * > orders 数据
     * 
     * key | type | value
     * --- | ---- | -----
     * orderId | int | 订单id
     * orderSn | string | 订单号
     * buyerName | string | 买家姓名
     * buyerId | int | 买家id
     * osId | int | 订单状态
     * orderAmount | float | 订单价格
     * createdTime | int | 下单时间戳
     * waybillFlag | int | 电子面单打印标记 0:未打印 1:已打印
     * requireLikes | int | 积赞数量？
     * memo | string | 买家留言
     * isFreightCollect | int | 运费是否到付 0:否 1:是
     * avatar | string | 头像链接
     * orderStatus | int | 订单状态
     * createdData | string | 创建日期
     * styleCount | int | 订单总款数
     * totalCount | int | 订单总件数
     *
     * @param integer $storeId 店铺id
     * @param array $conditions 筛选条件
     * @return array
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.12.19
     */
    public function alreadyPrintOrderListAsync(int $storeId, array $conditions = [])
    {
        return EellyClient::request('order/sellerOrderRefactoring', 'alreadyPrintOrderList', false, $storeId, $conditions);
    }

    /**
     * 电子面单打印
     *
     * @param integer $storeId 店铺id
     * @param array $orderIds 订单id数组
     * @param array $conditions 其他条件
     * @return array
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.12.20
     */
    public function newPrintOrders(int $storeId, array $orderIds, array $conditions = []): array
    {
        return EellyClient::request('order/sellerOrderRefactoring', 'newPrintOrders', true, $storeId, $orderIds, $conditions);
    }

    /**
     * 电子面单打印
     *
     * @param integer $storeId 店铺id
     * @param array $orderIds 订单id数组
     * @param array $conditions 其他条件
     * @return array
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.12.20
     */
    public function newPrintOrdersAsync(int $storeId, array $orderIds, array $conditions = [])
    {
        return EellyClient::request('order/sellerOrderRefactoring', 'newPrintOrders', false, $storeId, $orderIds, $conditions);
    }

    /**
     * 原电子面单打印
     *
     * @param integer $storeId 店铺id
     * @param array $orderIds
     * @param array $conditions
     * @return array
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.12.20
     */
    public function sourcePrintOrders(int $storeId, array $orderIds, array $conditions = []): array
    {
        return EellyClient::request('order/sellerOrderRefactoring', 'sourcePrintOrders', true, $storeId, $orderIds, $conditions);
    }

    /**
     * 原电子面单打印
     *
     * @param integer $storeId 店铺id
     * @param array $orderIds
     * @param array $conditions
     * @return array
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.12.20
     */
    public function sourcePrintOrdersAsync(int $storeId, array $orderIds, array $conditions = [])
    {
        return EellyClient::request('order/sellerOrderRefactoring', 'sourcePrintOrders', false, $storeId, $orderIds, $conditions);
    }

    /**
     * 根据传过来的条件，返回以同一个买家id而且地址一样的订单作为唯一键的发货单数据列表
     *
     * @param array $conditions 查询条件
     * @return array
     *
     * @requestExample({"orderIds":[50002444, 50002202,50002203,50002206]})
     * @returnExample([{"orderId":"50002444","orderSn":"2154158674068034","buyerName":"yumei1","buyerId":"1762341","sellerId":"148086","osId":"2","orderAmount":"10000","createdTime":"1541586740","waybillFlag":"0","requireLikes":"0","gbCode":"150521","regionName":"\u5185\u8499\u53e4\u81ea\u6cbb\u533a \u901a\u8fbd\u5e02 \u79d1\u5c14\u6c81\u5de6\u7ffc\u4e2d\u65d7","address":"\u6d4b\u8bd5\u4f60\u559c\u6b22","mobile":"13710198271","consignee":"\u6536\u83b7\u4eba"},{"orderId":"50002202","orderSn":"2154034430329778","buyerName":"sixdec","buyerId":"2108435","sellerId":"148086","osId":"2","orderAmount":"4503","createdTime":"1540344303","waybillFlag":"0","requireLikes":"0","gbCode":"440104","regionName":"\u5e7f\u4e1c\u7701 \u5e7f\u5dde\u5e02 \u8d8a\u79c0\u533a","address":"\u5e7f\u5dde\u5927\u9053\u4e2d599\u53f7","mobile":"13427587735","consignee":"\u51af\u5148\u751f"}])
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.12.21
     */
    public function listInvoiceData(array $conditions = []):array
    {
        return EellyClient::request('order/sellerOrderRefactoring', __FUNCTION__, true, $conditions);
    }

    /**
     * @inheritdoc
     */
    public function listInvoiceDataAsync(array $conditions = []):array
    {
        return EellyClient::request('order/sellerOrderRefactoring', __FUNCTION__, false, $conditions);
    }

    /**
     * 根据传过来的订单id还有条件，返回同一个买家用户id而且地址一样的订单数据的所有订单id
     *
     * @param int $orderId  订单id
     * @param string $condition 查询条件
     * @param array $bind 绑定参数
     * @return array
     *
     * @requestExample({"orderId":50002203, "condition":"order_id IN ({orderIds:array})", "bind":{"orderIds":[50002202,50002203,50002206]}})
     * @returnExample(["50002224","50002237","50002239"])
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.12.21
     */
    public function getMergeOrderIds(int $orderId, string $condition, array $bind = []): array
    {
        return EellyClient::request('order/sellerOrderRefactoring', 'getMergeOrderIds', true, $orderId, $condition, $bind);
    }

    /**
     * 根据传过来的订单id还有条件，返回同一个买家用户id而且地址一样的订单数据的所有订单id
     *
     * @param int $orderId  订单id
     * @param string $condition 查询条件
     * @param array $bind 绑定参数
     * @return array
     *
     * @requestExample({"orderId":50002203, "condition":"order_id IN ({orderIds:array})", "bind":{"orderIds":[50002202,50002203,50002206]}})
     * @returnExample(["50002224","50002237","50002239"])
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.12.21
     */
    public function getMergeOrderIdsAsync(int $orderId, string $condition, array $bind = [])
    {
        return EellyClient::request('order/sellerOrderRefactoring', 'getMergeOrderIds', false, $orderId, $condition, $bind);
    }

    /**
     * 添加物流信息跟修改物流信息接口
     *
     * @param string $invoiceCode  送货编码：快递公司对应的拼音
     * @param string $invoiceName  送货公司名称
     * @param string $invoiceNo  送货单号
     * @param array $orderIds  订单id列表
     * @param UidDTO|null $uidDTO
     * @return bool
     * 
     * @internal
     * @Async(route=updateLogisticsInfoAsync)
     * 
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.5.24
     */
    public function updateLogisticsInfoNotStoreId(string $invoiceCode, string $invoiceName, string $invoiceNo, array $orderIds, int $storeId): bool
    {
        return EellyClient::request('order/sellerOrderRefactoring', 'updateLogisticsInfoNotStoreId', true, $invoiceCode, $invoiceName, $invoiceNo, $orderIds, $storeId);
    }

    /**
     * 添加物流信息跟修改物流信息接口
     *
     * @param string $invoiceCode  送货编码：快递公司对应的拼音
     * @param string $invoiceName  送货公司名称
     * @param string $invoiceNo  送货单号
     * @param array $orderIds  订单id列表
     * @param UidDTO|null $uidDTO
     * @return bool
     * 
     * @internal
     * @Async(route=updateLogisticsInfoAsync)
     * 
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.5.24
     */
    public function updateLogisticsInfoNotStoreIdAsync(string $invoiceCode, string $invoiceName, string $invoiceNo, array $orderIds, int $storeId)
    {
        return EellyClient::request('order/sellerOrderRefactoring', 'updateLogisticsInfoNotStoreId', false, $invoiceCode, $invoiceName, $invoiceNo, $orderIds, $storeId);
    }

    /**
     * @return self
     */
    public static function getInstance(): self
    {
        static $instance;
        if (null === $instance) {
            $instance = new self();
        }

        return $instance;
    }
}