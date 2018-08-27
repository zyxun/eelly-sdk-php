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
 * 买家订单功能(重构).
 *
 * @author hehui<hehui@eelly.com>
 * @author zhangyingdi<zhangyingdi@eelly.com>
 */
interface BuyerOrderRefactoringInterface
{

    /**
     * 获取移动端订单列表
     *
     * @param array $params 参数数组
     * @param string $params['client'] 订单请求客户端 (wap端:wap, pc端:pc, 衣联小程序:eelly,店+:buyer,百里挑一:blty,龙瑞购:lrg)
     * @param int $params['tab']  请求的订单列表栏目
     * @param string $params['keyword'] 搜索关键字
     * @param array $params['keyword']
     * @param int $params['page'] 请求的页码
     * @param int $params['limit'] 每页显示的数量
     * @param UidDTO|null $uidDTO
     * @return array
     *
     *
     * > 选项栏(tab)
     *
     * 值      |状态说明
     * -------|----------
     * 0      | 全部
     * 1      | 待付款
     * 2      | 集赞中待分享
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
     * 10     | 申请退货退款
     * 11     | 重新申请退货退款
     * 12     | 卖家拒绝退款
     * 13     | 卖家拒绝退货退款
     * 14     | 卖家同意退退货，等待买家发货
     * 15     | 买家已发货，等待卖家收退货
     *
     *
     * @requestExample({"params":{"client":"wap","tab":0,"keyword":"","page":1,"limit":20}})
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
     *             "sellerName": "莫琼小店",
     *             "osId": "26",
     *             "likes": 2,
     *             "evaluation": null,
     *             "orderAmount": "2",
     *             "freight": "1",
     *             "createdTime": 1524555994,
     *             "orderStatus": 8,
     *             "createdDate": "2018-04-24",
     *             "totalCount":3,
     *             "styleCount":2,
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
     *             "sellerName": "莫琼小店",
     *             "osId": "26",
     *             "likes": 0,
     *             "evaluation": null,
     *             "orderAmount": "2",
     *             "freight": "1",
     *             "createdTime": 1524550065,
     *             "orderStatus": 7,
     *             "createdDate": "2018-04-24",
     *             "totalCount":3,
     *             "styleCount":2,
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
     *
     * @author hehui<hehui@eelly.net>
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.08.10
     */
    public function listOrderData(array $params, UidDTO $uidDTO = null):array;

    /**
     * 获取PC端订单列表
     *
     * @param array $params 参数数组
     * @param string $params['client'] 订单请求客户端 (wap端:wap, pc端:pc, 衣联小程序:eelly,店+:buyer,百里挑一:blty,龙瑞购:lrg)
     * @param int $params['tab']  请求的订单列表栏目
     * @param array $params['keywords'] 搜索关键字
     * @param int $params['page'] 请求的页码
     * @param int $params['limit'] 每页显示的数量
     * @param UidDTO|null $uidDTO
     * @return array
     *
     * > 选项栏(tab)
     *
     * 值      |状态说明
     * -------|----------
     * 0      | 全部
     * 1      | 待付款
     * 2      | 集赞中待分享
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
     * 10     | 申请退货退款
     * 11     | 重新申请退货退款
     * 12     | 卖家拒绝退款
     * 13     | 卖家拒绝退货退款
     * 14     | 卖家同意退退货，等待买家发货
     * 15     | 买家已发货，等待卖家收退货
     *
     *
     * @requestExample({"params":{"client":"wap","tab":0,"keywords":{"orderSn":"123345"},"page":1,"limit":20}})
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
     *             "sellerName": "莫琼小店",
     *             "osId": "26",
     *             "likes": 2,
     *             "evaluation": null,
     *             "orderAmount": "2",
     *             "freight": "1",
     *             "createdTime": 1524555994,
     *             "orderStatus": 8,
     *             "createdDate": "2018-04-24",
     *             "totalCount":3,
     *             "styleCount":2,
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
     *             "sellerName": "莫琼小店",
     *             "osId": "26",
     *             "likes": 0,
     *             "evaluation": null,
     *             "orderAmount": "2",
     *             "freight": "1",
     *             "createdTime": 1524550065,
     *             "orderStatus": 7,
     *             "createdDate": "2018-04-24",
     *             "totalCount":3,
     *             "styleCount":2,
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
     *
     * @author hehui<hehui@eelly.net>
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.08.10
     */
    public function listPcOrderData(array $params, UidDTO $uidDTO = null):array;

