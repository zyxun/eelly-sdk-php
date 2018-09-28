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
 * 订单.
 *
 * @author wangjiang<wangjiang@eelly.net>
 */
interface OrderInterface
{
    /**
     * 新增订单
     * 新增订单信息.
     *
     * @param array             $orderData                  订单数据
     * @param int               $orderData["0"]["storeId"]  店铺id
     * @param array             $orderData["0"]["goodsIds"] 商品数据
     * @param int               $addrId                     用户地址id
     * @param \Eelly\DTO\UidDTO $user                       登录用户信息
     *
     * @throws \Eelly\SDK\Order\Exception\OrderException
     *
     * @return bool 新增结果
     * @requestExample({
     *     "orderData":[
     *         {
     *             "storeId":1,
     *             "goodsIds":[1, 2, 3]
     *         }
     *     ],
     *     "addrId":3
     * })
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年10月25日
     */
    public function addOrder(array $orderData, int $addrId, UidDTO $user = null): bool;

    /**
     * 修改订单
     * 修改订单信息.
     *
     * @param array             $orderData                订单数据
     * @param int               $orderData["orderId"]     订单id
     * @param int               $orderData["updateType"]  修改类型 1修改订单金额 2修改订单运费
     * @param int               $orderData["updateValue"] 修改的值
     * @param \Eelly\DTO\UidDTO $user                     登录用户信息
     *
     * @throws \Eelly\SDK\Order\Exception\OrderException
     *
     * @return bool 修改结果
     * @requestExample({
     *     "orderData":{
     *         "orderId":1,
     *         "updateType":1,
     *         "updateValue":12
     *     }
     * })
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年10月25日
     */
    public function updateOrder(array $orderData, UidDTO $user = null): bool;

    /**
     * 删除订单
     * 删除订单.
     *
     * @param int               $orderId 订单id
     * @param \Eelly\DTO\UidDTO $user    登录用户信息
     *
     * @throws \Eelly\SDK\Order\Exception\OrderException
     *
     * @return bool 删除结果
     * @requestExample({
     *     "orderId":1
     * })
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年10月25日
     */
    public function deleteOrder(int $orderId, UidDTO $user = null): bool;

    /**
     * 获取订单信息
     * 获取订单信息.
     *
     * @param int $orderId 订单id
     *
     * @throws \Eelly\SDK\Order\Exception\OrderException
     *
     * @return array 订单信息
     * @requestExample({
     *     "orderId":1
     * })
     * @returnExample({
     *     "orderId":1,
     *     "orderSn":"xxxxxxx",
     *     "orderAmount":123,
     *     "freight":123,
     *     "commission":0,
     *     "discountAmount":0,
     *     "logisticsName":"配送方式",
     *     "createdTime":"1970-01-01 01:01:01",
     *     "sellerInfo":{
     *         "storeName":"店铺名称",
     *         "sellerName":"卖家名称",
     *         "phone":"13xxxxxxxx"
     *     },
     *     "buyerInfo":{
     *         "nickname":"买家昵称",
     *         "consignee":"收货人",
     *         "address":"收货地址",
     *         "phone":"13xxxxxxxx"
     *     },
     *     "goodsInfo":[
     *         {
     *             "goodsId":1,
     *             "goodsImage":"http://image.eelly.test/abc.jpg",
     *             "goodsName":"商品名称",
     *             "goodsNumber":"货号",
     *             "singlePrice":"123",
     *             "specInfo":[
     *                 {
     *                     "color":"颜色",
     *                     "size":"尺码",
     *                     "price":123,
     *                     "quantity":1
     *                 }
     *             ],
     *             "goodsCount":2,
     *             "totalPrice":10.00
     *         }
     *     ]
     * })
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年10月25日
     */
    public function getOrderInfo(int $orderId): array;

    /**
     * 校验是否能否能快速支付.
     *
     * @param int $orderId 订单ID
     *
     * @return bool 能返回true,不能返回false
     * @requestExample({"orderId":5000001})
     * @returnExample(true)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2018年01月05日
     * @Validation(
     * @OperatorValidator(0, {message:"非法的订单id",operator:[gt,0]})
     * )
     */
    public function checkIsFast(int $orderId): bool;

