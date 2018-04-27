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
 * 卖家订单功能.
 *
 * @author hehui<hehui@eelly.com>
 */
interface SellerOrderInterface
{
    /**
     * 我的小程序订单.
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
     * items[]['buyer_name']  | string | 买家名
     * items[]['orderStatus'] | int    | 订单状态
     * items[]['orderAmount'] | int | 实付
     * items[]['freight']     | int | 运费
     * items[]['createdDate'] | date | 订单日期
     * items[]['goodsList']   | array | 商品列表
     * items[]['goodsList'][]['goodsName']    | string | 商品名称
     * items[]['goodsList'][]['price']        | int    | 商品价格
     * items[]['goodsList'][]['quantity']     | int    | 商品数量
     * items[]['goodsList'][]['spec']         | string | 商品属性
     * items[]['goodsList'][]['goodsImage']   | string | 商品图片
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
     *
     * @param int    $tab    订单筛选值  (0: 全部, 1: 待付款, 2: 待成团, 3: 待发货, 4: 待收货, 5: 待评价)
     * @param int    $page   第几页
     * @param int    $limit  分页大小
     * @param UidDTO $uidDTO uid dto
     *
     * @return array
     *
     * @author hehui<hehui@eelly.net>
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
     *             "sellerName": "莫琼小店",
     *             "osId": "26",
     *             "likes": 2,
     *             "evaluation": null,
     *             "orderAmount": "2",
     *             "freight": "1",
     *             "createdTime": 1524555994,
     *             "orderStatus": 8,
     *             "createdDate": "2018-04-24",
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
    public function myAppletOrders(int $tab = 0, int $page = 1, int $limit = 20, UidDTO $uidDTO = null): array;

    /**
     * 获取我的订单统计信息(卖家).
     *
     * > 返回数据说明
     *
     * key                | type    | value
     * ------------------ | ------- | --------
     * needPay            | int     | 待付款
     * needShare          | int     | 待成团
     * needShipping       | int     | 待发货
     * needReceiving      | int     | 待收货
     *
     * @param UidDTO|null $uidDTO uid dto(表示需要登录)
     *
     * @return array
     *
     * @returnExample(
     * {
     *     "needPay": 32,
     *     "needShare": 8,
     *     "needShipping": 0,
     *     "needReceiving": 0
     * }
     * )
     *
     * @author hehui<hehui@eelly.net>
     */
    public function myAppletOrderStats(UidDTO $uidDTO = null): array;

    /**
     * 小程序订单详情(卖家).
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
     * orderAmount     | int      | 实收
     * initGoodsAmount | int      | 货款
     * freight         | int      | 运费
     * discountAmount  | int      | 优惠金额
     * changePrice     | int      | 改价
     * orderSn         | string   | 订单号
     * createdDatetime | Datetime | 下单日期时间
     * payDatetime     | Datetime | 支付日期时间
     * shipDatetime    | Datetime | 发货日期时间
     * orderfrom       | string   | 订单来源
     * goodsCount      | int       | 商品款数
     * productCount    | int       | 商品总件数
     * goodsList       | array     | 商品列表
     * goodsList[]['goodsName']    | string | 商品名称
     * goodsList[]['price']        | int    | 商品价格
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
     *     ]
     * }
     * )
     *
     * @author hehui<hehui@eelly.net>
     */
    public function appletOrderDetail(int $orderId, UidDTO $uidDTO = null): array;
}
