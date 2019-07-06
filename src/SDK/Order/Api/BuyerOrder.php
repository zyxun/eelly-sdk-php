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

use Eelly\DTO\UidDTO;
use Eelly\SDK\EellyClient;
use Eelly\SDK\Order\Service\BuyerOrderInterface;

/**
 * @author shadonTools<localhost.shell@gmail.com>
 */
class BuyerOrder
{
    /**
     * 订单分页(买家).
     *
     * > 返回数据(orderStats 订单统计数据)说明
     *
     * 参数           | 类型 | 说明
     * -------------- | --  |-----
     * needPay        | int | 待付款
     * needShare      | int | 待分享
     * needShipping   | int | 待发货
     * needReceiving  | int | 待收货
     * needReview     | int | 待评价
     * refunding      | int | 退货退款中
     * finish         | int | 交易完成
     * cancel         | int | 已经取消
     *
     * > 返回数据(page 分页数据)说明
     *
     * 参数        | 类型  | 说明
     * ----------- | ---- |-----
     *  first      | int  |     首页
     *  before     | int  |    上一页
     *  current    | int  |    当前页
     *  next       | int  |    下一页
     *  totalPages | int  |    总页数
     *  totalItems | int  |    总记录数
     *  limit      | int  |    分页大小
     *  items      | list |    订单数据列表
     *
     * > 返回数据(page.items[] 订单数据列表)说明
     *
     *  参数     | 类型 | 说明
     * -------- | -------- |-----
     * goodsList | list  | 订单商品列表 参考订单详情 <order/buyerOrder/orderDetails>
     * bizData   | map   | 订单业务数据 参考订单详情 <order/buyerOrder/orderDetails>
     *
     *
     * @param int          $tab                            订单状态筛选值(0: 全部订单 1: 待付款 2: 待分享 3: 待发货 4: 待收货 5: 待评价 6: 退货退款中 7: 交易完成 8: 已经取消)
     * @param int          $page                           第几页
     * @param int          $limit                          分页大小
     * @param array|string $searchParams                   搜索参数(类型为array时进行精确搜索)
     * @param string       $searchParams['ordersn']        订单号
     * @param string       $searchParams['storename']      店铺名或卖家用户名
     * @param string       $searchParams['consignee']      收货人
     * @param string       $searchParams['goodsname']      商品名或货号
     * @param int          $searchParams['ordertimeStart'] 下单开始时间戳
     * @param int          $searchParams['ordertimeEnd']   下单结束时间戳
     * @param string       $orderBy                        排序
     * @param UidDTO|null  $uidDTO                         uid dto
     *
     * @return array
     *
     * @requestExample({
     *     "tab":0,
     *     "page":1,
     *     "searchParams":"abc"
     * })
     *
     * @returnExample({
     *   "orderStats": {
     *       "needPay": 55,
     *       "needShare": "7",
     *       "needShipping": "28",
     *       "needReceiving": 16,
     *       "needReview": 44,
     *       "refunding": 25
     *   },
     *   "page": {
     *       "first": 1,
     *       "before": 1,
     *       "current": 1,
     *       "last": 290,
     *       "next": 2,
     *       "totalPages": 290,
     *       "totalItems": 580,
     *       "limit": 2,
     *       "items": [
     *           {
     *               "orderId": "50001771",
     *               "orderSn": "2153610960734762",
     *               "sellerName": "test店铺测试",
     *               "osId": "1",
     *               "sellerId": 1760467,
     *               "requireLikes": "0",
     *               "likes": 0,
     *               "evaluation": null,
     *               "orderAmount": "4",
     *               "extension": "0",
     *               "freight": "0",
     *               "createdTime": 1536109607,
     *               "initGoodsAmount": "4",
     *               "initFreight": "0",
     *               "ordOsId": null,
     *               "ordType": null,
     *               "applyAmount": null,
     *               "phase": null,
     *               "avatar": "https://img01.eelly.test/G01/M00/00/05/oYYBAFdpAAWIFasdAAfT9dJT_v8AAAB_AF-kL4AB9QN974.jpg",
     *               "createdDate": "2018-09-05",
     *               "goodsList": [
     *                   {
     *                       "ogId": "20001443",
     *                       "orderId": "50001771",
     *                       "goodsId": 5578945,
     *                       "gsId": "32090871",
     *                       "price": "4",
     *                       "quantity": "1",
     *                       "goodsName": "测试物流",
     *                       "goodsImage": "https://img01.eelly.test/G02/M00/00/03/small_ooYBAFtj9v-IMrTHAAGaI_vzPwkAAABhAGNYDoAAZo7382.jpg",
     *                       "goodsNumber": "007",
     *                       "spec": "颜色:如图色,尺码:均码",
     *                       "createdTime": "1536109607",
     *                       "updateTime": "2018-09-05 09:06:47"
     *                   }
     *               ],
     *               "styleCount": 1,
     *               "totalCount": 1,
     *               "bizData": {
     *                   "bizCode": 0,
     *                   "orderStatus": 0,
     *                   "title": "等待我付款",
     *                   "text": "等待我付款",
     *                   "countDown": -1148852,
     *                   "countDownTpl": "请在{time}内付款，逾期系统自动取消订单",
     *                   "express": "",
     *                   "expressTime": 0,
     *                   "note": "",
     *                   "actions": [
     *                       "cancel",
     *                       "pay"
     *                   ]
     *               }
     *           },
     *           {
     *               "orderId": "50001770",
     *               "orderSn": "2153606366343926",
     *               "sellerName": "test店铺测试",
     *               "osId": "1",
     *               "sellerId": 1760467,
     *               "requireLikes": "1",
     *               "likes": 0,
     *               "evaluation": null,
     *               "orderAmount": "1990",
     *               "extension": "1",
     *               "freight": "0",
     *               "createdTime": 1536063663,
     *               "initGoodsAmount": "1990",
     *               "initFreight": "0",
     *               "ordOsId": null,
     *               "ordType": null,
     *               "applyAmount": null,
     *               "phase": null,
     *               "avatar": "https://img01.eelly.test/G01/M00/00/05/oYYBAFdpAAWIFasdAAfT9dJT_v8AAAB_AF-kL4AB9QN974.jpg",
     *               "createdDate": "2018-09-04",
     *               "goodsList": [
     *                   {
     *                       "ogId": "20001442",
     *                       "orderId": "50001770",
     *                       "goodsId": 5578945,
     *                       "gsId": "32090871",
     *                       "price": "1990",
     *                       "quantity": "1",
     *                       "goodsName": "测试物流",
     *                       "goodsImage": "https://img01.eelly.test/G02/M00/00/03/small_ooYBAFtj9v-IMrTHAAGaI_vzPwkAAABhAGNYDoAAZo7382.jpg",
     *                       "goodsNumber": "007",
     *                       "spec": "颜色:如图色,尺码:均码",
     *                       "createdTime": "1536063663",
     *                       "updateTime": "2018-09-04 20:21:03"
     *                   }
     *               ],
     *               "styleCount": 1,
     *               "totalCount": 1,
     *               "bizData": {
     *                   "bizCode": 0,
     *                   "orderStatus": 0,
     *                   "title": "等待我付款",
     *                   "text": "等待我付款",
     *                   "countDown": -1194796,
     *                   "countDownTpl": "请在{time}内付款，逾期系统自动取消订单",
     *                   "express": "",
     *                   "expressTime": 0,
     *                   "note": "",
     *                   "actions": [
     *                       {"btn" : "cancel", "name" : "取消订单"},
     *                       {"btn" : "pay", "name" : "立即付款"}
     *                   ]
     *               }
     *           }
     *       ]
     *   }
     *})
     *
     * @author hehui<hehui@eelly.net>
     */
    public function orderPage(int $tab = 0, int $page = 1, int $limit = 20, $searchParams = null, string $orderBy = 'created_time desc', UidDTO $uidDTO = null): array
    {
        return EellyClient::request('order/buyerOrder', 'orderPage', true, $tab, $page, $limit, $searchParams, $orderBy);
    }

