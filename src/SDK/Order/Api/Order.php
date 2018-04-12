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
     * @return bool 能返回true,不能返回false
     * @requestExample({"orderId":5000001})
     * @returnExample(true)
     * @author 肖俊明<xiaojunming@eelly.net>
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
     * @return bool 能返回true,不能返回false
     * @requestExample({"orderId":5000001})
     * @returnExample(true)
     * @author 肖俊明<xiaojunming@eelly.net>
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
     * @param int $orderId 订单ID
     * @param int $extension 订单标识：0 普通订单 1 分销订单 2 包销订单(买家) 4 自营订单 8 云店订单 16 厂+订单 32 省邮区订单 64 包销期订单(卖家) 128 即时到帐订单（支付成功立即结算卖家）
     * @return bool
     * @requestExample({"orderId":5000001,"extension":128})
     * @returnExample(true)
     * @author 肖俊明<xiaojunming@eelly.net>
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
     * @param int $orderId 订单ID
     * @param int $extension 订单标识：0 普通订单 1 分销订单 2 包销订单(买家) 4 自营订单 8 云店订单 16 厂+订单 32 省邮区订单 64 包销期订单(卖家) 128 即时到帐订单（支付成功立即结算卖家）
     * @return bool
     * @requestExample({"orderId":5000001,"extension":128})
     * @returnExample(true)
     * @author 肖俊明<xiaojunming@eelly.net>
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
     * 添加询价下单记录
     *
     * @param array   $data 询价下单数据
     * @param int     $data['refType']     订单类型标识：0 店铺商品订单 1 询价商品订单
     * @param int     $data['sellerId']    卖家id
     * @param string  $data['sellerName']  卖家名称
     * @param int     $data['buyerId']     买家id
     * @param string  $data['buyerName']   买家名称
     * @param int     $data['extension']   订单标识：0 普通订单 1 分销订单 2 包销订单(买家) 4 自营订单 8 云店订单 16 厂+订单 32 省邮区订单 64 包销期订单(卖家) 128 即时到帐订单（支付成功立即结算卖家）
     * @param int     $data['freight']     订单运费
     * @param int     $data['fromFlag']    订单来源
     * @param string  $data['remark']      备注
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
     * @since 2018.01.08
     */
    public function addEnquiryOrder(array $data): int
    {
        return EellyClient::request('order/order', 'addEnquiryOrder', true, $data);
    }

    /**
     * 添加询价下单记录
     *
     * @param array   $data 询价下单数据
     * @param int     $data['refType']     订单类型标识：0 店铺商品订单 1 询价商品订单
     * @param int     $data['sellerId']    卖家id
     * @param string  $data['sellerName']  卖家名称
     * @param int     $data['buyerId']     买家id
     * @param string  $data['buyerName']   买家名称
     * @param int     $data['extension']   订单标识：0 普通订单 1 分销订单 2 包销订单(买家) 4 自营订单 8 云店订单 16 厂+订单 32 省邮区订单 64 包销期订单(卖家) 128 即时到帐订单（支付成功立即结算卖家）
     * @param int     $data['freight']     订单运费
     * @param int     $data['fromFlag']    订单来源
     * @param string  $data['remark']      备注
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
     * @param string $express 物流公司
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
     * @author 肖俊明<xiaojunming@eelly.net>
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
     *
     */
    public function getExpressByTrackingNo(string $trackingNo, string $express = 'auto'): array
    {
        return EellyClient::request('order/order', 'getExpressByTrackingNo', true, $trackingNo, $express);
    }

    /**
     * 获取物流信息.
     *
     * @param string $trackingNo 物流好
     * @param string $express 物流公司
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
     * @author 肖俊明<xiaojunming@eelly.net>
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
     *
     */
    public function getExpressByTrackingNoAsync(string $trackingNo, string $express = 'auto')
    {
        return EellyClient::request('order/order', 'getExpressByTrackingNo', false, $trackingNo, $express);
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