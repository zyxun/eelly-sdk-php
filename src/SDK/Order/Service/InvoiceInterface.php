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

use Eelly\SDK\Order\Exception\OrderException;

/**
 * 订单物流及收货人信息
 *
 * @author zhangyingdi<zhangyingdi@eelly.net>
 */
interface InvoiceInterface
{

    /**
     * 新增订单物流及收货人信息记录.
     *
     * @param array   $data                   订单物流及收货人信息数据
     * @param int     $data['orderId']        订单id
     * @param int     $data['type']           物流类型：1 发货物流 2 退货物流
     * @param string  $data['consignee']      收货人姓名
     * @param int     $data['gbCode']         地区ID
     * @param string  $data['regionName']     地区名称
     * @param string  $data['address']        收货详细地址
     * @param string  $data['zipcode']        邮编
     * @param string  $data['phone']          电话号码
     * @param string  $data['mobile']         手机号码
     * @param int     $data['slId']           运费模版ID
     * @param string  $data['logisticsName']  送货方式
     * @param string  $data['invoiceCode']    送货编码
     * @param string  $data['invoiceName']    送货公司名称
     * @param string  $data['invoiceNo']      送货单号
     * @param int     $data['status']         物流状态
     * @param int     $data['signTime']       签收时间
     * @param string  $data['remark']         详细物流信息
     * @param string  $data['createdTime']    添加时间
     *
     * @throws \Eelly\SDK\Order\Exception\OrderException
     *
     * @return bool
     * @requestExample({"orderId":123,"type":1,"consignee":"test","gbCode":440106,"regionName":"test","address":"test","zipcode":"510000","phone":"","mobile":"13432154521","slId":0,"logisticsName":"","invoiceCode":"","invoiceName":"","invoiceNo":"","status":0,"signTime":"","remark":"","createdTime":1321456541})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since  2017.12.29
     */
    public function addInvoice(array $data): bool;

}