    /**
     * 订单分页(买家).
     *
     * > 返回数据(orderStats 订单统计数据)说明
     *
     * 参数           | 类型 | 说明
     * -------------- | --  |-----
     * needPay        | int | 待付款
     * needShare      | int | 待分享
     * needShipping   | int | 待发货
     * needReceiving  | int | 待收货
     * needReview     | int | 待评价
     * refunding      | int | 退货退款中
     * finish         | int | 交易完成
     * cancel         | int | 已经取消
     *
     * > 返回数据(page 分页数据)说明
     *
     * 参数        | 类型  | 说明
     * ----------- | ---- |-----
     *  first      | int  |     首页
     *  before     | int  |    上一页
     *  current    | int  |    当前页
     *  next       | int  |    下一页
     *  totalPages | int  |    总页数
     *  totalItems | int  |    总记录数
     *  limit      | int  |    分页大小
     *  items      | list |    订单数据列表
     *
     * > 返回数据(page.items[] 订单数据列表)说明
     *
     *  参数     | 类型 | 说明
     * -------- | -------- |-----
     * goodsList | list  | 订单商品列表 参考订单详情 <order/buyerOrder/orderDetails>
     * bizData   | map   | 订单业务数据 参考订单详情 <order/buyerOrder/orderDetails>
     *
     *
     * @param int          $tab                            订单状态筛选值(0: 全部订单 1: 待付款 2: 待分享 3: 待发货 4: 待收货 5: 待评价 6: 退货退款中 7: 交易完成 8: 已经取消)
     * @param int          $page                           第几页
     * @param int          $limit                          分页大小
     * @param array|string $searchParams                   搜索参数(类型为array时进行精确搜索)
     * @param string       $searchParams['ordersn']        订单号
     * @param string       $searchParams['storename']      店铺名或卖家用户名
     * @param string       $searchParams['consignee']      收货人
     * @param string       $searchParams['goodsname']      商品名或货号
     * @param int          $searchParams['ordertimeStart'] 下单开始时间戳
     * @param int          $searchParams['ordertimeEnd']   下单结束时间戳
     * @param string       $orderBy                        排序
     * @param UidDTO|null  $uidDTO                         uid dto
     *
     * @return array
     *
     * @requestExample({
     *     "tab":0,
     *     "page":1,
     *     "searchParams":"abc"
     * })
     *
     * @returnExample({
     *   "orderStats": {
     *       "needPay": 55,
     *       "needShare": "7",
     *       "needShipping": "28",
     *       "needReceiving": 16,
     *       "needReview": 44,
     *       "refunding": 25
     *   },
     *   "page": {
     *       "first": 1,
     *       "before": 1,
     *       "current": 1,
     *       "last": 290,
     *       "next": 2,
     *       "totalPages": 290,
     *       "totalItems": 580,
     *       "limit": 2,
     *       "items": [
     *           {
     *               "orderId": "50001771",
     *               "orderSn": "2153610960734762",
     *               "sellerName": "test店铺测试",
     *               "osId": "1",
     *               "sellerId": 1760467,
     *               "requireLikes": "0",
     *               "likes": 0,
     *               "evaluation": null,
     *               "orderAmount": "4",
     *               "extension": "0",
     *               "freight": "0",
     *               "createdTime": 1536109607,
     *               "initGoodsAmount": "4",
     *               "initFreight": "0",
     *               "ordOsId": null,
     *               "ordType": null,
     *               "applyAmount": null,
     *               "phase": null,
     *               "avatar": "https://img01.eelly.test/G01/M00/00/05/oYYBAFdpAAWIFasdAAfT9dJT_v8AAAB_AF-kL4AB9QN974.jpg",
     *               "createdDate": "2018-09-05",
     *               "goodsList": [
     *                   {
     *                       "ogId": "20001443",
     *                       "orderId": "50001771",
     *                       "goodsId": 5578945,
     *                       "gsId": "32090871",
     *                       "price": "4",
     *                       "quantity": "1",
     *                       "goodsName": "测试物流",
     *                       "goodsImage": "https://img01.eelly.test/G02/M00/00/03/small_ooYBAFtj9v-IMrTHAAGaI_vzPwkAAABhAGNYDoAAZo7382.jpg",
     *                       "goodsNumber": "007",
     *                       "spec": "颜色:如图色,尺码:均码",
     *                       "createdTime": "1536109607",
     *                       "updateTime": "2018-09-05 09:06:47"
     *                   }
     *               ],
     *               "styleCount": 1,
     *               "totalCount": 1,
     *               "bizData": {
     *                   "bizCode": 0,
     *                   "orderStatus": 0,
     *                   "title": "等待我付款",
     *                   "text": "等待我付款",
     *                   "countDown": -1148852,
     *                   "countDownTpl": "请在{time}内付款，逾期系统自动取消订单",
     *                   "express": "",
     *                   "expressTime": 0,
     *                   "note": "",
     *                   "actions": [
     *                       "cancel",
     *                       "pay"
     *                   ]
     *               }
     *           },
     *           {
     *               "orderId": "50001770",
     *               "orderSn": "2153606366343926",
     *               "sellerName": "test店铺测试",
     *               "osId": "1",
     *               "sellerId": 1760467,
     *               "requireLikes": "1",
     *               "likes": 0,
     *               "evaluation": null,
     *               "orderAmount": "1990",
     *               "extension": "1",
     *               "freight": "0",
     *               "createdTime": 1536063663,
     *               "initGoodsAmount": "1990",
     *               "initFreight": "0",
     *               "ordOsId": null,
     *               "ordType": null,
     *               "applyAmount": null,
     *               "phase": null,
     *               "avatar": "https://img01.eelly.test/G01/M00/00/05/oYYBAFdpAAWIFasdAAfT9dJT_v8AAAB_AF-kL4AB9QN974.jpg",
     *               "createdDate": "2018-09-04",
     *               "goodsList": [
     *                   {
     *                       "ogId": "20001442",
     *                       "orderId": "50001770",
     *                       "goodsId": 5578945,
     *                       "gsId": "32090871",
     *                       "price": "1990",
     *                       "quantity": "1",
     *                       "goodsName": "测试物流",
     *                       "goodsImage": "https://img01.eelly.test/G02/M00/00/03/small_ooYBAFtj9v-IMrTHAAGaI_vzPwkAAABhAGNYDoAAZo7382.jpg",
     *                       "goodsNumber": "007",
     *                       "spec": "颜色:如图色,尺码:均码",
     *                       "createdTime": "1536063663",
     *                       "updateTime": "2018-09-04 20:21:03"
     *                   }
     *               ],
     *               "styleCount": 1,
     *               "totalCount": 1,
     *               "bizData": {
     *                   "bizCode": 0,
     *                   "orderStatus": 0,
     *                   "title": "等待我付款",
     *                   "text": "等待我付款",
     *                   "countDown": -1194796,
     *                   "countDownTpl": "请在{time}内付款，逾期系统自动取消订单",
     *                   "express": "",
     *                   "expressTime": 0,
     *                   "note": "",
     *                   "actions": [
     *                       {"btn" : "cancel", "name" : "取消订单"},
     *                       {"btn" : "pay", "name" : "立即付款"}
     *                   ]
     *               }
     *           }
     *       ]
     *   }
     *})
     *
     * @author hehui<hehui@eelly.net>
     */
    public function orderPageAsync(int $tab = 0, int $page = 1, int $limit = 20, $searchParams = null, string $orderBy = 'created_time desc', UidDTO $uidDTO = null)
    {
        return EellyClient::request('order/buyerOrder', 'orderPage', false, $tab, $page, $limit, $searchParams, $orderBy, $uidDTO);
    }

