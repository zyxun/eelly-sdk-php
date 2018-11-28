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
use Eelly\SDK\Order\Service\SellerRefundInterface;
use Eelly\DTO\UidDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class SellerRefund implements SellerRefundInterface
{
    /**
     * 待发货订单，买家申请退款，卖家立即发货操作
     *
     * @param string $invoiceCode 送货编码 快递公司对应的拼音
     * @param string $invoiceName 送货公司名称
     * @param string $inoviceNo 送货编号
     * @param int $orderId 订单id
     * @param UidDTO $uidDTO
     * @return bool
     *
     * @requestExample({"orderId":5000214})
     * @returnExample({true})
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.09.13
     */
    public function immediateDelivery(string $invoiceCode, string $invoiceName, string $invoiceNo, int $orderId, UidDTO $uidDTO = null): bool
    {
        return EellyClient::request('order/sellerRefund', 'immediateDelivery', true, $invoiceCode, $invoiceName, $invoiceNo, $orderId, $uidDTO);
    }

    /**
     * 待发货订单，买家申请退款，卖家立即发货操作
     *
     * @param string $invoiceCode 送货编码 快递公司对应的拼音
     * @param string $invoiceName 送货公司名称
     * @param string $inoviceNo 送货编号
     * @param int $orderId 订单id
     * @param UidDTO $uidDTO
     * @return bool
     *
     * @requestExample({"orderId":5000214})
     * @returnExample({true})
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.09.13
     */
    public function immediateDeliveryAsync(string $invoiceCode, string $invoiceName, string $invoiceNo, int $orderId, UidDTO $uidDTO = null)
    {
        return EellyClient::request('order/sellerRefund', 'immediateDelivery', false, $invoiceCode, $invoiceName, $invoiceNo, $orderId, $uidDTO);
    }

    /**
     * 卖家同意退款操作 (仅退款)
     *
     * @param int $orderId  订单id
     * @param UidDTO $uidDTO
     * @return bool
     *
     * @requestExample({"orderId":5000214})
     * @returnExample({true})
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.09.14
     */
    public function agreeRefundMoney(int $orderId, UidDTO $uidDTO = null): bool
    {
        return EellyClient::request('order/sellerRefund', 'agreeRefundMoney', true, $orderId, $uidDTO);
    }

    /**
     * 卖家同意退款操作 (仅退款)
     *
     * @param int $orderId  订单id
     * @param UidDTO $uidDTO
     * @return bool
     *
     * @requestExample({"orderId":5000214})
     * @returnExample({true})
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.09.14
     */
    public function agreeRefundMoneyAsync(int $orderId, UidDTO $uidDTO = null)
    {
        return EellyClient::request('order/sellerRefund', 'agreeRefundMoney', false, $orderId, $uidDTO);
    }

    /**
     * 卖家拒绝退货退款操作
     *
     * @param int $orderId  订单id
     * @param string $reason 拒绝原因
     * @param string $images  图片凭证(#隔开)
     * @param UidDTO $uidDTO
     * @return bool
     *
     * @requestExample({"orderId":5000214, "reason":"test", "images":"https://img02.eelly.com/abc.jpg#https://img02.eelly.com/add.jpg"})
     * @returnExample({true})
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.09.14
     */
    public function refusedRefund(int $orderId, string $reason, string $images, UidDTO $uidDTO = null): bool
    {
        return EellyClient::request('order/sellerRefund', 'refusedRefund', true, $orderId, $reason, $images, $uidDTO);
    }

    /**
     * 卖家拒绝退货退款操作
     *
     * @param int $orderId  订单id
     * @param string $reason 拒绝原因
     * @param string $images  图片凭证(#隔开)
     * @param UidDTO $uidDTO
     * @return bool
     *
     * @requestExample({"orderId":5000214, "reason":"test", "images":"https://img02.eelly.com/abc.jpg#https://img02.eelly.com/add.jpg"})
     * @returnExample({true})
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.09.14
     */
    public function refusedRefundAsync(int $orderId, string $reason, string $images, UidDTO $uidDTO = null)
    {
        return EellyClient::request('order/sellerRefund', 'refusedRefund', false, $orderId, $reason, $images, $uidDTO);
    }

    /**
     * 卖家申请客服介入
     *
     * @param int $orderId  订单id
     * @param string $phone  联系手机号码
     * @param string $wechat 联系微信号
     * @param UidDTO $uidDTO
     * @return bool
     *
     * @requestExample({"orderId":5000214, "phone":"13430245645", "wechat":"hello"})
     * @returnExample({true})
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.09.14
     */
    public function sellerApplyService(int $orderId, string $phone, string $wechat, UidDTO $uidDTO = null): bool
    {
        return EellyClient::request('order/sellerRefund', 'sellerApplyService', true, $orderId, $phone, $wechat, $uidDTO);
    }

    /**
     * 卖家申请客服介入
     *
     * @param int $orderId  订单id
     * @param string $phone  联系手机号码
     * @param string $wechat 联系微信号
     * @param UidDTO $uidDTO
     * @return bool
     *
     * @requestExample({"orderId":5000214, "phone":"13430245645", "wechat":"hello"})
     * @returnExample({true})
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.09.14
     */
    public function sellerApplyServiceAsync(int $orderId, string $phone, string $wechat, UidDTO $uidDTO = null)
    {
        return EellyClient::request('order/sellerRefund', 'sellerApplyService', false, $orderId, $phone, $wechat, $uidDTO);
    }

    /**
     * 卖家同意退货操作
     *
     * @param int $orderId  订单id
     * @param array $addressData 卖家退货地址相关信息
     * @param UidDTO $uidDTO
     * @return bool
     *
     * @requestExample({"orderId":5000214, "addressData":{"address":"test","consignee":"demo","phone":"13430245645","mobile":"","regionName":"gz","code":"510000"}})
     * @returnExample({true})
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.09.14
     */
    public function agreeReturnGoods(int $orderId, array $addressData = [], UidDTO $uidDTO = null): bool
    {
        return EellyClient::request('order/sellerRefund', 'agreeReturnGoods', true, $orderId, $addressData, $uidDTO);
    }

    /**
     * 卖家同意退货操作
     *
     * @param int $orderId  订单id
     * @param array $addressData 卖家退货地址相关信息
     * @param UidDTO $uidDTO
     * @return bool
     *
     * @requestExample({"orderId":5000214, "addressData":{"address":"test","consignee":"demo","phone":"13430245645","mobile":"","regionName":"gz","code":"510000"}})
     * @returnExample({true})
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.09.14
     */
    public function agreeReturnGoodsAsync(int $orderId, array $addressData = [], UidDTO $uidDTO = null)
    {
        return EellyClient::request('order/sellerRefund', 'agreeReturnGoods', false, $orderId, $addressData, $uidDTO);
    }

    /**
     * 卖家撤销客服介入
     *
     * @param int $orderId 订单id
     * @param UidDTO $uidDTO
     * @return bool
     *
     * @requestExample({"orderId":5000214})
     * @returnExample({true})
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.09.17
     */
    public function cancelSellerApplyService(int $orderId, UidDTO $uidDTO = null): bool
    {
        return EellyClient::request('order/sellerRefund', 'cancelSellerApplyService', true, $orderId, $uidDTO);
    }

    /**
     * 卖家撤销客服介入
     *
     * @param int $orderId 订单id
     * @param UidDTO $uidDTO
     * @return bool
     *
     * @requestExample({"orderId":5000214})
     * @returnExample({true})
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.09.17
     */
    public function cancelSellerApplyServiceAsync(int $orderId, UidDTO $uidDTO = null)
    {
        return EellyClient::request('order/sellerRefund', 'cancelSellerApplyService', false, $orderId, $uidDTO);
    }

    /**
     * 卖家确认收到退货
     *
     * @param int $orderId  订单id
     * @param UidDTO $uidDTO
     * @return bool
     *
     * @requestExample({"orderId":5000214})
     * @returnExample({true})
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.09.17
     */
    public function confirmRefundGoods(int $orderId, UidDTO $uidDTO = null): bool
    {
        return EellyClient::request('order/sellerRefund', 'confirmRefundGoods', true, $orderId, $uidDTO);
    }

    /**
     * 卖家确认收到退货
     *
     * @param int $orderId  订单id
     * @param UidDTO $uidDTO
     * @return bool
     *
     * @requestExample({"orderId":5000214})
     * @returnExample({true})
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.09.17
     */
    public function confirmRefundGoodsAsync(int $orderId, UidDTO $uidDTO = null)
    {
        return EellyClient::request('order/sellerRefund', 'confirmRefundGoods', false, $orderId, $uidDTO);
    }

    /**
     * 卖家退货退款详情页
     *
     * @param int $orderId 订单id
     * @return array
     *
     * > 退款详情页订单状态(refundStatus)
     *
     * 值      |状态说明
     * -------|----------
     * 1      | 买家申请退款，请及时处理
     * 2      | 买家申请退货，请及时处理
     * 3      | 您已拒绝退款，等待买家修改
     * 4      | 您已拒绝退货退款，等待买家修改
     * 5      | 您已同意退货，等待买家发出退货
     * 6      | 买家已发出退货,等待您签收退货
     * 7      | 买家已申请衣联客服介入
     * 8      | 您已申请衣联客服介入
     * 9      | 衣联客服已介入处理
     * 10     | 退款结算中(您已同意退款，衣联系统正在结算中)
     * 11     | 退款结算中(您已确认收到退货，衣联系统正在结算中)
     * 12     | 已退款，交易取消 (全额退款成功，订单取消)
     * 13     | 售后完成，属于卖家责任(客服介入处理完成，卖家责任，钱给买家)
     * 14     | 售后完成，属于买家责任(客服介入处理完成，买家责任，钱给卖家)
     * 15     | 售后完成，属于双方共同责任(客服介入处理完成，双方责任，钱分别结算给买卖家)
     * 16     | 售后完成，其他原因 (客服介入处理完成，其他原因)
     * 17     | 交易完成 (订单部分退款，交易完成)
     *
     * @requestExample({"orderId":5000020})
     * @returnExample({"orderId":"5000020","orderSn":"1812374549","buyerId":"2108403","buyerName":"\u5927\u5e08\u5085\u58eb\u5927\u592b\uff08yl_jn003778\uff09","applyAmount":"11","applyFreight":"0","refundType":"\u4ec5\u9000\u6b3e","refundReason":"\u5176\u4ed6","remark":"","certificate":"","createdTime":"1525780044","refundStatus":"\u7533\u8bf7\u9000\u6b3e\u4e2d","firstTime":"2018-05-08 19:47","newTime":"2018-06-06 13:38"})
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.09.17
     */
    public function orderRefundDetail(int $orderId): array
    {
        return EellyClient::request('order/sellerRefund', 'orderRefundDetail', true, $orderId);
    }

    /**
     * 卖家退货退款详情页
     *
     * @param int $orderId 订单id
     * @return array
     *
     * > 退款详情页订单状态(refundStatus)
     *
     * 值      |状态说明
     * -------|----------
     * 1      | 买家申请退款，请及时处理
     * 2      | 买家申请退货，请及时处理
     * 3      | 您已拒绝退款，等待买家修改
     * 4      | 您已拒绝退货退款，等待买家修改
     * 5      | 您已同意退货，等待买家发出退货
     * 6      | 买家已发出退货,等待您签收退货
     * 7      | 买家已申请衣联客服介入
     * 8      | 您已申请衣联客服介入
     * 9      | 衣联客服已介入处理
     * 10     | 退款结算中(您已同意退款，衣联系统正在结算中)
     * 11     | 退款结算中(您已确认收到退货，衣联系统正在结算中)
     * 12     | 已退款，交易取消 (全额退款成功，订单取消)
     * 13     | 售后完成，属于卖家责任(客服介入处理完成，卖家责任，钱给买家)
     * 14     | 售后完成，属于买家责任(客服介入处理完成，买家责任，钱给卖家)
     * 15     | 售后完成，属于双方共同责任(客服介入处理完成，双方责任，钱分别结算给买卖家)
     * 16     | 售后完成，其他原因 (客服介入处理完成，其他原因)
     * 17     | 交易完成 (订单部分退款，交易完成)
     *
     * @requestExample({"orderId":5000020})
     * @returnExample({"orderId":"5000020","orderSn":"1812374549","buyerId":"2108403","buyerName":"\u5927\u5e08\u5085\u58eb\u5927\u592b\uff08yl_jn003778\uff09","applyAmount":"11","applyFreight":"0","refundType":"\u4ec5\u9000\u6b3e","refundReason":"\u5176\u4ed6","remark":"","certificate":"","createdTime":"1525780044","refundStatus":"\u7533\u8bf7\u9000\u6b3e\u4e2d","firstTime":"2018-05-08 19:47","newTime":"2018-06-06 13:38"})
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.09.17
     */
    public function orderRefundDetailAsync(int $orderId)
    {
        return EellyClient::request('order/sellerRefund', 'orderRefundDetail', false, $orderId);
    }

    /**
     * 确认退款页面
     *
     * > 返回数据说明
     * 
     * key | type | value
     * --- | ---- | ----
     * freight | int | 运费 单位：分
     * applyAmount | int | 申请退款的金额
     * orderAmount | int | 订单总额
     * isSetPayPassword | bool | 是否设置支付密码 true ：是 false ： 否
     * 
     * @param integer $orderId 订单id
     * @param UidDTO $user 当前登陆的用户
     * @return array
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.9.28
     */
    public function orderRefundCheck(int $orderId, UidDTO $user = null): array
    {
        return EellyClient::request('order/sellerRefund', 'orderRefundCheck', true, $orderId, $user);
    }

    /**
     * 确认退款页面
     *
     * > 返回数据说明
     * 
     * key | type | value
     * --- | ---- | ----
     * freight | int | 运费 单位：分
     * applyAmount | int | 申请退款的金额
     * orderAmount | int | 订单总额
     * isSetPayPassword | bool | 是否设置支付密码 true ：是 false ： 否
     * 
     * @param integer $orderId 订单id
     * @param UidDTO $user 当前登陆的用户
     * @return array
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.9.28
     */
    public function orderRefundCheckAsync(int $orderId, UidDTO $user = null)
    {
        return EellyClient::request('order/sellerRefund', 'orderRefundCheck', false, $orderId, $user);
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