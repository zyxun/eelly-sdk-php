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
use Eelly\SDK\Order\Service\OrderInterface;
use Eelly\DTO\UidDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Order implements OrderInterface
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
    public function addOrder(array $orderData, int $addrId, UidDTO $user = null): bool
    {
        return EellyClient::request('order/order', 'addOrder', true, $orderData, $addrId, $user);
    }

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
    public function addOrderAsync(array $orderData, int $addrId, UidDTO $user = null)
    {
        return EellyClient::request('order/order', 'addOrder', false, $orderData, $addrId, $user);
    }

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
    public function updateOrder(array $orderData, UidDTO $user = null): bool
    {
        return EellyClient::request('order/order', 'updateOrder', true, $orderData, $user);
    }

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
    public function updateOrderAsync(array $orderData, UidDTO $user = null)
    {
        return EellyClient::request('order/order', 'updateOrder', false, $orderData, $user);
    }

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
    public function deleteOrder(int $orderId, UidDTO $user = null): bool
    {
        return EellyClient::request('order/order', 'deleteOrder', true, $orderId, $user);
    }

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
    public function deleteOrderAsync(int $orderId, UidDTO $user = null)
    {
        return EellyClient::request('order/order', 'deleteOrder', false, $orderId, $user);
    }

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
    public function getOrderInfo(int $orderId): array
    {
        return EellyClient::request('order/order', 'getOrderInfo', true, $orderId);
    }

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
    public function getOrderInfoAsync(int $orderId)
    {
        return EellyClient::request('order/order', 'getOrderInfo', false, $orderId);
    }

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
    public function checkIsFast(int $orderId): bool
    {
        return EellyClient::request('order/order', 'checkIsFast', true, $orderId);
    }

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
    public function checkIsFastAsync(int $orderId)
    {
        return EellyClient::request('order/order', 'checkIsFast', false, $orderId);
    }

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
    public function updateOrderExtension(int $orderId, int $extension = 0): bool
    {
        return EellyClient::request('order/order', 'updateOrderExtension', true, $orderId, $extension);
    }

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
    public function updateOrderExtensionAsync(int $orderId, int $extension = 0)
    {
        return EellyClient::request('order/order', 'updateOrderExtension', false, $orderId, $extension);
    }

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
    public function addEnquiryOrder(array $data): int
    {
        return EellyClient::request('order/order', 'addEnquiryOrder', true, $data);
    }

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
    public function addEnquiryOrderAsync(array $data)
    {
        return EellyClient::request('order/order', 'addEnquiryOrder', false, $data);
    }

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
    public function getExpressByTrackingNo(string $trackingNo, string $express = 'auto'): array
    {
        return EellyClient::request('order/order', 'getExpressByTrackingNo', true, $trackingNo, $express);
    }

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
    public function getExpressByTrackingNoAsync(string $trackingNo, string $express = 'auto')
    {
        return EellyClient::request('order/order', 'getExpressByTrackingNo', false, $trackingNo, $express);
    }

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
    public function addMallOrderAndPay(array $orderData, array $userInfo, array $memoInfo = []): array
    {
        return EellyClient::request('order/order', 'addMallOrderAndPay', true, $orderData, $userInfo, $memoInfo);
    }

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
    public function addMallOrderAndPayAsync(array $orderData, array $userInfo, array $memoInfo = [])
    {
        return EellyClient::request('order/order', 'addMallOrderAndPay', false, $orderData, $userInfo, $memoInfo);
    }

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
    public function checkOrderIsPayed(array $orderSns, string $billNo = ''): array
    {
        return EellyClient::request('order/order', 'checkOrderIsPayed', true, $orderSns, $billNo);
    }

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
    public function checkOrderIsPayedAsync(array $orderSns, string $billNo = '')
    {
        return EellyClient::request('order/order', 'checkOrderIsPayed', false, $orderSns, $billNo);
    }

    /**
     * 回调订单支付.
     *
     * @param string $billNo 衣联交易号
     * @requestExample({"billNo":"1711114177786cvA2s"})
     * @returnExample(true)
     * @return bool
     *
     * @Async
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2018年05月05日
     * @Validation(
     * @PresenceOf(0,{message:"数据不能为空"})
     * )
     */
    public function setOrderPay(string $billNo): bool
    {
        return EellyClient::request('order/order', 'setOrderPay', true, $billNo);
    }

    /**
     * 回调订单支付.
     *
     * @param string $billNo 衣联交易号
     * @requestExample({"billNo":"1711114177786cvA2s"})
     * @returnExample(true)
     * @return bool
     *
     * @Async
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2018年05月05日
     * @Validation(
     * @PresenceOf(0,{message:"数据不能为空"})
     * )
     */
    public function setOrderPayAsync(string $billNo)
    {
        return EellyClient::request('order/order', 'setOrderPay', false, $billNo);
    }

    /**
     * 需要自动结算货款.
     *
     * @return array
     * @requestExample()
     * @returnExample([{"orderId":"116","orderSn":"1810837219","sellerId":"1762613","buyerId":"2108403","payTime":"1524130597","orderAmount":"19800","freight":"1","commission":"0","applyAmount":null,"returnAmount":null,"applyFreight":null,"returnFreight":null}])
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2018年05月05日
     */
    public function getNeedConfirmedList(): array
    {
        return EellyClient::request('order/order', 'getNeedConfirmedList', true);
    }

    /**
     * 需要自动结算货款.
     *
     * @return array
     * @requestExample()
     * @returnExample([{"orderId":"116","orderSn":"1810837219","sellerId":"1762613","buyerId":"2108403","payTime":"1524130597","orderAmount":"19800","freight":"1","commission":"0","applyAmount":null,"returnAmount":null,"applyFreight":null,"returnFreight":null}])
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2018年05月05日
     */
    public function getNeedConfirmedListAsync()
    {
        return EellyClient::request('order/order', 'getNeedConfirmedList', false);
    }

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
    public function operateFinishOrder(int $orderId): bool
    {
        return EellyClient::request('order/order', 'operateFinishOrder', true, $orderId);
    }

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
    public function operateFinishOrderAsync(int $orderId)
    {
        return EellyClient::request('order/order', 'operateFinishOrder', false, $orderId);
    }

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
    public function orderGoPay(array $orderSns, $type = 'wxSmall', $openId = ''): array
    {
        return EellyClient::request('order/order', 'orderGoPay', true, $orderSns, $type, $openId);
    }

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
    public function orderGoPayAsync(array $orderSns, $type = 'wxSmall', $openId = '')
    {
        return EellyClient::request('order/order', 'orderGoPay', false, $orderSns, $type, $openId);
    }

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
    public function getOrderData(int $orderId):array
    {
        return EellyClient::request('order/order', 'getOrderData', true, $orderId);
    }

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
    public function getOrderDataAsync(int $orderId):array
    {
        return EellyClient::request('order/order', 'getOrderData', false, $orderId);
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