    /**
     * 订单详情(买家).
     *
     * > 返回数据说明
     *
     * key | type |  value
     * --- | ---- | -------
     * orderStatus     | int      | 订单状态   (改用bizData.bizCode业务编号)
     * consignee       | string   | 收货人姓名
     * mobile          | string   | 手机
     * regionName      | string   | 省市区
     * address         | string   | 详细地址
     * remark          | string   | 买家留言 (废弃 改为memo.type4.content 2018-10-16)
     * memo               | array    | 订单备注信息
     * memo.type4.content | string   | 买家留言
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
     * expressTime     | Datetime  | 最新物流时间 （迁移至bizData.expressTime)
     * countdown       | int       | 倒计时（秒），当orderStatus = 1 或 2 或 4 或 5    （迁移至bizData.countDown)
     * payChannel      | int       | 支付渠道：0 线下 1 支付宝 2 微信钱包 3 QQ钱包 4 银联 5 移动支付  -1 未知(数据不存在)   2018-10-13 新增
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
     * bizData                     | array  | 业务数据
     * bizCode | int | 业务编号
     * bizCode['orderStatus'] | int | 订单状态
     * bizCode['title']              | string   | 订单状态标题
     * bizCode['text']               |  string        | 订单状态描述
     * bizCode['countDown']          | int |       倒计时(秒)
     * bizCode['countDownTpl']       |string |  倒计时模板(模板变量 {time})
     * bizCode['express']            |string |  快递信息
     * bizCode['expressTime']        | int | 快递信息的时间戳(秒)
     * bizCode['note']               | string | 留言
     * bizCode['actions']            | array | 支持的操作<返回数据actions说明>
     *
     * > 业务编号(bizData.bizCode)
     *
     *    业务状态码(bizCode)  | 数据库状态码(orderStatus) | 状态说明               |title        |text              |countDownTpl                        |express           |actions         |actions说明
     *    --------- |----------  | ----------------------|------------|----------------- | -----------------------------------|-----------------| ----------------|--------------
     *    1         | **1**    | 等待付款                 |等待我付款      | 等待我付款        | 请在{time}内付款，逾期系统自动取消订单 | 无               | `cancel` `pay`  | `取消订单` `立即付款`
     *    2         | **2**  order.extension = 0 | 等待卖家发货             |等待卖家发货      | 我已付款，等待卖家发货 | 无 | 卖家正在备货         | `refund` `notifySendGoods` | `申请退款` `提醒发货`
     *    3        | **2**  order_count.likes < order.require_likes | 待成团               |待成团        | 待成团        | 无 | 无               | 无 | 无
     *    4        | **2** order_count.likes >= order.require_likes | 集赞成功               |集赞成功      | 集赞成功        | 无 | 无               | `refund` `notifySendGoods` | `申请退款` `提醒发货`
     *    5         | **4**    | 等待我收货              |等待我收货      | 卖家已发货，等待我收货 | 请在{time}内确认收货，逾期系统自动确认 | 最后一条物流动态 | `returnGoods` `expandReceivedTime` `confirmReceived` | `申请退货退款` `延长收货` `确认收货`
     *    6        | (16, 20) order_refund.type = 1 and order.ship_time = 0 | 申请退款(未发货)         |申请退款中(未发货)      | 退款申请已提交，等待卖家处理 | {time}内卖家不处理，系统默认同意申请 | 无               | `agreedDetail` `refundDetail` | `查看协商记录` `退款详情`
     *    7        | (16, 20) order_refund.type = 1 and order.ship_time > 0       | 申请退款(已发货)        |申请退款中(已发货)      | 退款申请已提交，等待卖家处理 | {time}内卖家不处理，系统默认同意申请 | 最后一条物流动态      | `agreedDetail` `refundDetail` | `查看协商记录` `退款详情`
     *    8         | **11,12** order_evaluation null and order.return_flag = 0 | 交易完成(待评价)         |交易完成      | 待评价     | 无 | 最后一条物流动态      | `review`  | `去评价`
     *    9         | **11,12** order_evaluation not null and order.return_flag = 0 | 交易完成(已评价)         |交易完成(买家收货/10天自动收)     | 交易完成    | 无 | 无               | 无 | 无
     *    10         | **15** order.extension = 0 AND order_log.type = 0 | 交易取消(系统取消)       |交易取消      | 交易取消    | 因超时未付款，系统自动取消订单 | 无               | 无 | 无
     *    11         | **15** order_log.type = 1 | 交易取消(买家取消)       |交易取消      | 交易取消    | 买家主动取消订单 | 无               | 无 | 无
     *    12         | **15** order_log.type = 2 AND order.return_flag != 2 | 交易取消(卖家取消)       |交易取消      | 交易取消    | 卖家主动取消订单 | 无               | 无 | 无
     *    13         | **15** order_log.type = 2 AND order.return_flag = 2 | 交易取消(全额退款)       |交易取消      | 交易取消    | 全额退款成功，订单取消 | 无               | `refundDetail` | `查看退款详情`
     *    14 | **15** order.extension = 1 AND order_log.type = 0 | 交易取消(成团失败) |交易取消 | 交易取消 | 全额退款成功，订单取消 | 无 | `refundDetail` | `查看退款详情`
     *    15        | (16, 20) order_refund.type = 2 | 申请退货退款           |申请退货中      | 退货申请已提交，等待卖家处理 | {time}内卖家不处理，系统默认同意申请 | 最后一条物流动态      | `agreedDetail` `refundDetail` | `查看协商记录` `查看退款详情`
     *    16        | (17) | 同意退货              |等待我退货      | 卖家同意退货，等待我处理 | 您需在{time}内处理，逾期默认撤销退款申请 | 最后一条物流动态       | `cancelReturnGoods` `sendReturnGoods` | `撤销申请` `发出退货`
     *    17        | (18)     | 已发退货             |等待卖家收货      | 我已发出退货，等待卖家收货 | 卖家需在{time}内确认收货，逾期自动收货 | 无               | `agreedDetail` `returnGoodsExpress` | `查看协商记录` `退货物流`
     *    18        | (19) order_refund.type = 1 | 卖家拒绝退款           |卖家拒绝退款      | 卖家拒绝退款，等待我处理 | 您需在{time}内处理，逾期默认撤销退款申请 | 最后一条物流动态      | `agreedDetail` `queryRefund` | `查看协商记录` `去处理退款申请`
     *    19        | (19) order_refund.type = 2 | 卖家拒绝退货           |卖家拒绝退货     | 卖家拒绝退货，等待我处理 | 您需在{time}内处理，逾期默认撤销退货申请 | 最后一条物流动态       | `agreedDetail` `queryReturnGoods` | `查看协商记录` `去处理退货申请`
     *    20        | (21) order_refund.type = 1 | 卖家同意退款            |退款结算中(同意退款/2天自动同意)      | 退款结算中   | 卖家同意退款，衣联系统正在结算 | 无               | `refundDetail` | `查看退款详情`
     *    21        | (21) order_refund.type = 2 | 收到退货             |退款结算中(卖家收货/10天自动收)      | 退款结算中   | 卖家确认收到退货，衣联系统正在结算 | 无               | `refundDetail` | `查看退款详情`
     *    22        | (22) order_arbitrate.status is null or != 1 | 买家申请仲裁         |客服介入处理      | 我已申请衣联客服介入 | 客服会在3个工作日内介入处理，请耐心等待 | 最后一条物流动态       | `cancelArbitrate` | `撤销介入申请`
     *    23        | (22) order_arbitrate.status = 1 | 客服介入中 |客服介入处理      | 衣联客服已介入处理，请耐心等待 | 客服会联系您了解情况，请保持联系方式畅通 | 最后一条物流动态       | 无 | 无
     *    24        | (23) order_arbitrate.status is null or != 1 | 卖家申请仲裁         |客服介入处理      | 卖家申请衣联客服介入 | 客服会在3个工作日内介入处理，请耐心等待 | 最后一条物流动态       | 无 | 无
     *    25        | **12**(25) order_arbitrate.blame_flag = 1 | 客服介入完成(钱给买家)  |交易完成      | 客服介入处理完毕 | 无 | 无               | `review`                                           | `待评价`
     *    26        | **12**(25) order_arbitrate.blame_flag = 2 | 客服介入完成(钱给卖家)   |交易完成      | 客服介入处理完毕 | 无 | 无               | `review`                                           | `待评价`
     *    27        |**12**(25) order_arbitrate.blame_flag = 3  | 客服介入完成(退一部分)   |交易完成      | 客服介入处理完毕 | 无 | 无               | `review` | `待评价`
     *    28        |**12**(25) order_arbitrate.blame_flag = 4  | 客服介入完成(财务处理) |交易完成      | 客服介入处理完毕 | 其他具体原因 | 无               | `review` | `待评价`
     *    29 | **12**(25) order_arbitrate is null | 退货退款交易完成(无平台介入) |交易完成 | 交易完成 | 无 | 无 | `review` | `待评价`
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
     *       "orderId": "116",
     *       "orderSn": "1810837219",
     *       "sellerId": 1762613,
     *       "sellerName": "日韩女装旗舰店",
     *       "osId": "2",
     *       "orderAmount": "19800",
     *       "payTime": "1528265255",
     *       "shipTime": "1524119510",
     *       "delayTime": "0",
     *       "returnFlag": "2",
     *       "finishedTime": "1537525400",
     *       "freight": "1",
     *       "createdTime": 1524119510,
     *       "remark": "",
     *       "fromFlag": "3",
     *       "extension": "0",
     *       "likes": null,
     *       "evaluation": null,
     *       "initGoodsAmount": "19800",
     *       "initFreight": "1",
     *       "discountAmount": "0",
     *       "initAmount": "19801",
     *       "consignee": "蓝厨卫",
     *       "mobile": "11113131313",
     *       "requireLikes": "0",
     *       "regionName": "山西省 晋城市 沁水县",
     *       "address": "2222",
     *       "invoiceName": "",
     *       "logisticsName": "",
     *       "ordType": "2",
     *       "ordOsId": "28",
     *       "applyAmount": "100",
     *       "returnAmount": "0",
     *       "payChannel": -1,
     *       "bizData": {
     *           "bizCode": 2,
     *           "orderStatus": 2,
     *           "title": "等待卖家发货",
     *           "text": "我已付款等待卖家发货",
     *           "countDown": 0,
     *           "countDownTpl": "",
     *           "express": "",
     *           "expressTime": 0,
     *           "note": "",
     *           "actions": [
     *               {"btn" : "cancel", "name" : "取消订单"},
     *               {"btn" : "pay", "name" : "立即付款"}
     *           ]
     *       },
     *       "orderStatus": 3,
     *       "avatar": "https://img05.eelly.test/",
     *       "createdDatetime": "2018-04-19 14:31:50",
     *       "payDatetime": "2018-06-06 14:07:35",
     *       "shipDatetime": "2018-04-19 14:31:50",
     *       "changePrice": 1,
     *       "orderfrom": "未知",
     *       "goodsCount": 1,
     *       "productCount": 0,
     *       "goodsList": [
     *           {
     *               "ogId": "20000153",
     *               "orderId": "116",
     *               "goodsId": 1450168197,
     *               "gsId": "195022004",
     *               "price": "2900",
     *               "quantity": "3",
     *               "goodsName": "【日韩女装旗舰店】 2018新款 针织衫/毛衣  包邮",
     *               "goodsImage": "https://img03.eelly.test/G02/M00/00/03/small_ooYBAFqaRR6IF0K1AAFPWNeoLjcAAABgQK8bi8AAU9w267.jpg",
     *               "goodsNumber": "3",
     *               "spec": "颜色:如图色,尺码:均码",
     *               "createdTime": "1524119511",
     *               "updateTime": "2018-04-19 14:31:32"
     *           },
     *           {
     *               "ogId": "20000154",
     *               "orderId": "116",
     *               "goodsId": 1450168334,
     *               "gsId": "195022184",
     *               "price": "11100",
     *               "quantity": "1",
     *               "goodsName": "fgh ",
     *               "goodsImage": "https://img02.eelly.test/G02/M00/00/03/small_ooYBAFrDQlaIcTeFAAHMuyce2dIAAABggCCW44AAczT140.jpg",
     *               "goodsNumber": "1",
     *               "spec": "颜色:如图色,尺码:均码",
     *               "createdTime": "1524119511",
     *               "updateTime": "2018-04-19 14:31:32"
     *           }
     *       ],
     *       "styleCount": 2,
     *       "totalCount": 4,
     *       "returnFlagTemp": 0,
     *       "timeList": {
     *           "createdTime": 1524119510,
     *           "payTime": 1528265255,
     *           "shareTime": 0,
     *           "shipTime": 1524119510,
     *           "receiveTime": 1537525400
     *       }
     *   }
     * )
     *
     * @author hehui<hehui@eelly.net>
     */
    public function orderDetails(int $orderId, UidDTO $uidDTO = null): array
    {
        return EellyClient::request('order/buyerOrder', 'orderDetails', true, $orderId, $uidDTO);
    }