    /**
     * 获取我的订单统计信息(买家).
     *
     * > 返回数据说明
     *
     * key                | type    | value
     * ------------------ | ------- | --------
     * needPay            | int     | 待付款
     * needShare          | int     | 集赞中 待分享
     * needShipping       | int     | 待发货
     * needReceiving      | int     | 待收货
     * needRefund         | int     | 退货退款
     *
     * @param string $client 订单请求客户端 (wap端:wap, pc端:pc, 衣联小程序:eelly,店+:buyer,百里挑一:blty,龙瑞购:lrg)
     * @param UidDTO|null $uidDTO uid dto(表示需要登录)
     *
     * @return array
     *
     * @requestExample({"client":"wap"})
     * @returnExample(
     * {
     *     "needPay": 32,
     *     "needShare": 8,
     *     "needShipping": 0,
     *     "needReceiving": 0,
     *     "needRefund":2
     * }
     * )
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.08.10
     */
    public function listOrderStatusNum(string $client, UidDTO $uidDTO = null): array;

    /**
     * 小程序订单详情(买家).
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
     * sellerName      | string   | 卖家名称
     * orderAmount     | int      | 实收(分)
     * initGoodsAmount | int      | 货款(分)
     * freight         | int      | 运费(分)
     * initFreight     | int      | 原运费(分)
     * discountAmount  | int      | 优惠金额(分)
     * changePrice     | int      | 改价
     * orderSn         | string   | 订单号
     * createdDatetime | Datetime | 下单日期时间
     * payDatetime     | Datetime | 支付日期时间
     * shipDatetime    | Datetime | 发货日期时间
     * orderfrom       | string   | 订单来源
     * invoiceName     | stirng   | 送货公司名称
     * logisticsName   | string   | 送货方式
     * goodsCount      | int       | 商品款数
     * productCount    | int       | 商品总件数
     * extension       | int       | 订单业务标识：0 普通订单  1 团购订单
     * expressStatus   | string    | 最新物流状态
     * expressTime     | Datetime  | 最新物流时间
     * countdown       | int       | 倒计时（秒），当orderStatus = 1 或 2 或 4 或 5
     * timeList                       | array     | 时间列表
     * timeList['createdTime']        | int       | 下单时间
     * timeList['payTime']            | int       | 付款时间
     * timeList['shareTime']          | int       | 集赞成功时间
     * timeList['shipTime']           | int       | 发货时间
     * timeList['receiveTime']        | int       | 收货时间
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
     * 10     | 申请退货退款
     * 11     | 重新申请退货退款
     * 12     | 卖家拒绝退款
     * 13     | 卖家拒绝退货退款
     * 14     | 卖家同意退退货，等待买家发货
     * 15     | 买家已发货，等待卖家收退货
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
     *     "sellerName": "莫琼小店",
     *     "osId": "26",
     *     "orderAmount": "2",
     *     "payTime": "1524556066",
     *     "shipTime": "0",
     *     "freight": "1",
     *     "createdTime": 1524555994,
     *     "remark": "",
     *     "fromFlag": "0",
     *     "likes": "2",
     *     "evaluation": null,
     *     "initGoodsAmount": "2",
     *     "discountAmount": "0",
     *     "initAmount": "0",
     *     "consignee": "蓝厨卫",
     *     "mobile": "11113131313",
     *     "regionName": "山西省 晋城市 沁水县",
     *     "address": "2222",
     *     "invoiceName": "韵达1",
     *     "logisticsName": "",
     *     "orderStatus": 8,
     *     "createdDatetime": "2018-04-24 07:46:34",
     *     "payDatetime": "2018-04-24 07:47:46",
     *     "shipDatetime": "1970-01-01 00:00:00",
     *     "changePrice": 1,
     *     "orderfrom": "未知",
     *     "goodsCount": 1,
     *     "productCount": 0,
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
     *     ],
     *     "expressStatus": "湖南省炎陵县公司快件已被 已签收 签收",
     *     "countdown": 14586655,
     *     "timeList": [{
     *         "createdTime": 1524555994,
     *         "payTime": "1524556066",
     *         "shareTime": 1524899478,
     *         "shipTime": 0,
     *         "receiveTime": 0
     *     }]
     * }
     * )
     *
     * @author hehui<hehui@eelly.net>
     * @author zhangyingdi<zhangyingdi@eelly.net>
     */
    public function getOrderDetail(int $orderId, UidDTO $uidDTO = null): array;