    /**
     * 更新订单标识.
     *
     * @param int $orderId   订单ID
     * @param int $extension 订单标识：0 普通订单 1 分销订单 2 包销订单(买家) 4 自营订单 8 云店订单 16 厂+订单 32 省邮区订单 64 包销期订单(卖家) 128 即时到帐订单（支付成功立即结算卖家）
     *
     * @return bool
     * @requestExample({"orderId":5000001,"extension":128})
     * @returnExample(true)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2018年01月05日
     * @Validation(
     * @OperatorValidator(0, {message:"非法的订单id",operator:[gt,0]}),
     * @OperatorValidator(1, {message:"非法的订单标识",operator:[gte,0]})
     * )
     */
    public function updateOrderExtension(int $orderId, int $extension = 0): bool;

    /**
     * 添加询价下单记录.
     *
     * @param array  $data               询价下单数据
     * @param int    $data['refType']    订单类型标识：0 店铺商品订单 1 询价商品订单
     * @param int    $data['sellerId']   卖家id
     * @param string $data['sellerName'] 卖家名称
     * @param int    $data['buyerId']    买家id
     * @param string $data['buyerName']  买家名称
     * @param int    $data['extension']  订单标识：0 普通订单 1 分销订单 2 包销订单(买家) 4 自营订单 8 云店订单 16 厂+订单 32 省邮区订单 64 包销期订单(卖家) 128 即时到帐订单（支付成功立即结算卖家）
     * @param int    $data['freight']    订单运费
     * @param int    $data['fromFlag']   订单来源
     * @param string $data['remark']     备注
     *
     * @return bool
     *
     * @requestExample({
     *     "refType":3,
     *     "sellerId":148086,
     *     "sellerName":"molimoq",
     *     "buyerId":1234,
     *     "buyerName":"buyer",
     *     "extension" :0,
     *     "freight" : 10,
     *     "fromFlag":3,
     *     "remark":""
     * })
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2018.01.08
     */
    public function addEnquiryOrder(array $data): int;

    /**
     * 获取物流信息.
     *
     * @param string $trackingNo 物流好
     * @param string $express    物流公司
     *
     * @return bool
     * @requestExample({"trackingNo":"1202516745301","express":"auto"})
     * @returnExample({{
     *  "number": "1202237859178",
     *  "type": "YUNDA",
     *  "name": "韵达",
     *  "letter": "Y",
     *  "tel": "95546",
     * "list": [{
     *     "time": "2017-01-07 16:05:38",
     *    "status": "湖南省炎陵县公司快件已被 已签收 签收"
     *  },
     *  {
     *  "time": "2017-01-07 16:02:43",
     *  "status": "湖南省炎陵县公司快件已被 已签收 签收"
     *  }],
     * "deliverystatus": "3",
     * "issign": "1"
     * }})
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2018年04月09日
     * @Validation(
     * @PresenceOf(0, {message:"非法的物流号"})
     * )
     *
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * ---------------|-------|--------------
     * number         |string |订单号
     * type           |string |要查询的快递公司代码
     * name           |string |物流公司名称
     * letter         |string |
     * tel            |string |电话号码
     * list           |array  |物流动态
     * list["time"]   |string |动态时间
     * list["status"] |string |动态状态
     * deliverystatus |string |快递单当前的状态
     * 0：在途，即货物处于运输过程中；
     * 1：揽件，货物已由快递公司揽收并且产生了第一条跟踪信息；
     * 2：疑难，货物寄送过程出了问题；
     * 3：签收，收件人已签收；
     * 4：退签，即货物由于用户拒签、超区等原因退回，而且发件人已经签收；
     * 5：派件，即快递正在进行同城派件；
     * 6：退回，货物正处于退回发件人的途中；
     * issign         |string |
     */
    public function getExpressByTrackingNo(string $trackingNo, string $express = 'auto'): array;

    /**
     * 新增订单和发起支付.
     *
     * @param array $orderData 订单信息
     * @param array $userInfo 用户信息
     * @param array $memoInfo 额外信息
     * @requestExample({
     * "orderData":[
     * {
     * "storeId":1,
     * "goodsIds":[1, 2]
     * }
     * ],
     * "addrId":3
     * })
     * @returnExample(true)
     * @return array
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2018年04月19日
     */
    public function addMallOrderAndPay(array $orderData, array $userInfo, array $memoInfo = []): array;


    /**
     * 校验订单是否完成.
     *
     * @param array $orderSns 订单号
     * @param string $billNo 交易号
     * @return array
     * @requestExample({"orderSns":[1810833729,1810818814],"billNo":"1711114252646cvAcu"})
     * @returnExample([1,2,3])
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2018年04月19日
     */
    public function checkOrderIsPayed(array $orderSns, string $billNo = ''): array;