    /**
     * 订单详情(买家).
     *
     * > 返回数据说明
     *
     * key | type |  value
     * --- | ---- | -------
     * orderStatus     | int      | 订单状态   (改用bizData.bizCode业务编号)
     * consignee       | string   | 收货人姓名
     * mobile          | string   | 手机
     * regionName      | string   | 省市区
     * address         | string   | 详细地址
     * remark          | string   | 买家留言 (废弃 改为memo.type4.content 2018-10-16)
     * memo               | array    | 订单备注信息
     * memo.type4.content | string   | 买家留言
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
     * expressTime     | Datetime  | 最新物流时间 （迁移至bizData.expressTime)
     * countdown       | int       | 倒计时（秒），当orderStatus = 1 或 2 或 4 或 5    （迁移至bizData.countDown)
     * payChannel      | int       | 支付渠道：0 线下 1 支付宝 2 微信钱包 3 QQ钱包 4 银联 5 移动支付  -1 未知(数据不存在)   2018-10-13 新增
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
     * bizData                     | array  | 业务数据
     * bizCode | int | 业务编号
     * bizCode['orderStatus'] | int | 订单状态
     * bizCode['title']              | string   | 订单状态标题
     * bizCode['text']               |  string        | 订单状态描述
     * bizCode['countDown']          | int |       倒计时(秒)
     * bizCode['countDownTpl']       |string |  倒计时模板(模板变量 {time})
     * bizCode['express']            |string |  快递信息
     * bizCode['expressTime']        | int | 快递信息的时间戳(秒)
     * bizCode['note']               | string | 留言
     * bizCode['actions']            | array | 支持的操作<返回数据actions说明>
     *
     * > 业务编号(bizData.bizCode)
     *
     *    业务状态码(bizCode)  | 数据库状态码(orderStatus) | 状态说明               |title        |text              |countDownTpl                        |express           |actions         |actions说明
     *    --------- |----------  | ----------------------|------------|----------------- | -----------------------------------|-----------------| ----------------|--------------
     *    1         | **1**    | 等待付款                 |等待我付款      | 等待我付款        | 请在{time}内付款，逾期系统自动取消订单 | 无               | `cancel` `pay`  | `取消订单` `立即付款`
     *    2         | **2**  order.extension = 0 | 等待卖家发货             |等待卖家发货      | 我已付款，等待卖家发货 | 无 | 卖家正在备货         | `refund` `notifySendGoods` | `申请退款` `提醒发货`
     *    3        | **2**  order_count.likes < order.require_likes | 待成团               |待成团        | 待成团        | 无 | 无               | 无 | 无
     *    4        | **2** order_count.likes >= order.require_likes | 集赞成功               |集赞成功      | 集赞成功        | 无 | 无               | `refund` `notifySendGoods` | `申请退款` `提醒发货`
     *    5         | **4**    | 等待我收货              |等待我收货      | 卖家已发货，等待我收货 | 请在{time}内确认收货，逾期系统自动确认 | 最后一条物流动态 | `returnGoods` `expandReceivedTime` `confirmReceived` | `申请退货退款` `延长收货` `确认收货`
     *    6        | (16, 20) order_refund.type = 1 and order.ship_time = 0 | 申请退款(未发货)         |申请退款中(未发货)      | 退款申请已提交，等待卖家处理 | {time}内卖家不处理，系统默认同意申请 | 无               | `agreedDetail` `refundDetail` | `查看协商记录` `退款详情`
     *    7        | (16, 20) order_refund.type = 1 and order.ship_time > 0       | 申请退款(已发货)        |申请退款中(已发货)      | 退款申请已提交，等待卖家处理 | {time}内卖家不处理，系统默认同意申请 | 最后一条物流动态      | `agreedDetail` `refundDetail` | `查看协商记录` `退款详情`
     *    8         | **11,12** order_evaluation null and order.return_flag = 0 | 交易完成(待评价)         |交易完成      | 待评价     | 无 | 最后一条物流动态      | `review`  | `去评价`
     *    9         | **11,12** order_evaluation not null and order.return_flag = 0 | 交易完成(已评价)         |交易完成(买家收货/10天自动收)     | 交易完成    | 无 | 无               | 无 | 无
     *    10         | **15** order.extension = 0 AND order_log.type = 0 | 交易取消(系统取消)       |交易取消      | 交易取消    | 因超时未付款，系统自动取消订单 | 无               | 无 | 无
     *    11         | **15** order_log.type = 1 | 交易取消(买家取消)       |交易取消      | 交易取消    | 买家主动取消订单 | 无               | 无 | 无
     *    12         | **15** order_log.type = 2 AND order.return_flag != 2 | 交易取消(卖家取消)       |交易取消      | 交易取消    | 卖家主动取消订单 | 无               | 无 | 无
     *    13         | **15** order_log.type = 2 AND order.return_flag = 2 | 交易取消(全额退款)       |交易取消      | 交易取消    | 全额退款成功，订单取消 | 无               | `refundDetail` | `查看退款详情`
     *    14 | **15** order.extension = 1 AND order_log.type = 0 | 交易取消(成团失败) |交易取消 | 交易取消 | 全额退款成功，订单取消 | 无 | `refundDetail` | `查看退款详情`
     *    15        | (16, 20) order_refund.type = 2 | 申请退货退款           |申请退货中      | 退货申请已提交，等待卖家处理 | {time}内卖家不处理，系统默认同意申请 | 最后一条物流动态      | `agreedDetail` `refundDetail` | `查看协商记录` `查看退款详情`
     *    16        | (17) | 同意退货              |等待我退货      | 卖家同意退货，等待我处理 | 您需在{time}内处理，逾期默认撤销退款申请 | 最后一条物流动态       | `cancelReturnGoods` `sendReturnGoods` | `撤销申请` `发出退货`
     *    17        | (18)     | 已发退货             |等待卖家收货      | 我已发出退货，等待卖家收货 | 卖家需在{time}内确认收货，逾期自动收货 | 无               | `agreedDetail` `returnGoodsExpress` | `查看协商记录` `退货物流`
     *    18        | (19) order_refund.type = 1 | 卖家拒绝退款           |卖家拒绝退款      | 卖家拒绝退款，等待我处理 | 您需在{time}内处理，逾期默认撤销退款申请 | 最后一条物流动态      | `agreedDetail` `queryRefund` | `查看协商记录` `去处理退款申请`
     *    19        | (19) order_refund.type = 2 | 卖家拒绝退货           |卖家拒绝退货     | 卖家拒绝退货，等待我处理 | 您需在{time}内处理，逾期默认撤销退货申请 | 最后一条物流动态       | `agreedDetail` `queryReturnGoods` | `查看协商记录` `去处理退货申请`
     *    20        | (21) order_refund.type = 1 | 卖家同意退款            |退款结算中(同意退款/2天自动同意)      | 退款结算中   | 卖家同意退款，衣联系统正在结算 | 无               | `refundDetail` | `查看退款详情`
     *    21        | (21) order_refund.type = 2 | 收到退货             |退款结算中(卖家收货/10天自动收)      | 退款结算中   | 卖家确认收到退货，衣联系统正在结算 | 无               | `refundDetail` | `查看退款详情`
     *    22        | (22) order_arbitrate.status is null or != 1 | 买家申请仲裁         |客服介入处理      | 我已申请衣联客服介入 | 客服会在3个工作日内介入处理，请耐心等待 | 最后一条物流动态       | `cancelArbitrate` | `撤销介入申请`
     *    23        | (22) order_arbitrate.status = 1 | 客服介入中 |客服介入处理      | 衣联客服已介入处理，请耐心等待 | 客服会联系您了解情况，请保持联系方式畅通 | 最后一条物流动态       | 无 | 无
     *    24        | (23) order_arbitrate.status is null or != 1 | 卖家申请仲裁         |客服介入处理      | 卖家申请衣联客服介入 | 客服会在3个工作日内介入处理，请耐心等待 | 最后一条物流动态       | 无 | 无
     *    25        | **12**(25) order_arbitrate.blame_flag = 1 | 客服介入完成(钱给买家)  |交易完成      | 客服介入处理完毕 | 无 | 无               | `review`                                           | `待评价`
     *    26        | **12**(25) order_arbitrate.blame_flag = 2 | 客服介入完成(钱给卖家)   |交易完成      | 客服介入处理完毕 | 无 | 无               | `review`                                           | `待评价`
     *    27        |**12**(25) order_arbitrate.blame_flag = 3  | 客服介入完成(退一部分)   |交易完成      | 客服介入处理完毕 | 无 | 无               | `review` | `待评价`
     *    28        |**12**(25) order_arbitrate.blame_flag = 4  | 客服介入完成(财务处理) |交易完成      | 客服介入处理完毕 | 其他具体原因 | 无               | `review` | `待评价`
     *    29 | **12**(25) order_arbitrate is null | 退货退款交易完成(无平台介入) |交易完成 | 交易完成 | 无 | 无 | `review` | `待评价`
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
     *       "orderId": "116",
     *       "orderSn": "1810837219",
     *       "sellerId": 1762613,
     *       "sellerName": "日韩女装旗舰店",
     *       "osId": "2",
     *       "orderAmount": "19800",
     *       "payTime": "1528265255",
     *       "shipTime": "1524119510",
     *       "delayTime": "0",
     *       "returnFlag": "2",
     *       "finishedTime": "1537525400",
     *       "freight": "1",
     *       "createdTime": 1524119510,
     *       "remark": "",
     *       "fromFlag": "3",
     *       "extension": "0",
     *       "likes": null,
     *       "evaluation": null,
     *       "initGoodsAmount": "19800",
     *       "initFreight": "1",
     *       "discountAmount": "0",
     *       "initAmount": "19801",
     *       "consignee": "蓝厨卫",
     *       "mobile": "11113131313",
     *       "requireLikes": "0",
     *       "regionName": "山西省 晋城市 沁水县",
     *       "address": "2222",
     *       "invoiceName": "",
     *       "logisticsName": "",
     *       "ordType": "2",
     *       "ordOsId": "28",
     *       "applyAmount": "100",
     *       "returnAmount": "0",
     *       "payChannel": -1,
     *       "bizData": {
     *           "bizCode": 2,
     *           "orderStatus": 2,
     *           "title": "等待卖家发货",
     *           "text": "我已付款等待卖家发货",
     *           "countDown": 0,
     *           "countDownTpl": "",
     *           "express": "",
     *           "expressTime": 0,
     *           "note": "",
     *           "actions": [
     *               {"btn" : "cancel", "name" : "取消订单"},
     *               {"btn" : "pay", "name" : "立即付款"}
     *           ]
     *       },
     *       "orderStatus": 3,
     *       "avatar": "https://img05.eelly.test/",
     *       "createdDatetime": "2018-04-19 14:31:50",
     *       "payDatetime": "2018-06-06 14:07:35",
     *       "shipDatetime": "2018-04-19 14:31:50",
     *       "changePrice": 1,
     *       "orderfrom": "未知",
     *       "goodsCount": 1,
     *       "productCount": 0,
     *       "goodsList": [
     *           {
     *               "ogId": "20000153",
     *               "orderId": "116",
     *               "goodsId": 1450168197,
     *               "gsId": "195022004",
     *               "price": "2900",
     *               "quantity": "3",
     *               "goodsName": "【日韩女装旗舰店】 2018新款 针织衫/毛衣  包邮",
     *               "goodsImage": "https://img03.eelly.test/G02/M00/00/03/small_ooYBAFqaRR6IF0K1AAFPWNeoLjcAAABgQK8bi8AAU9w267.jpg",
     *               "goodsNumber": "3",
     *               "spec": "颜色:如图色,尺码:均码",
     *               "createdTime": "1524119511",
     *               "updateTime": "2018-04-19 14:31:32"
     *           },
     *           {
     *               "ogId": "20000154",
     *               "orderId": "116",
     *               "goodsId": 1450168334,
     *               "gsId": "195022184",
     *               "price": "11100",
     *               "quantity": "1",
     *               "goodsName": "fgh ",
     *               "goodsImage": "https://img02.eelly.test/G02/M00/00/03/small_ooYBAFrDQlaIcTeFAAHMuyce2dIAAABggCCW44AAczT140.jpg",
     *               "goodsNumber": "1",
     *               "spec": "颜色:如图色,尺码:均码",
     *               "createdTime": "1524119511",
     *               "updateTime": "2018-04-19 14:31:32"
     *           }
     *       ],
     *       "styleCount": 2,
     *       "totalCount": 4,
     *       "returnFlagTemp": 0,
     *       "timeList": {
     *           "createdTime": 1524119510,
     *           "payTime": 1528265255,
     *           "shareTime": 0,
     *           "shipTime": 1524119510,
     *           "receiveTime": 1537525400
     *       }
     *   }
     * )
     *
     * @author hehui<hehui@eelly.net>
     */
    public function orderDetailsAsync(int $orderId, UidDTO $uidDTO = null)
    {
        return EellyClient::request('order/buyerOrder', 'orderDetails', false, $orderId, $uidDTO);
    }

