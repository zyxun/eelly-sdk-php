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
use Eelly\SDK\Order\Service\InvoiceInterface;
use Eelly\DTO\UidDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Invoice
{
    /**
     * 新增订单物流及收货人信息记录.
     *
     * @param array  $data                  订单物流及收货人信息数据
     * @param int    $data['orderId']       订单id
     * @param int    $data['type']          物流类型：1 发货物流 2 退货物流
     * @param string $data['consignee']     收货人姓名
     * @param int    $data['gbCode']        地区ID
     * @param string $data['regionName']    地区名称
     * @param string $data['address']       收货详细地址
     * @param string $data['zipcode']       邮编
     * @param string $data['phone']         电话号码
     * @param string $data['mobile']        手机号码
     * @param int    $data['slId']          运费模版ID
     * @param string $data['logisticsName'] 送货方式
     * @param string $data['invoiceCode']   送货编码
     * @param string $data['invoiceName']   送货公司名称
     * @param string $data['invoiceNo']     送货单号
     * @param int    $data['status']        物流状态
     * @param int    $data['signTime']      签收时间
     * @param string $data['remark']        详细物流信息
     * @param string $data['createdTime']   添加时间
     *
     * @throws \Eelly\SDK\Order\Exception\OrderException
     *
     * @return bool
     * @requestExample({"orderId":123,"type":1,"consignee":"test","gbCode":440106,"regionName":"test","address":"test","zipcode":"510000","phone":"","mobile":"13432154521","slId":0,"logisticsName":"","invoiceCode":"","invoiceName":"","invoiceNo":"","status":0,"signTime":"","remark":"","createdTime":1321456541})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since  2017.12.29
     */
    public function addInvoice(array $data): bool
    {
        return EellyClient::request('order/invoice', 'addInvoice', true, $data);
    }

    /**
     * 新增订单物流及收货人信息记录.
     *
     * @param array  $data                  订单物流及收货人信息数据
     * @param int    $data['orderId']       订单id
     * @param int    $data['type']          物流类型：1 发货物流 2 退货物流
     * @param string $data['consignee']     收货人姓名
     * @param int    $data['gbCode']        地区ID
     * @param string $data['regionName']    地区名称
     * @param string $data['address']       收货详细地址
     * @param string $data['zipcode']       邮编
     * @param string $data['phone']         电话号码
     * @param string $data['mobile']        手机号码
     * @param int    $data['slId']          运费模版ID
     * @param string $data['logisticsName'] 送货方式
     * @param string $data['invoiceCode']   送货编码
     * @param string $data['invoiceName']   送货公司名称
     * @param string $data['invoiceNo']     送货单号
     * @param int    $data['status']        物流状态
     * @param int    $data['signTime']      签收时间
     * @param string $data['remark']        详细物流信息
     * @param string $data['createdTime']   添加时间
     *
     * @throws \Eelly\SDK\Order\Exception\OrderException
     *
     * @return bool
     * @requestExample({"orderId":123,"type":1,"consignee":"test","gbCode":440106,"regionName":"test","address":"test","zipcode":"510000","phone":"","mobile":"13432154521","slId":0,"logisticsName":"","invoiceCode":"","invoiceName":"","invoiceNo":"","status":0,"signTime":"","remark":"","createdTime":1321456541})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since  2017.12.29
     */
    public function addInvoiceAsync(array $data)
    {
        return EellyClient::request('order/invoice', 'addInvoice', false, $data);
    }

    /**
     * 获取所有物流数据.
     *
     * @return array
     * @requestExample()
     * @returnExample([{"name":"Aramex","type":"ARAMEX","letter":"A","tel":"400-631-8388","number":"30288063886"}])
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2018年04月24日
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * -------|-------|--------------
     * name   |string |送货公司名称
     * type   |string |送货编码：快递公司对应的拼音
     * letter |string |送货公司简写
     * tel    |string |电话号码
     * number |string |编号
     */
    public function getAllExpressList(): array
    {
        return EellyClient::request('order/invoice', 'getAllExpressList', true);
    }

    /**
     * 获取所有物流数据.
     *
     * @return array
     * @requestExample()
     * @returnExample([{"name":"Aramex","type":"ARAMEX","letter":"A","tel":"400-631-8388","number":"30288063886"}])
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2018年04月24日
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * -------|-------|--------------
     * name   |string |送货公司名称
     * type   |string |送货编码：快递公司对应的拼音
     * letter |string |送货公司简写
     * tel    |string |电话号码
     * number |string |编号
     */
    public function getAllExpressListAsync()
    {
        return EellyClient::request('order/invoice', 'getAllExpressList', false);
    }

    /**
     * 修改物流信息.
     *
     * @param int         $orderId 订单号
     * @param UidDTO|null $uidDTO  登录用户
     *
     * @return array
     * @requestExample({"orderId":160})
     * @returnExample({"invoiceCode":"YUNDA","invoiceName":"韵达","invoiceNo":"1202516745301","orderSn":"ssss","orderAmount":22,"consignee":"老王","regionName":"地区","address":"白云自","buyerId":148086,"memoContent":"test"})
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * -------------|-------|--------------
     * invoiceCode |string |送货编码：快递公司对应的拼音
     * invoiceName |string |送货公司名称
     * invoiceNo   |string |送货单号,物流号
     * buyerId     |string | 买家id
     * memoContent |string | 买家留言备忘
     * orderSn     |string |订单号
     * orderAmount |string |总金额
     * consignee   |string |收货人姓名
     * regionName  |string |地区名称
     * address     |string |详细地址
     *
     * @since 2018年04月25日
     * @Validation(
     * @OperatorValidator(0,{message:"订单ID不能为空",operator:["gt",0]})
     * )
     */
    public function editInvoiceData(int $orderId, UidDTO $uidDTO = null): array
    {
        return EellyClient::request('order/invoice', 'editInvoiceData', true, $orderId, $uidDTO);
    }

    /**
     * 修改物流信息.
     *
     * @param int         $orderId 订单号
     * @param UidDTO|null $uidDTO  登录用户
     *
     * @return array
     * @requestExample({"orderId":160})
     * @returnExample({"invoiceCode":"YUNDA","invoiceName":"韵达","invoiceNo":"1202516745301","orderSn":"ssss","orderAmount":22,"consignee":"老王","regionName":"地区","address":"白云自","buyerId":148086,"memoContent":"test"})
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * -------------|-------|--------------
     * invoiceCode |string |送货编码：快递公司对应的拼音
     * invoiceName |string |送货公司名称
     * invoiceNo   |string |送货单号,物流号
     * buyerId     |string | 买家id
     * memoContent |string | 买家留言备忘
     * orderSn     |string |订单号
     * orderAmount |string |总金额
     * consignee   |string |收货人姓名
     * regionName  |string |地区名称
     * address     |string |详细地址
     *
     * @since 2018年04月25日
     * @Validation(
     * @OperatorValidator(0,{message:"订单ID不能为空",operator:["gt",0]})
     * )
     */
    public function editInvoiceDataAsync(int $orderId, UidDTO $uidDTO = null)
    {
        return EellyClient::request('order/invoice', 'editInvoiceData', false, $orderId, $uidDTO);
    }

    /**
     * 更新物流信息.
     *
     * @param array       $data
     * @param string      $data["invoiceCode"] 送货编码：快递公司对应的拼音
     * @param string      $data["invoiceName"] 送货公司名称
     * @param int         $data["invoiceNo"]   送货单号,物流号
     * @param int         $data["orderId"]     订单ID
     * @param UidDTO|null $uidDTO
     *
     * @return bool
     * @requestExample({"data":["invoiceCode":"YUNDA","invoiceName":"韵达","invoiceNo":1202516745301,"orderId":160]})
     * @returnExample(true)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2018年04月25日
     */
    public function updateInvoiceData(array $data, UidDTO $uidDTO = null): bool
    {
        return EellyClient::request('order/invoice', 'updateInvoiceData', true, $data, $uidDTO);
    }

    /**
     * 更新物流信息.
     *
     * @param array       $data
     * @param string      $data["invoiceCode"] 送货编码：快递公司对应的拼音
     * @param string      $data["invoiceName"] 送货公司名称
     * @param int         $data["invoiceNo"]   送货单号,物流号
     * @param int         $data["orderId"]     订单ID
     * @param UidDTO|null $uidDTO
     *
     * @return bool
     * @requestExample({"data":["invoiceCode":"YUNDA","invoiceName":"韵达","invoiceNo":1202516745301,"orderId":160]})
     * @returnExample(true)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2018年04月25日
     */
    public function updateInvoiceDataAsync(array $data, UidDTO $uidDTO = null)
    {
        return EellyClient::request('order/invoice', 'updateInvoiceData', false, $data, $uidDTO);
    }

    /**
     * 获取物流信息.
     *
     * @param int         $orderId 订单ID
     * @param int         $type    1 发货物流 2 退货物流
     * @param UidDTO|null $uidDTO
     *
     * @return array
     * @requestExample({"orderId":160})
     * @returnExample({
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
     * "issign": "1",
     * "goodsImage":"https://img01.eelly.test/G02/M00/00/03/small_ooYBAFqzVV2ICEGRAAER2psay8IAAABggBWRl0AARHy759.jpg",
     * "regionName":"山西省 晋城市 沁水县",
     * "address":"2222"
     * })
     *
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * ---------------|-------|--------------
     * number         |string |送货单号,物流号
     * type           |string |送货编码：快递公司对应的拼音
     * name           |string |送货公司名称
     * letter         |string |送货公司简写
     * tel            |string |送货公司电话
     * list           |array  |送货数据
     * list["time"]   |string |送货变化时间
     * list["status"] |string |变动节点
     * deliverystatus |string |配送状态
     * issign         |string |签收状态
     * goodsImage     |string |商品图片
     * regionName     |string |省市地址
     * address        |string |详细地址
     * ifExtendReceipt|bool   |是否可以延长收货标示
     * receiptEndTime |string |收货截止时间戳
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2018年04月25日
     */
    public function getExpressByOrderId(int $orderId, int $type = 1, UidDTO $uidDTO = null): array
    {
        return EellyClient::request('order/invoice', 'getExpressByOrderId', true, $orderId, $type, $uidDTO);
    }

    /**
     * 获取物流信息.
     *
     * @param int         $orderId 订单ID
     * @param int         $type    1 发货物流 2 退货物流
     * @param UidDTO|null $uidDTO
     *
     * @return array
     * @requestExample({"orderId":160})
     * @returnExample({
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
     * "issign": "1",
     * "goodsImage":"https://img01.eelly.test/G02/M00/00/03/small_ooYBAFqzVV2ICEGRAAER2psay8IAAABggBWRl0AARHy759.jpg",
     * "regionName":"山西省 晋城市 沁水县",
     * "address":"2222"
     * })
     *
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * ---------------|-------|--------------
     * number         |string |送货单号,物流号
     * type           |string |送货编码：快递公司对应的拼音
     * name           |string |送货公司名称
     * letter         |string |送货公司简写
     * tel            |string |送货公司电话
     * list           |array  |送货数据
     * list["time"]   |string |送货变化时间
     * list["status"] |string |变动节点
     * deliverystatus |string |配送状态
     * issign         |string |签收状态
     * goodsImage     |string |商品图片
     * regionName     |string |省市地址
     * address        |string |详细地址
     * ifExtendReceipt|bool   |是否可以延长收货标示
     * receiptEndTime |string |收货截止时间戳
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2018年04月25日
     */
    public function getExpressByOrderIdAsync(int $orderId, int $type = 1, UidDTO $uidDTO = null)
    {
        return EellyClient::request('order/invoice', 'getExpressByOrderId', false, $orderId, $type, $uidDTO);
    }

    /**
     * 店铺最近发货的5家物流
     *
     * @reqArgs
     * @requestExample({"sellerId": 148086})
     * @explain
     * @returnExample({"中通","顺丰","韵达","圆通","申通"})
     *
     * @author 张扬熏<542207975@qq.com>
     *
     * @since 2018年06月14日
     */
    public function getOrderInvoiceRecord(int $sellerId): array
    {
        return EellyClient::request('order/invoice', 'getOrderInvoiceRecord', true, $sellerId);
    }

    /**
     * 店铺最近发货的5家物流
     *
     * @reqArgs
     * @requestExample({"sellerId": 148086})
     * @explain
     * @returnExample({"中通","顺丰","韵达","圆通","申通"})
     *
     * @author 张扬熏<542207975@qq.com>
     *
     * @since 2018年06月14日
     */
    public function getOrderInvoiceRecordAsync(int $sellerId)
    {
        return EellyClient::request('order/invoice', 'getOrderInvoiceRecord', false, $sellerId);
    }

    /**
     * 获取物流信息 只支持发货
     * 
     * @param integer $orderId 订单id
     * @param integer $type 1:发货 2:退货
     * @param integer $category 获取类型 0:全部获取改订单所有相关物流 1:过滤当前展示的物流信息 2:只取当前展示的物流
     * @param UidDTO|null $uidDTO  登录用户
     * @return array
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.5.22
     */
    public function getOrderInvoice(int $orderId, int $type = 1, int $category = 2, UidDTO $uidDTO = null): array
    {
        return EellyClient::request('order/invoice', 'getOrderInvoice', true, $orderId, $type, $category, $uidDTO);
    }

    /**
     * 获取物流信息 只支持发货
     * 
     * @param integer $orderId 订单id
     * @param integer $type 1:发货 2:退货
     * @param integer $category 获取类型 0:全部获取改订单所有相关物流 1:过滤当前展示的物流信息 2:只取当前展示的物流
     * @param UidDTO|null $uidDTO  登录用户
     * @return array
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.5.22
     */
    public function getOrderInvoiceAsync(int $orderId, int $type = 1, int $category = 2, UidDTO $uidDTO = null)
    {
        return EellyClient::request('order/invoice', 'getOrderInvoice', false, $orderId, $type, $category, $uidDTO);
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