    /**
     * 回调订单支付.
     *
     * @param string $billNo 衣联交易号
     * @requestExample({"billNo":"1711114177786cvA2s"})
     * @returnExample(true)
     * @return bool
     *
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2018年05月05日
     * @Validation(
     * @PresenceOf(0,{message:"数据不能为空"})
     * )
     */
    public function setOrderPay(string $billNo): bool ;

    /**
     * 需要自动结算货款.
     *
     * @return array
     * @requestExample()
     * @returnExample([{"orderId":"116","orderSn":"1810837219","sellerId":"1762613","buyerId":"2108403","payTime":"1524130597","orderAmount":"19800","freight":"1","commission":"0","applyAmount":null,"returnAmount":null,"applyFreight":null,"returnFreight":null}])
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2018年05月05日
     */
    public function getNeedConfirmedList(): array;

    /**
     * 自动确认成功.
     *
     * @param int $orderId 订单ID
     *
     * @return bool
     * @requestExample({"orderId":116})
     * @returnExample(true)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2018年05月05日
     */
    public function operateFinishOrder(int $orderId): bool;

    /**
     * 订单存在的情况下发起的支付.
     *
     * @param array $orderSns 多个订单Id
     * @param string $openId 微信唯一标识
     * @return array
     * @requestExample({"orderSns":[1810802172,1810892762]})
     * @returnExample({"platform":"wechatPayJs","billNo":"1804206f3430600Gbl","data":{"appId":"wx4570a3e7921ad847","package":"prepay_id=wx20092504076787ea261301530251393671","nonceStr":"ce40cc6e4eb37b4c6a5aed1af2bb0274","timeStamp":"1524187504","signType":"MD5","paySign":"079FC612EDF4E4D589334F41F15616C2"},"orderSn":[1810802172,1810892762]})
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2018年04月20日
     */
    public function orderGoPay(array $orderSns, $type = 'wxSmall', $openId = ''): array;

    /**
     * 根据订单id，获取订单相关信息
     *
     * @param int $orderId 订单id
     * @return array
     * @throws \Eelly\SDK\Order\Exception\OrderException
     * @requestExample({"orderId":5000214})
     * @returnExample({"orderId":5000214,"orderSn":1813399100,"sellerId":148086,"buyerId":1762254,"buyerName":"test","orderAmount":1400,"created_time":1526292190})
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.05.15
     */
    public function getOrderData(int $orderId):array;

    /**
     * 根据传过来的订单ID跟值，更新消息通知标识的值
     *
     * @param int $orderId 订单id
     * @param int $noticeFlag 消息通知标识的值
     * @return bool
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.05.18
     */
    public function updateOrderNoticeFlag(int $orderId, int $noticeFlag):bool;

    /**
     * 获取管理后台的数据列表.
     *
     * @param array $data 查询条件
     * @param int $page  第几页
     * @param int $limit 查询条数
     * @param string $orderBy
     * @return array
     * @requestExample({"data":["storeId":148086,"extension":1]})
     * @returnExample({
     *   "items": [
     *       {
     *           "orderId": "5000205",
     *           "orderSn": "1813016929",
     *           "extension": "0",
     *           "batchNumber": "0",
     *           "chunkNumber": "0",
     *           "sellerId": "148086",
     *           "sellerName": "莫琼小店",
     *           "buyerId": "2108403",
     *           "buyerName": "yl_jn003778(yl_jn003778)",
     *           "osId": "15",
     *           "payTime": "0",
     *           "shipTime": "0",
     *           "delayTime": "0",
     *           "frozenTime": "0",
     *           "finishedTime": "0",
     *           "orderAmount": "4800",
     *           "freight": "1800",
     *           "commission": "0",
     *           "returnFlag": "0",
     *           "evaluateFlag": "0",
     *           "deleteFlag": "0",
     *           "fromFlag": "3",
     *           "createdTime": "1526024934",
     *           "updateTime": "2018-05-15 20:28:59"
     *       },
     *       {
     *           "orderId": "5000204",
     *           "orderSn": "1813035805",
     *           "extension": "0",
     *           "batchNumber": "0",
     *           "chunkNumber": "0",
     *           "sellerId": "148086",
     *           "sellerName": "莫琼小店",
     *           "buyerId": "2108403",
     *           "buyerName": "yl_jn003778(yl_jn003778)",
     *           "osId": "15",
     *           "payTime": "0",
     *           "shipTime": "0",
     *           "delayTime": "259200",
     *           "frozenTime": "0",
     *           "finishedTime": "0",
     *           "orderAmount": "3800",
     *           "freight": "1100",
     *           "commission": "0",
     *           "returnFlag": "0",
     *           "evaluateFlag": "0",
     *           "deleteFlag": "0",
     *           "fromFlag": "3",
     *           "createdTime": "1526024871",
     *           "updateTime": "2018-05-15 20:28:59"
     *       }
     *   ],
     *   "page": {
     *       "totalPages": 54,
     *       "totalItems": 107,
     *       "current": 1,
     *       "limit": 2
     *   }
     * })
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2018年05月15日
     */
    public function getManageOrder(array $data, int $page = 1, int $limit = 10, string $orderBy = 'created_time DESC'): array;

