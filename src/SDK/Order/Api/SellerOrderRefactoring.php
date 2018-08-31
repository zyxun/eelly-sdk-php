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
use Eelly\DTO\UidDTO;
use Eelly\SDK\Order\Service\SellerOrderRefactoringInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class SellerOrderRefactoring implements SellerOrderRefactoringInterface
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
     * 0      | 未知（错误值）
     * 1      | 待付款
     * 2      | 待分享
     * 3      | 待发货
     * 4      | 待收货
     * 5      | 待评价
     * 6      | 已评价
     * 7      | 集赞失败,已退款
     * 8      | 已退款, 交易取消
     * 9      | 未付款, 交易取消
     * 11     | 买家申请退款
     * 12     | 买家申请退货退款
     * 13     | 等待买家退货
     * 14     | 等待我收退货
     * 15     | 我已拒绝退款
     * 16     | 我已拒绝退货
     *
     * @param array $params 参数数组
     * @param int $params['tab']  请求的订单列表栏目
     * @param string $params['keyword'] 搜索关键字
     * @param int $params['page'] 请求的页码
     * @param int $params['limit'] 每页显示的数量
     * @param UidDTO|null $uidDTO
     * @return array
     *
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
        return EellyClient::request('order/sellerOrder', __FUNCTION__, true, $params, $uidDTO);
    }

    /**
     * {@inheritdoc}
     */
    public function listOrderDataAsync(array $params, UidDTO $uidDTO = null): array
    {
        return EellyClient::request('order/sellerOrder', __FUNCTION__, false, $params, $uidDTO);
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
     * 0      | 未知（错误值）
     * 1      | 待付款
     * 2      | 待分享
     * 3      | 待发货
     * 4      | 待收货
     * 5      | 待评价
     * 6      | 已评价
     * 7      | 集赞失败,已退款
     * 8      | 已退款, 交易取消
     * 9      | 未付款, 交易取消
     * 11     | 买家申请退款
     * 12     | 买家申请退货退款
     * 13     | 等待买家退货
     * 14     | 等待我收退货
     * 15     | 我已拒绝退款
     * 16     | 我已拒绝退货
     *
     * @param array $params 参数数组
     * @param int $params['tab']  请求的订单列表栏目
     * @param array $params['keywords'] 搜索关键字
     * @param int $params['page'] 请求的页码
     * @param int $params['limit'] 每页显示的数量
     * @param UidDTO|null $uidDTO
     * @return array
     *
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
    public function listPcOrderData(array $params, UidDTO $uidDTO = null):array
    {
        return EellyClient::request('order/sellerOrder', __FUNCTION__, true, $params, $uidDTO);
    }

    /**
     * {@inheritdoc}
     */
    public function listPcOrderDataAsync(array $params, UidDTO $uidDTO = null):array
    {
        return EellyClient::request('order/sellerOrder', __FUNCTION__, false, $params, $uidDTO);
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
        return EellyClient::request('order/sellerOrder', __FUNCTION__, true, $uidDTO);
    }

    /**
     * {@inheritdoc}
     */
    public function listOrderStatusNumAsync(UidDTO $uidDTO = null): array
    {
        return EellyClient::request('order/sellerOrder', __FUNCTION__, false, $uidDTO);
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
     * 0      | 未知（错误值）
     * 1      | 待付款
     * 2      | 待分享
     * 3      | 待发货
     * 4      | 待收货
     * 5      | 待评价
     * 6      | 已评价
     * 7      | 集赞失败,已退款
     * 8      | 已退款, 交易取消
     * 9      | 未付款, 交易取消
     * 11     | 买家申请退款
     * 12     | 买家申请退货退款
     * 13     | 等待买家退货
     * 14     | 等待我收退货
     * 15     | 我已拒绝退款
     * 16     | 我已拒绝退货
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
        return EellyClient::request('order/sellerOrder', __FUNCTION__, true, $orderId, $uidDTO);
    }

    /**
     * {@inheritdoc}
     */
    public function getOrderDetailAsync(int $orderId, UidDTO $uidDTO = null): array
    {
        return EellyClient::request('order/sellerOrder', __FUNCTION__, false, $orderId, $uidDTO);
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
     * 1      | 待付款
     * 2      | 待分享
     * 3      | 待发货
     * 4      | 待收货
     * 5      | 待评价
     * 6      | 已评价
     * 7      | 集赞失败,已退款
     * 8      | 已退款, 交易取消
     * 9      | 未付款, 交易取消
     * 11     | 买家申请退款
     * 12     | 买家申请退货退款
     * 13     | 等待买家退货
     * 14     | 等待我收退货
     * 15     | 我已拒绝退款
     * 16     | 我已拒绝退货
     *
     * @param int         $orderId 订单id
     * @param UidDTO|null $uidDTO  uid dto
     *
     * @return array 订单列表
     *
     * @author hehui<hehui@eelly.net>
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
        return EellyClient::request('order/sellerOrder', __FUNCTION__, true, $orderId, $uidDTO);
    }

    /**
     * {@inheritdoc}
     */
    public function listMergerOrdersAsync(int $orderId, UidDTO $uidDTO = null): array
    {
        return EellyClient::request('order/sellerOrder', __FUNCTION__, false, $orderId, $uidDTO);
    }

    /**
     * 卖家修改订单价格
     *
     * @param int $orderId 订单id
     * @param int $price  修改后的订单价格
     * @param int $freight 修改后的运费
     * @param UidDTO|null $uidDTO
     * @return bool
     *
     * @requestExample({"orderId": 160, "price":1000, "freight":10})
     * @returnExample(true)
     *
     * @author hehui<hehui@eelly.net>
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.08.31
     */
    public function changeOrderPrice(int $orderId, int $price, int $freight, UidDTO $uidDTO = null): bool
    {
        return EellyClient::request('order/sellerOrder', __FUNCTION__, true, $orderId, $price, $freight, $uidDTO);
    }

    /**
     * {@inheritdoc}
     */
    public function changeOrderPriceAsync(int $orderId, int $price, int $freight, UidDTO $uidDTO = null): bool
    {
        return EellyClient::request('order/sellerOrder', __FUNCTION__, false, $orderId, $price, $freight, $uidDTO);
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