    /**
     * 延长收货时间.
     *
     * @param int         $orderId 订单id
     * @param UidDTO|null $uidDTO  uid dto
     *
     * @return bool
     *
     * @requestExample({"orderId":"160"})
     *
     * @returnExample(true)
     *
     * @author hehui<hehui@eelly.net>
     */
    public function overtime(int $orderId, UidDTO $uidDTO = null): bool
    {
        return EellyClient::request('order/buyerOrder', 'overtime', true, $orderId, $uidDTO);
    }

    /**
     * 延长收货时间.
     *
     * @param int         $orderId 订单id
     * @param UidDTO|null $uidDTO  uid dto
     *
     * @return bool
     *
     * @requestExample({"orderId":"160"})
     *
     * @returnExample(true)
     *
     * @author hehui<hehui@eelly.net>
     */
    public function overtimeAsync(int $orderId, UidDTO $uidDTO = null)
    {
        return EellyClient::request('order/buyerOrder', 'overtime', false, $orderId, $uidDTO);
    }

    /**
     * 通知商家发送我的某个订单商品.
     *
     * @param int         $orderId 订单id
     * @param UidDTO|null $uidDTO  uid dto
     *
     * @return bool
     *
     * @requestExample({"orderId":"160"})
     *
     * @returnExample(true)
     *
     * @author hehui<hehui@eelly.net>
     */
    public function notifySendProducts(int $orderId, UidDTO $uidDTO = null): bool
    {
        return EellyClient::request('order/buyerOrder', 'notifySendProducts', true, $orderId, $uidDTO);
    }