    /**
     * 获取管理后台统计数据.
     * @param array $data 查询条件
     * @return array
     * @requestExample({"data":["storeId":148086,"extension":1]})
     * @returnExample({
     *   "total": "36808",
     *   "totalAmount": "716691664",
     *   "totalGoods": "896767",
     *   "totalReturnAmount": "554528",
     *   "spillCount": "0",
     *   "spillAmount": "0",
     *   "spillGoods": "0",
     *   "spillReturnAmount": "0"
     * })
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2018年05月15日
     */
    public function getManageOrderStat(array $data): array;

    /**
     * 获取订单详情.
     *
     * @param int $orderId 订单ID
     * @return array
     * @requestExample({"orderId":161})
     * @returnExample({
     *  "orderId": "161",
     *  "orderSn": "1811635308",
     *  "orderAmount": "2",
     *  "remark": "",
     *  "createdTime": "1524830823",
     *  "payTime": "0",
     *  "buyerId": "2108403",
     *  "freight": "1",
     *  "osId": "15",
     *  "extension": "0",
     *  "finishedTime": "0",
     *  "buyerName": "juju12",
     *  "sellerName": "莫琼小店",
     *  "regionName": "山西省 晋城市 沁水县",
     *  "address": "2222",
     *  "invoiceNo": "",
     *  "consignee": "蓝厨卫",
     *  "mobile": "11113131313",
     *  "invoiceName": "",
     *  "returnAmount": null,
     *  "likeTime": "1524899508",
     *  "goodsList": [
     *      {
     *          "ogId": "20000216",
     *          "orderId": "161",
     *          "goodsId": "1450168344",
     *          "gsId": "195022196",
     *          "price": "1",
     *          "quantity": "2",
     *          "goodsName": "【莫琼小店】 2018新款 针织衫/毛衣  包邮",
     *          "goodsImage": "https://img01.eelly.test/G02/M00/00/03/small_ooYBAFqzVV2ICEGRAAER2psay8IAAABggBWRl0AARHy759.jpg",
     *          "goodsNumber": "2",
     *          "spec": "颜色:如图色,尺码:均码",
     *          "createdTime": "1524830823",
     *          "updateTime": "2018-05-02 15:17:18"
     *      },
     *      {
     *          "ogId": "20000472",
     *          "orderId": "161",
     *          "goodsId": "1450168344",
     *          "gsId": "195022196",
     *          "price": "1",
     *          "quantity": "2",
     *          "goodsName": "【莫琼小店】 2018新款 针织衫/毛衣  包邮",
     *          "goodsImage": "https://img01.eelly.test/G02/M00/00/03/small_ooYBAFqzVV2ICEGRAAER2psay8IAAABggBWRl0AARHy759.jpg",
     *          "goodsNumber": "2",
     *          "spec": "颜色:如图色,尺码:均码",
     *          "createdTime": "1524830823",
     *          "updateTime": "2018-05-02 15:17:18"
     *      },
     *      {
     *          "ogId": "20000473",
     *          "orderId": "161",
     *          "goodsId": "1450168344",
     *          "gsId": "195022196",
     *          "price": "1",
     *          "quantity": "2",
     *          "goodsName": "【莫琼小店】 2018新款 针织衫/毛衣  包邮",
     *          "goodsImage": "https://img01.eelly.test/G02/M00/00/03/small_ooYBAFqzVV2ICEGRAAER2psay8IAAABggBWRl0AARHy759.jpg",
     *          "goodsNumber": "2",
     *          "spec": "颜色:如图色,尺码:均码",
     *          "createdTime": "1524830823",
     *          "updateTime": "2018-05-02 15:17:18"
     *      }
     *  ],
     *"orderLog": [
     *  {
     *      "olId": "428",
     *      "orderId": "161",
     *      "type": "0",
     *      "handleId": "0",
     *      "handleName": "系统管理员",
     *      "fromOsId": "2",
     *      "toOsId": "15",
     *      "remark": "买家24小时内未支付",
     *      "createdTime": "1525851517",
     *      "updateTime": "2018-05-09 15:38:32"
     *  },
     *  {
     *      "olId": "162",
     *      "orderId": "161",
     *      "type": "0",
     *      "handleId": "0",
     *      "handleName": "",
     *      "fromOsId": "0",
     *      "toOsId": "1",
     *      "remark": "新下单",
     *      "createdTime": "1524830823",
     *      "updateTime": "2018-04-27 20:06:57"
     *  }
     * ]
     *})
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2018年05月17日
     */
    public function getManageOderInfo(int $orderId): array;