    /**
     * 获取PC端订单详情(买家).
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
     * sellerName      | string   | 卖家名称
     * storeName       | string   | 店铺名称
     * storeMobile     | string   | 店铺手机号码
     * orderAmount     | int      | 实收(分)
     * initGoodsAmount | int      | 货款(分)
     * freight         | int      | 运费(分)
     * initFreight     | int      | 原运费(分)
     * discountAmount  | int      | 优惠金额(分)
     * changePrice     | int      | 改价
     * orderSn         | string   | 订单号
     * createdDatetime | Datetime | 下单日期时间
     * payDatetime     | Datetime | 支付日期时间
     * shipDatetime    | Datetime | 发货日期时间
     * orderfrom       | string   | 订单来源
     * invoiceName     | stirng   | 送货公司名称
     * logisticsName   | string   | 送货方式
     * goodsCount      | int       | 商品款数
     * productCount    | int       | 商品总件数
     * extension       | int       | 订单业务标识：0 普通订单  1 团购订单
     * expressStatus   | string    | 最新物流状态
     * expressTime     | Datetime  | 最新物流时间
     * countdown       | int       | 倒计时（秒），当orderStatus = 1 或 2 或 4 或 5
     * timeList                       | array     | 时间列表
     * timeList['createdTime']        | int       | 下单时间
     * timeList['payTime']            | int       | 付款时间
     * timeList['shareTime']          | int       | 集赞成功时间
     * timeList['shipTime']           | int       | 发货时间
     * timeList['receiveTime']        | int       | 收货时间
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
     * 10     | 申请退货退款
     * 11     | 重新申请退货退款
     * 12     | 卖家拒绝退款
     * 13     | 卖家拒绝退货退款
     * 14     | 卖家同意退退货，等待买家发货
     * 15     | 买家已发货，等待卖家收退货
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
     *     "sellerName": "莫琼小店",
     *     "storeName": "莫琼小店",
     *     "storeMobile": "13430245645",
     *     "osId": "26",
     *     "orderAmount": "2",
     *     "payTime": "1524556066",
     *     "shipTime": "0",
     *     "freight": "1",
     *     "createdTime": 1524555994,
     *     "remark": "",
     *     "fromFlag": "0",
     *     "likes": "2",
     *     "evaluation": null,
     *     "initGoodsAmount": "2",
     *     "discountAmount": "0",
     *     "initAmount": "0",
     *     "consignee": "蓝厨卫",
     *     "mobile": "11113131313",
     *     "regionName": "山西省 晋城市 沁水县",
     *     "address": "2222",
     *     "invoiceName": "韵达1",
     *     "logisticsName": "",
     *     "orderStatus": 8,
     *     "createdDatetime": "2018-04-24 07:46:34",
     *     "payDatetime": "2018-04-24 07:47:46",
     *     "shipDatetime": "1970-01-01 00:00:00",
     *     "changePrice": 1,
     *     "orderfrom": "未知",
     *     "goodsCount": 1,
     *     "productCount": 0,
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
     *     ],
     *     "expressStatus": "湖南省炎陵县公司快件已被 已签收 签收",
     *     "countdown": 14586655,
     *     "timeList": [{
     *         "createdTime": 1524555994,
     *         "payTime": "1524556066",
     *         "shareTime": 1524899478,
     *         "shipTime": 0,
     *         "receiveTime": 0
     *     }]
     * }
     * )
     *
     * @author hehui<hehui@eelly.net>
     * @author zhangyingdi<zhangyingdi@eelly.net>
     */
    public function getPcOrderDetail(int $orderId, UidDTO $uidDTO = null): array;
}