    /**
     * 通知商家发送我的某个订单商品.
     *
     * @param int         $orderId 订单id
     * @param UidDTO|null $uidDTO  uid dto
     *
     * @return bool
     *
     * @requestExample({"orderId":"160"})
     *
     * @returnExample(true)
     *
     * @author hehui<hehui@eelly.net>
     */
    public function notifySendProductsAsync(int $orderId, UidDTO $uidDTO = null)
    {
        return EellyClient::request('order/buyerOrder', 'notifySendProducts', false, $orderId, $uidDTO);
    }

    /**
     * 取消某个订单.
     *
     * @param int         $orderId 订单id
     * @param UidDTO|null $uidDTO  uid dto
     *
     * @return bool
     *
     * @requestExample({"orderId":"160"})
     *
     * @returnExample(true)
     *
     * @author hehui<hehui@eelly.net>
     */
    public function cancelOrder(int $orderId, UidDTO $uidDTO = null): bool
    {
        return EellyClient::request('order/buyerOrder', 'cancelOrder', true, $orderId, $uidDTO);
    }

    /**
     * 取消某个订单.
     *
     * @param int         $orderId 订单id
     * @param UidDTO|null $uidDTO  uid dto
     *
     * @return bool
     *
     * @requestExample({"orderId":"160"})
     *
     * @returnExample(true)
     *
     * @author hehui<hehui@eelly.net>
     */
    public function cancelOrderAsync(int $orderId, UidDTO $uidDTO = null)
    {
        return EellyClient::request('order/buyerOrder', 'cancelOrder', false, $orderId, $uidDTO);
    }

    /**
     * 确认收货.
     *
     * @param int         $orderId 订单id
     * @param UidDTO|null $uidDTO  uid dto
     *
     * @return bool
     *
     * @returnExample(true)
     *
     * @author hehui<hehui@eelly.net>
     */
    public function confirmReceivedOrder(int $orderId, UidDTO $uidDTO = null): bool
    {
        return EellyClient::request('order/buyerOrder', 'confirmReceivedOrder', true, $orderId, $uidDTO);
    }

    /**
     * 确认收货.
     *
     * @param int         $orderId 订单id
     * @param UidDTO|null $uidDTO  uid dto
     *
     * @return bool
     *
     * @returnExample(true)
     *
     * @author hehui<hehui@eelly.net>
     */
    public function confirmReceivedOrderAsync(int $orderId, UidDTO $uidDTO = null)
    {
        return EellyClient::request('order/buyerOrder', 'confirmReceivedOrder', false, $orderId, $uidDTO);
    }

    /**
     * 添加订单备注.
     *
     * @param int         $orderId 订单id
     * @param string      $memo    备注内容
     * @param int         $type    2. 备忘 4. 留言
     * @param UidDTO|null $uidDTO  uid dto
     *
     * @return bool
     *
     * @requestExample({"orderId":"160","memo":"你买了个表", "type":4})
     *
     * @returnExample(true)
     *
     * @author hehui<hehui@eelly.net>
     */
    public function addMemo(int $orderId, string $memo, int $type, UidDTO $uidDTO = null): bool
    {
        return EellyClient::request('order/buyerOrder', 'addMemo', true, $orderId, $memo, $type, $uidDTO);
    }

    /**
     * 添加订单备注.
     *
     * @param int         $orderId 订单id
     * @param string      $memo    备注内容
     * @param int         $type    2. 备忘 4. 留言
     * @param UidDTO|null $uidDTO  uid dto
     *
     * @return bool
     *
     * @requestExample({"orderId":"160","memo":"你买了个表", "type":4})
     *
     * @returnExample(true)
     *
     * @author hehui<hehui@eelly.net>
     */
    public function addMemoAsync(int $orderId, string $memo, int $type, UidDTO $uidDTO = null)
    {
        return EellyClient::request('order/buyerOrder', 'addMemo', false, $orderId, $memo, $type, $uidDTO);
    }

    /**
     * 删除某个订单.
     *
     * @param int         $orderId 订单id
     * @param UidDTO|null $uidDTO  uid dto
     *
     * @return bool
     *
     * @requestExample({"orderId":"160"})
     *
     * @returnExample(true)
     *
     * @author hehui<hehui@eelly.net>
     */
    public function deleteOrder(int $orderId, UidDTO $uidDTO = null): bool
    {
        return EellyClient::request('order/buyerOrder', 'deleteOrder', true, $orderId, $uidDTO);
    }

    /**
     * 删除某个订单.
     *
     * @param int         $orderId 订单id
     * @param UidDTO|null $uidDTO  uid dto
     *
     * @return bool
     *
     * @requestExample({"orderId":"160"})
     *
     * @returnExample(true)
     *
     * @author hehui<hehui@eelly.net>
     */
    public function deleteOrderAsync(int $orderId, UidDTO $uidDTO = null)
    {
        return EellyClient::request('order/buyerOrder', 'deleteOrder', false, $orderId, $uidDTO);
    }

    /**
     * 退货退款详情.
     *
     * > from_os_id 和 to_os_id 状态说明
     *
     *  key    |  value
     *  ------ | -------
     *  16     | 申请退货退款
     *  17     | 同意退货 等待买家发货
     *  18     | 发出退货 等待卖家收货
     *  19     | 拒绝退货退款 看certificate - type 1:仅退款 2:退货退款
     *  20     | 重新发起退货退款
     *  21     | 确认退款
     *  25     | 退货退款成功
     *  26     | 交易取消
     *  27     | 退款取消
     *
     * > remark_type 退货原因状态
     *
     *  key    |  value
     *  ------ | -------
     *  0      | 其他
     *  3      | 商品质量不好
     *  4      | 卖家超时未发货
     *  5      | 卖家发错货
     *  7      | 商品与描述不符
     *  8      | 收到商品破损
     *  11     | 商品缺货
     *  12     | 与卖家协商一致退款
     *  13     | 不想要了／拍错了
     *
     * > 返回数据说明
     *
     * key | type |  value
     * --- | ---- | -------
     * applyAmount      | int      | 申请的金额
     * applyFreight     | int      | 申请的运费
     * type             | int      | 退货退款类型: 1 退款 2 退货
     * remarkType       | string   | 退货退款原因
     * remark           | string   | 备注说明
     * certificate      | int      | 凭证
     * seller_id        | int      | 店铺id
     * finished_time    | int      | 退货退款完成时间
     * seller_name      | string   | 店铺名称
     * orderSn          | int      | 订单编号
     * firstTime        | int      | 第一次发起的退货退款时间戳
     * lastTime         | int      | 最后一次更新的时间
     * time             | int      | 倒计时的时间
     * statusContent    | string   | 详情文案信息
     * status           | int      | 文案状态 1:申请退款中,2:申请退货中,3:卖家拒绝退款，等待我处理,4:卖家同意退货，等待我退货,5:卖家拒绝退货，等待我处理,6:我已发货，等待卖家发货,7:退货退款成功
     *
     * @param int $orderId 订单id
     *
     * @return array
     *
     * @requestExample({"orderId":116})
     * @returnExample({
     *      "applyAmount":"10",
     *      "applyFreight":"1",
     *      "type":"2",
     *      "seller_id":"1761477",
     *      "seller_name":"广东省广州市萌STYLE时尚童装店批发服装店细心",
     *      "remarkType":"卖家超时未发货",
     *      "remark":"-",
     *      "statusContent":"退货退款成功",
     *      "status":"7",
     *      "certificate":"[]",
     *      "orderSn":"1810837219",
     *      "firstTime":"1529908563",
     *      "finished_time":"1529908563",
     *      "lastTime":"1529913120",
     *      "time":"9281"
     * })
     *
     * @author sunanzhi <sunanzhi@hotmail.com>
     */
    public function orderDetail(int $orderId): array
    {
        return EellyClient::request('order/buyerOrder', 'orderDetail', true, $orderId);
    }