    /**
     * 获取店铺的成交订单数，下单就算成交一笔，取消的订单也算入成交数,由商城迁移过来的.
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * --------------------|-------|--------------
     * 148086              |array  |列表下标
     * 148086["sellerId"]  |string |店铺ID
     * 148086["addNum"]    |string |下单数
     * 148086["addAmount"] |string |下单金额
     * 148086["payAmount"] |string |支付金额
     * 148086["payNum"]    |string |支付数
     *
     *
     * @param array $storeIds  店铺id数组
     * @param int   $startTime 开始时间
     * @param int   $endTime   结束时间
     *
     * @requestExample({"storeIds":[148086],'startTime':1514739600,'endTime':1527746679})
     * @returnExample({
     *   "148086": {
     *       "sellerId": "148086",
     *       "addNum": "236",
     *       "addAmount": "2889732",
     *       "payAmount": "14359",
     *       "payNum": "77"
     *   }
     *})
     * @return array
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since  2018年05月31日
     */
    public function getOrderCountsByStoreId(array $storeIds, int $startTime = 0, int $endTime = 0): array;

    /**
     * 获取各卖家未发货订单数量
     *
     * @param int $page  当前页数
     * @param int $limit 每页数量
     * @return array
     *
     * @requestExample({"page": 1, "limit": 1000})
     * @returnExample({
     *     "148086": {"orderCount": 8, "sellerId": 148086}
     * })
     *
     * @author zhangyangxun
     * @since 2018-08-08
     */
    public function getUnshippedInfo(int $page = 1, int $limit = 10): array;
    
