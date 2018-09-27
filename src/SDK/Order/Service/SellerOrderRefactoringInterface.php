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

namespace Eelly\SDK\Order\Service;

use Eelly\DTO\UidDTO;

/**
 * 卖家订单功能.(重构)
 *
 * @author hehui<hehui@eelly.com>
 * @author zhangyingdi<zhangyingdi@eelly.com>
 */
interface SellerOrderRefactoringInterface
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
    public function listOrderData(array $params, UidDTO $uidDTO = null): array;

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
    public function listPcOrderData(array $params, UidDTO $uidDTO = null):array;

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
    public function listOrderStatusNum(UidDTO $uidDTO = null): array;

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
    public function getOrderDetail(int $orderId, UidDTO $uidDTO = null): array;

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
    public function listMergerOrders(int $orderId, UidDTO $uidDTO = null): array;

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
    public function changeOrderPrice(int $orderId, int $price, int $freight, UidDTO $uidDTO = null): bool;

    /**
     * 卖家取消订单
     *
     * @param int $orderId  订单id
     * @param UidDTO|null $uidDTO
     * @return bool
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.09.11
     */
    public function cancelOrder(int $orderId, UidDTO $uidDTO):bool;

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
     * @requestExample({"invoiceCode": "sf", "invoiceName":"顺丰", "invoiceNo":"12334454", "orderIds":[116,117]})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.09.11
     */
    public function updateLogisticsInfo(string $invoiceCode, string $invoiceName, string $invoiceNo, array $orderIds, UidDTO $uidDTO = null): bool;

    /**
     * 根据订单id获取订单收货地址信息
     *
     * @param int $orderId 订单id
     * @param UidDTO|null $uidDTO
     * @return array
     *
     * @requestExample({"orderId": 50001744 })
     * @returnExample({"orderId":"2","consignee":"test","gbCode":"510000","regionName":"\u5e7f\u4e1c","address":"test","zipcode":"123456","mobile":"","phone":"13430245645"})
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.09.18
     */
    public function getOrderInvoiceData(int $orderId, UidDTO $uidDTO):array;

    /**
     * 卖家更新买家的收货地址信息
     *
     * @param int $orderId  订单id
     * @param array $invoiceData 收货地址信息
     * @param string $invoiceData["regionName"] 省市区中文
     * @param string $invoiceData["address"] 详细地址
     * @param string $invoiceData["mobile"] 手机号码
     * @param string $invoiceData["consignee"] 收货人姓名
     * @param string $invoiceData["gbCode"] 地区编码id
     * @param UidDTO $uidDTO
     * @return bool
     *
     * @requestExample({"orderId": 50001744, "invoiceData":{"regionName":"广东省 广州市 越秀区","address":"test","mobile":"13430245645","consignee":"demo","gbCode":"440104"}})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.09.18
     */
    public function updateOrderInvoiceData(int $orderId, array $invoiceData, UidDTO $uidDTO):bool;

    /**
     * 卖家延长收货时间
     *
     * @param int $orderId  订单id
     * @param UidDTO $uidDTO
     * @return bool
     *
     * @requestExample({"orderId": 50001744 })
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.09.18
     */
    function extendReceiptTime(int $orderId, UidDTO $uidDTO):bool;

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
    public function searchWaybillOrders(string $keywords = '', int $tab = 0, int $page = 1, int $limit = 20, UidDTO $uidDTO = null): array;
}