    /**
     * 退货退款详情.
     *
     * > from_os_id 和 to_os_id 状态说明
     *
     *  key    |  value
     *  ------ | -------
     *  16     | 申请退货退款
     *  17     | 同意退货 等待买家发货
     *  18     | 发出退货 等待卖家收货
     *  19     | 拒绝退货退款 看certificate - type 1:仅退款 2:退货退款
     *  20     | 重新发起退货退款
     *  21     | 确认退款
     *  25     | 退货退款成功
     *  26     | 交易取消
     *  27     | 退款取消
     *
     * > remark_type 退货原因状态
     *
     *  key    |  value
     *  ------ | -------
     *  0      | 其他
     *  3      | 商品质量不好
     *  4      | 卖家超时未发货
     *  5      | 卖家发错货
     *  7      | 商品与描述不符
     *  8      | 收到商品破损
     *  11     | 商品缺货
     *  12     | 与卖家协商一致退款
     *  13     | 不想要了／拍错了
     *
     * > 返回数据说明
     *
     * key | type |  value
     * --- | ---- | -------
     * applyAmount      | int      | 申请的金额
     * applyFreight     | int      | 申请的运费
     * type             | int      | 退货退款类型: 1 退款 2 退货
     * remarkType       | string   | 退货退款原因
     * remark           | string   | 备注说明
     * certificate      | int      | 凭证
     * seller_id        | int      | 店铺id
     * finished_time    | int      | 退货退款完成时间
     * seller_name      | string   | 店铺名称
     * orderSn          | int      | 订单编号
     * firstTime        | int      | 第一次发起的退货退款时间戳
     * lastTime         | int      | 最后一次更新的时间
     * time             | int      | 倒计时的时间
     * statusContent    | string   | 详情文案信息
     * status           | int      | 文案状态 1:申请退款中,2:申请退货中,3:卖家拒绝退款，等待我处理,4:卖家同意退货，等待我退货,5:卖家拒绝退货，等待我处理,6:我已发货，等待卖家发货,7:退货退款成功
     *
     * @param int $orderId 订单id
     *
     * @return array
     *
     * @requestExample({"orderId":116})
     * @returnExample({
     *      "applyAmount":"10",
     *      "applyFreight":"1",
     *      "type":"2",
     *      "seller_id":"1761477",
     *      "seller_name":"广东省广州市萌STYLE时尚童装店批发服装店细心",
     *      "remarkType":"卖家超时未发货",
     *      "remark":"-",
     *      "statusContent":"退货退款成功",
     *      "status":"7",
     *      "certificate":"[]",
     *      "orderSn":"1810837219",
     *      "firstTime":"1529908563",
     *      "finished_time":"1529908563",
     *      "lastTime":"1529913120",
     *      "time":"9281"
     * })
     *
     * @author sunanzhi <sunanzhi@hotmail.com>
     */
    public function orderDetailAsync(int $orderId)
    {
        return EellyClient::request('order/buyerOrder', 'orderDetail', false, $orderId);
    }

    /**
     * 返回最多退款金额 和 运费.
     *
     * @param int $orderId 订单id
     *
     * @return array
     *
     * @requestExample({"orderId":"5000100"})
     * @returnExample({"returnAmount":1000, "freight":0})
     *
     * @author sunanzhi <sunanzhi@hotmail.com>
     */
    public function orderRefundMoney(int $orderId): array
    {
        return EellyClient::request('order/buyerOrder', 'orderRefundMoney', true, $orderId);
    }

    /**
     * 返回最多退款金额 和 运费.
     *
     * @param int $orderId 订单id
     *
     * @return array
     *
     * @requestExample({"orderId":"5000100"})
     * @returnExample({"returnAmount":1000, "freight":0})
     *
     * @author sunanzhi <sunanzhi@hotmail.com>
     */
    public function orderRefundMoneyAsync(int $orderId)
    {
        return EellyClient::request('order/buyerOrder', 'orderRefundMoney', false, $orderId);
    }

    /**
     * 集赞不足人数提醒 (支付后22小时未集赞成功，则立刻发送提醒通知).
     *
     * @param int $limit 每次处理的数量
     *
     * @return array
     *
     * @requestExample({"limit":"50"})
     * @returnExample([{"orderId":"50001659","buyerId":"2108412","requireLikes":"1","payTime":"1531724066","likes":"0"},{"orderId":"50001706","buyerId":"2848170","requireLikes":"1","payTime":"1532066230","likes":null}])
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2018.08.28
     */
    public function listOrderCollectionNotEnough(int $limit = 50): array
    {
        return EellyClient::request('order/buyerOrder', 'listOrderCollectionNotEnough', true, $limit);
    }

    /**
     * 集赞不足人数提醒 (支付后22小时未集赞成功，则立刻发送提醒通知).
     *
     * @param int $limit 每次处理的数量
     *
     * @return array
     *
     * @requestExample({"limit":"50"})
     * @returnExample([{"orderId":"50001659","buyerId":"2108412","requireLikes":"1","payTime":"1531724066","likes":"0"},{"orderId":"50001706","buyerId":"2848170","requireLikes":"1","payTime":"1532066230","likes":null}])
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2018.08.28
     */
    public function listOrderCollectionNotEnoughAsync(int $limit = 50)
    {
        return EellyClient::request('order/buyerOrder', 'listOrderCollectionNotEnough', false, $limit);
    }

    /**
     * 更新订单的消息通知标志.
     *
     * @param int $orderId    订单id
     * @param int $noticeFlag 消息通知标志
     *
     * @return bool
     *
     * @requestExample({"orderId":"50001707", "noticeFlag":8})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2018.08.28
     */
    public function updateOrderNoticeFlag(int $orderId, int $noticeFlag): bool
    {
        return EellyClient::request('order/buyerOrder', 'updateOrderNoticeFlag', true, $orderId, $noticeFlag);
    }

    /**
     * 更新订单的消息通知标志.
     *
     * @param int $orderId    订单id
     * @param int $noticeFlag 消息通知标志
     *
     * @return bool
     *
     * @requestExample({"orderId":"50001707", "noticeFlag":8})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2018.08.28
     */
    public function updateOrderNoticeFlagAsync(int $orderId, int $noticeFlag)
    {
        return EellyClient::request('order/buyerOrder', 'updateOrderNoticeFlag', false, $orderId, $noticeFlag);
    }

    /**
     *  pc买家主页订单信息.
     *
     * @param int $buyerId
     *
     * @return array
     */
    public function listOrderBuyerHome(int $buyerId): array
    {
        return EellyClient::request('order/buyerOrder', 'listOrderBuyerHome', true, $buyerId);
    }

    /**
     *  pc买家主页订单信息.
     *
     * @param int $buyerId
     *
     * @return array
     */
    public function listOrderBuyerHomeAsync(int $buyerId)
    {
        return EellyClient::request('order/buyerOrder', 'listOrderBuyerHome', false, $buyerId);
    }

    /**
     * 根据查询条件，返回对应的order_id
     *
     * @param string $condition 查询条件
     * @param array $bind 绑定参数
     * @return int
     *
     * @requestExample({"condition":"order_sn = :orderSn:", "bind":{"orderSn":"2154034430329778"}})
     * @returnExample(50002202)
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.12.12
     */
    public function getOrderIdByCondition(string $condition, array $bind = []):int
    {
        return EellyClient::request('order/buyerOrder', __FUNCTION__, true, $condition, $bind);
    }