    /**
     *  购物车确认下单列表
     *
     * ### 请求参数
     * 字段名 | 类型 |描述
     * ---|---|---
     * data | array |请求参数
     * array $data['isFrom'] | int | 下单类型 1.购物车下单 2.立即下单
     * $data['goods'] | array | 商品信息(立即下单必传,购物车下单传空)
     * $data['goods'][0]['goodsId'] | int | 选中的商品ID
     * $data['goods'][0]['storeId'] | int | 选中的店铺ID
     * $data['goods'][0]['isSpelling'] | int | 是否拼团商品
     * $data['goods'][0]['spec'] | array | 选中的商品规格
     * $data['uniqueIds'][] | array | 购物车商品主键id (购物车下单必传,立即下单传空)
     * >请求数据说明
     * >data['goods']['spec'] 商品规格字段数据说明
     * >字段名 | 类型 |描述
     * >--- | ---- | -----
     * >quantity | int | 购买数量
     * >spId | int | 规格ID
     * > ---
     * 
     * ### 返回结果
     * 字段名 | 类型 |描述
     * ---|---|---
     * defaultAddress | array | 默认收货地址
     * storeOrderGoods | array | 用户下单数据
     * freePostCard | array  |包邮卡信息
     * 
     * >返回数据说明
     * 
     * >defaultAddress 默认收货地址返回字段说明
     * 
     * >字段名 | 类型 |描述
     * >-- | ---- | -----
     * >addrId | int | 收货地址id
     * >userName | string | 收货人名称
     * >telNumber | string | 收货人电话
     * >detailInfo | string | 收货人详细地址
     * >default | int | 是否为默认收货地址
     * >regionId | int | 地区id
     * 
     * >storeOrderGoods 字段说明
     * >字段名 | 类型 |描述
     * >-- | ---- | -----
     * >storeId | int | 店铺id
     * >storeName | int | 店铺名
     * >creditValue | int | 信誉值
     * >totalQuantity | int | 总件数
     * >totalWeight | int | 商品总重量
     * >goodsInfo | array | 商品信息
     * >couponInfo | array | 优惠券信息
     * >expressWay | array | 快递信息
     * 
     *
     * >storeOrderGoods[]['goodsInfo'] 字段说明
     * >字段名 | 类型 |描述
     * >-- | ---- | -----
     * >goodsId | int | 商品id
     * >totalPrice | float | 商品总价
     * >goodsNumber | string | 商品货号
     * >goodsImage | string | 商品图片地址
     * >goodsName | string | 商品名称
     * >specInfo | array | 规格信息
     * >priceData | array | 价格信息
     * 
     * >storeOrderGoods[]['goodsInfo']['specInfo'] 字段说明
     * >字段名 | 类型 |描述
     * >-- | ---- | -----
     * >specId | int | 规格id
     * >price | float | 价格
     * >quantity | int | 数量
     * >color | string | 颜色
     * >size | string | 尺寸
     * >stock | int | 库存
     *
     * >storeOrderGoods[]['priceData'] 字段说明
     * >字段名 | 类型 |描述
     * >-- | ---- | -----
     * >goodsId | int | 商品id
     * >storeId | int | 店铺id
     * >priceType | int | 价格类型 
     * >priceLower | float | 最低价
     * >priceUpper | float | 最高价
     * >priceData  | array | 起批价格区间
     *
     * >storeOrderGoods[]['priceData']['priceData'] 字段说明
     * >字段名 | 类型 |描述
     * >-- | ---- | -----
     * >lowerLimit | int | 最低起批量
     * >upperLimit | int | 最高起批量
     * >price | float | 起批价
     * >type | int | 价格类型
     *
     * >storeOrderGoods[]['couponInfo'] 字段说明
     * >字段名 | 类型 |描述
     * >-- | ---- | -----
     * >couponId | int | 优惠券id
     * >couponNo | string | 优惠券编号
     * >startTime | int | 开始时间
     * >endTime | int | 结束时间
     *
     * >storeOrderGoods[]['expressWay'] 字段说明
     * >字段名 | 类型 |描述
     * >-- | ---- | -----
     * >name | string | 快递名称
     * >shippingId | int | 快递id
     * >freight | float | 运费
     * >weight  | float | 重量
     * >expressType | int | 是否可以到付 (0.支付 1.不支持)
     * >expressSelect | int | 快递类型 (1：货运；2：快递；3：EMS)
     * 
     * >返回数据说明
     * >freePostCard 默认收货地址返回字段说明
     * 
     * >字段名 | 类型 |描述
     * >-- | ---- | -----
     *
     *
     *  
     * 
     * @param array $data 请求参数
     * @param array $data['isFrom'] 下单平台 1.pc 2.wap 3.app
     * @param array $data['type'] 下单类型 1.购物车下单 2.立即下单
     * @param array $data['goods'] 商品信息(立即下单必传,购物车下单传空)
     * @param int $data['goods'][0]['goodsId']  选中的商品ID
     * @param int $data['goods'][0]['storeId']  选中的店铺ID
     * @param int $data['goods'][0]['spec']     选中的商品规格
     * @param int $data['goods'][0]['isSpelling'] 是否拼团商品
     * @param array $data['uniqueIds'][] 购物车商品主键id (购物车下单必传,立即下单传空)
     * 
     * @returnExample({"defaultAddress":{"addrId":"547435","userName":"hahhahah","telNumber":"13232343244","detailInfo":"北京市 市辖区 东城区 sdhfjkdfhkdjsfhdsfdf","default":"1","regionId":"110101"},"storeOrderGoods":[{"storeId":"16777306","storeName":"新店6","goodsInfo":[{"goodsId":5578748,"totalPrice":1860,"goodsNumber":155,"goodsSn":"港湾123","goodsImage":"https:\/\/img02.eelly.test\/G01\/M00\/00\/06\/small_oYYBAFmJIJCIVphJAAEbJKKDQNIAAACZALBulgAARs8034.jpg","goodsName":"十三行女装流行风格","specInfo":[{"specId":"32090625","price":"12.00","originalPrice":"12.00","quantity":107,"color":"黑色","size":"XXS","stock":99998}],"priceData":{"goodsId":"5578748","storeId":"16777306","priceType":1,"priceLower":"12.00","priceUpper":"12.00","priceData":[{"lowerLimit":"1","upperLimit":"0","price":"12.00","type":"1"}]}}],"couponInfo":[{"couponId":1450168327,"couponNo":"1450168327SS","startTime":1525329993,"endTime":1525329993,"recId":111}],"expressWay":[{"name":"货运","shippingId":"222789","expressType":0,"express_select":"1","freight":0,"weight":0},{"name":"运费到付","shippingId":"222789","expressType":"1","expressSelect":"1","freight":0,"weight":0}]}],"freePostCard":["暂时给个"]})
     * 
     * @param UidDTO $user
     * 
     * @author wechan
     * @since 2018年08月22日
     */
    public function cartConfirmOrderList(array $data, UidDTO $user = null):array;

    /**
     * 查询app消息列表商品信息
     *
     * @param array $condition
     * @return array
     *
     * @author zhangyangxun
     * @since 2018-08-24
     */
    public function getAppMessageOrder(array $condition): array;

    /**
     * 查询买家在某店铺的最后下单时间
     *
     * @param array $condition 查询条件
     * @return array
     *
     * @requestExample({ "condition": {"storeId": 1760467, "buyerIds": [1762341, 1762342]} })
     * @returnExample([ {"1762341": {"buyerId": 1762341, "lastTime": 1516389648}}, {"1762342": {"buyerId": 1762342, "lastTime": 1516389648}} ])
     *
     * @author zhangyangxun
     * @since 2018-08-24
     */
    public function getLastOrderTime(array $condition): array;
    
    /**
     * 订单下单接口
     * 
     * @param array $data 订单信息
     * @param array $data['orderInfo'] 商品信息
     * @param int $data['orderInfo'][0]['storeId']  店铺ID
     * @param int $data['orderInfo'][0]['shippingId']  快递模板id
     * @param int $data['orderInfo'][0]['expressSelect']  快递类型
     * @param int $data['orderInfo'][0]['expressType']  是否可以到付,需要判断店铺是否设置了到付
     * @param int $data['orderInfo'][0]['isFreeShipping']  是否免运费
     * @param int $data['orderInfo'][0]['remark']  订单备注
     * @param int $data['orderInfo'][0]['couponId'] 优惠券Id
     * @param int $data['orderInfo'][0]['goods'][0]['goodsId']  商品ID
     * @param int $data['orderInfo'][0]['goods'][0]['spec']  商品规格
     * @param int $data['orderInfo'][0]['goods'][0]['spec'][0]['quantity'] 商品数量
     * @param int $data['orderInfo'][0]['goods'][0]['spec'][0]['spId'] 规格ID
     * @param int $data['addressId'] 收货地址id
     * @param int $data['userId'] 用户id
     * @param int $data['fromFlag'] 0 PC 1 WAP 2 店+APP 3 衣联小程序 4 快应用 5 联美小程序 6 市场小程序
     * @param int $data['isSpelling']  是否拼团订单
     * 
     * @param UidDTO $user 登录用户信息
     * 
     * @return array
     * 
     * @author wechan
     * @since 2018年09月04日
     */
    public function saveMallOrder(array $data, UidDTO $user = null): array;
    
    /**
     * 获取快递方式和运费价格
     * 
     * @param array $goods 购物车商品列表
     * @param int $goods[0]['goodsId']  选中的商品ID
     * @param int $goods['spec']     选中的商品规格
     * @param int $goods['spec'][0]['quantity']    选中的商品规格
     * @param int $goods['spec'][0]['specId']    选中的商品规格
     * @param int $regionId 地区id
     * 
     * @returnExample([{"name":"货运","shippingId":"222789","expressType":0,"express_select":"1","freight":0,"weight":0},{"name":"运费到付","shippingId":"222789","expressType":"1","expressSelect":"1","freight":0,"weight":0}])
     * 
     * @author wechan
     * @since 2018年08月23日
     */
    public function getExpressWay(array $goods, int $regionId): array;
    
    /**
     * 根据传过来的订单id，返回对应可以使用的优惠卷列表
     *
     * @param float $money   订单金额
     * @param int   $storeId 店铺id
     * @param int   $userId  用户id
     *
     * @returnExample([{"couponId": 1450168327,"couponNo": "1450168327SS","startTime":1525329993,"endTime":1525329993,"recId":111}])
     * 
     * @return array
     *
     */
    public function getOrderCouponList(float $money, int $storeId, int $userId):array;
    