    /**
     * @inheritdoc
     */
    public function getOrderIdByConditionAsync(string $condition, array $bind = []):int
    {
        return EellyClient::request('order/buyerOrder', __FUNCTION__, false, $condition, $bind);
    }

    /**
     * 根据传过来的直播id，获取对应的订单信息
     *
     * @param int $liveId 直播id
     * @return array
     *
     * @requestExample({"liveId":1}})
     * @returnExample({"newUserNum":2,"oldUserNum":1,"orderNum":10,"payNum":2,"totalAmount":1000,"payAmount":200,"appletsOrderNum":0,"appletsPayNum":0,"appletsTotalAmount":0,"appletsPayAmount":0})
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2019.01.14
     */
    public function getOrderInfoByLiveId(int $liveId):array
    {
        return EellyClient::request('order/buyerOrder', __FUNCTION__, true, $liveId);
    }

    /**
     * @inheritdoc
     */
    public function getOrderInfoByLiveIdAsync(int $liveId):array
    {
        return EellyClient::request('order/buyerOrder', __FUNCTION__, false, $liveId);
    }

    /**
     * 根据传过来的订单id，返回对应的订单总额跟运费总额
     *
     * @param array $orderIds 订单ID
     * @return array
     *
     * @requestExample({"orderIds":[50002202, 50002203, 50002204, 50002218]})
     * @returnExample({"totalAmount":150.25,"totalFreight":143.2})
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2019.02.22
     */
    public function getSumDataByOrderIds(array $orderIds):array
    {
        return EellyClient::request('order/buyerOrder', __FUNCTION__, true, $orderIds);
    }

    /**
     * @inheritdoc
     */
    public function getSumDataByOrderIdsAsync(array $orderIds):array
    {
        return EellyClient::request('order/buyerOrder', __FUNCTION__, false, $orderIds);
    }

    /**
     * 根据传过来的店铺ID跟时间范围，返回该店铺各个买家的下单购买金额
     *
     * @param int $storeId  店铺id
     * @param int $startTime 开始时间
     * @param int $endTime  结束时间
     * @return array
     *
     * @requestExample({"storeId":148086, "startTime":1540347553, "endTime":1547814819})
     * @returnExample({"payOrderNum":4,"payBuyerNum":2,"buyerList":{"1762341":"10","2108435":"3"}})
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2019.03.26
     */
    public function listBuyerOrderAmount(int $storeId, int $startTime , int $endTime):array
    {
        return EellyClient::request('order/buyerOrder', __FUNCTION__, true, $storeId, $startTime, $endTime);
    }

    /**
     * @inheritdoc
     */
    public function listBuyerOrderAmountAsync(int $storeId, int $startTime , int $endTime):array
    {
        return EellyClient::request('order/buyerOrder', __FUNCTION__, false, $storeId, $startTime, $endTime);
    }

    /**
     * 获取一个店铺多少天内，用户的回头率
     *
     * @param int $storeId 店铺ID
     * @param int $day 天数
     * @return float
     *
     * @requestExample({"storeId":148086, "day":30})
     * @returnExample(5.5)
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2019.03.28
     */
    public function getStoreTurnOverRate(int $storeId, int $day = 30):float
    {
        return EellyClient::request('order/buyerOrder', __FUNCTION__, true, $storeId, $day);
    }

    /**
     * @inheritdoc
     */
    public function getStoreTurnOverRateAsync(int $storeId, int $day = 30):float
    {
        return EellyClient::request('order/buyerOrder', __FUNCTION__, false, $storeId, $day);
    }

    /**
     * 根据传过来的店铺Id跟天数，返回对应的回头客数量跟复购率
     *
     * @param array $storeIds 店铺ID数组
     * @param int $day 天数
     * @return array
     *
     * @requestExample({"storeIds":[148086,1760467], "day":30})
     * @returnExample({"148086":{"turnOverNum":4,"turnOverRate":2.92},"1760467":{"turnOverNum":2,"turnOverRate":1.34}})
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2019.03.30
     */
    public function listStoreTurnOverData(array $storeIds, int $day = 30):array
    {
        return EellyClient::request('order/buyerOrder', __FUNCTION__, true, $storeIds, $day);
    }

    /**
     * @inheritdoc
     */
    public function listStoreTurnOverDataAsync(array $storeIds, int $day = 30):array
    {
        return EellyClient::request('order/buyerOrder', __FUNCTION__, false, $storeIds, $day);
    }

    /**
     * 返回指定天数内支付成功的总用户数
     *
     * @param int $day 天数
     * @return int
     *
     * @requestExample({"day":30})
     * @returnExample(7)
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2019.04.09
     */
    public function getPayBuyerNumByDay(int $day = 30):int
    {
        return EellyClient::request('order/buyerOrder', __FUNCTION__, true, $day);
    }

    /**
     * @inheritdoc
     */
    public function getPayBuyerNumByDayAsync(int $day = 30):int
    {
        return EellyClient::request('order/buyerOrder', __FUNCTION__, false, $day);
    }

    /**
     * 获取用户在全平台支付成功的订单总笔数
     *
     * @param array $userIds 用户id
     * @return array
     *
     * @requestExample({"userIds":[148086,1762341]})
     * @returnExample({"1762341":38,"3058657":1,"148086":0})
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2019.04.18
     */
    public function listPlatformOrderNum(array $userIds):array
    {
        return EellyClient::request('order/buyerOrder', __FUNCTION__, true, $userIds);
    }

    /**
     * @inheritdoc
     */
    public function listPlatformOrderNumAsync(array $userIds):array
    {
        return EellyClient::request('order/buyerOrder', __FUNCTION__, false, $userIds);
    }

    /**
     * 获取用户在某个店铺，支付成功的订单总笔数
     *
     * @param array $userIds 用户ID集合
     * @param int $storeId 店铺ID
     * @return array
     *
     * @requestExample({"userIds":[148086,1762341], "storeId":148086})
     * @returnExample({"1762341":38,"148086":0})
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2019.04.18
     */
    public function listOrderNumByStoreId(array $userIds, int $storeId):array
    {
        return EellyClient::request('order/buyerOrder', __FUNCTION__, true, $userIds, $storeId);
    }

    /**
     * @inheritdoc
     */
    public function listOrderNumByStoreIdAsync(array $userIds, int $storeId):array
    {
        return EellyClient::request('order/buyerOrder', __FUNCTION__, false, $userIds, $storeId);
    }

    /**
     * 根据传过来的店铺id跟天数，返回该店铺支付成功的用户数量 (根据buyer_id去重)
     *
     * @param array $storeIds 店铺ID
     * @param int $day  指定天数
     * @return int
     *
     * @requestExample({"storeIds":[148086,1760467]})
     * @returnExample([{"seller_id":"148086","num":"3"},{"seller_id":"1760467","num":"6"}])
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2019.05.30
     */
    public function getUserPayNumByStoreId(array $storeIds, int $day = 30):array
    {
        return EellyClient::request('order/buyerOrder', __FUNCTION__, true, $storeIds, $day);
    }

    /**
     * @inheritdoc
     */
    public function getUserPayNumByStoreIdAsync(array $storeIds, int $day = 30):array
    {
        return EellyClient::request('order/buyerOrder', __FUNCTION__, false, $storeIds, $day);
    }

    /**
     * 根据用户id，获取用户累计的订单总笔数和总金额
     *
     * @param int $userId 用户id
     * @return array
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2019.07.03
     */
    public function getUserTotalOrderInfo(int $userId):array
    {
        return EellyClient::request('order/buyerOrder', __FUNCTION__, true, $userId);
    }

    /**
     * @inheritdoc
     */
    public function getUserTotalOrderInfoAsync(int $userId):array
    {
        return EellyClient::request('order/buyerOrder', __FUNCTION__, false, $userId);
    }

    /**
     * 批量获取用户的进货积分相关数据
     *
     * @param array $userIds 用户id
     * @return array
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2019.07.06
     */
    public function listUserPurchaseInfo(array $userIds):array
    {
        return EellyClient::request('order/buyerOrder', __FUNCTION__, true, $userIds);
    }

    /**
     * @inheritdoc
     */
    public function listUserPurchaseInfoAsync(array $userIds):array
    {
        return EellyClient::request('order/buyerOrder', __FUNCTION__, false, $userIds);
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