    /**
     * 订单发起的支付.
     *
     * @param array  $orderIds 多个订单Id
     * @param string $type  支付账号类型 wechat:微信支付 smallWechat:微信小程序 alipay:支付宝
     * @param array $extend 扩展信息,比如某宝账号,某小程序账号信息。
     * @param UidDTO $user      登录用户信息
     * 
     * ### 返回参数说明
     * >字段名 | 类型 |描述
     * >-- | ---- | -----
     * >platform | string | 支付类型
     * >billNo | string | 衣联交易号
     * >data | array | 第三方返回的数据
     * >orderSns  | array | 订单号
     * >orderIds | array | 订单id
     * 
     * 
     * >app支付宝:{"platform":"alipayApp","billNo":"201809280150456160","data":{"alipay_sdk":"lokielse\/omnipay-alipay","app_id":"2016122204515132","biz_content":"{\"out_trade_no\":\"201809280150456160\",\"total_amount\":200,\"subject\":\"\\u8ba2\\u5355\\u652f\\u4ed8\",\"body\":\"\",\"goods_type\":1,\"passback_params\":\"paId%3D12640%26userId%3D1760467%26account%3D126mail.wap%26type%3D1%26transact%3D2%26platform%3DalipayApp\",\"product_code\":\"FAST_INSTANT_TRADE_PAY\"}","charset":"UTF-8","format":"JSON","method":"alipay.trade.app.pay","notify_url":"https:\/\/cs.blty.com\/alipay\/notifyV2.html","sign_type":"RSA","timestamp":"2018-09-28 14:00:56","version":"1.0","sign":"XAcLoq+N4upFq3tTo+7PrjXB9G+By9Gp\/6iyrThr5QbotjNX+8CEYxSgXl7DjwnLpRgewsMCb0tAoEtRuRls4OYmJFOdoVY5TaVpNA9sa6N72PkGP5dyJ8NFJUXitNtF31bnpYUg\/RGBqK8q7JdwRU9elzFPUSlPVJLN0jZ2VXQ=","order_string":"alipay_sdk=lokielse%2Fomnipay-alipay&app_id=2016122204515132&biz_content=%7B%22out_trade_no%22%3A%22201809280150456160%22%2C%22total_amount%22%3A200%2C%22subject%22%3A%22%5Cu8ba2%5Cu5355%5Cu652f%5Cu4ed8%22%2C%22body%22%3A%22%22%2C%22goods_type%22%3A1%2C%22passback_params%22%3A%22paId%253D12640%2526userId%253D1760467%2526account%253D126mail.wap%2526type%253D1%2526transact%253D2%2526platform%253DalipayApp%22%2C%22product_code%22%3A%22FAST_INSTANT_TRADE_PAY%22%7D&charset=UTF-8&format=JSON&method=alipay.trade.app.pay&notify_url=https%3A%2F%2Fcs.blty.com%2Falipay%2FnotifyV2.html&sign_type=RSA&timestamp=2018-09-28+14%3A00%3A56&version=1.0&sign=XAcLoq%2BN4upFq3tTo%2B7PrjXB9G%2BBy9Gp%2F6iyrThr5QbotjNX%2B8CEYxSgXl7DjwnLpRgewsMCb0tAoEtRuRls4OYmJFOdoVY5TaVpNA9sa6N72PkGP5dyJ8NFJUXitNtF31bnpYUg%2FRGBqK8q7JdwRU9elzFPUSlPVJLN0jZ2VXQ%3D"},"orderSns":["2153810322557191"],"orderIds":[50001781]}
     * 
     * >app微信:{"platform":"wechatPayApp","billNo":"201809280149688070","data":{"appid":"wxdd557bb66b43f811","partnerid":"1329161001","prepayid":"wx2813481171184190274156393709513957","package":"Sign=WXPay","noncestr":"7c230b4227a906332c80c78c2026695e","timestamp":1538113691,"sign":"131F460AEF603EDDA206B892BF2850A1"},"orderSns":["2153810322557191"],"orderIds":[50001781]}
     * 
     * >微信小程序:
     * 
     * @return array
     * 
     * 
     * 
     * @returnExample({{"platform":"alipayApp","billNo":"201809110166529825","data":{""},"orderSns":["2153610960734762"],"orderIds":[50001771]}})
     * 
     * @returnExample({"platform":"wechatPayApp","billNo":"201809280149688070","data":{"appid":"wxdd557bb66b43f811","partnerid":"1329161001","prepayid":"wx2813481171184190274156393709513957","package":"Sign=WXPay","noncestr":"7c230b4227a906332c80c78c2026695e","timestamp":1538113691,"sign":"131F460AEF603EDDA206B892BF2850A1"},"orderSns":["2153810322557191"],"orderIds":[50001781]})
     *
     * @author wechan
     * @since 2018年09月10日
     */
    public function orderPay(array $orderIds, string $type = 'wechat', $extend = [], UidDTO $user = null): array;
    
    /**
     * 根据订单id 获取金额跟运费
     * 
     * ### 返回结果
     * 字段名 | 类型 |描述
     * ---|---|---
     * totalFee | int | 总运费(分)
     * totalAmount | int | 总金额(分)
     * isSetPayPass | int | 是否设置支付密码 1.已设置 0.未设置
     * 
     * @param array $orderIds 订单id
     * 
     * @return array
     * 
     * @returnExample({"totalFee":1,"totalAmount":1,"isSetPayPass":1})
     * 
     * 
     * @author wechan
     * @since 2018年9月27日
     */
    public function getAmountAndFeeByOrderId(array $orderIds): array;
}
