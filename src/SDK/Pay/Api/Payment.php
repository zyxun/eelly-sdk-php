<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Pay\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Pay\Service\PaymentInterface;
use Eelly\SDK\Pay\DTO\PaymentDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class Payment implements PaymentInterface
{

    /**
     * 根据交易号 获取支付交易流水.
     *
     * @param string $billNo    衣联交易号
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * ------------|-------|--------------
     * ppId        |string |    支付交易ID，自增主键
     * paId        |string |    会员帐户ID
     * type        |string |    支付类型：1 订单支付 2 购买服务
     * itemId      |string |    关联对象ID：如订单ID、购买服务记录ID等
     * billNo      |string |    衣联交易号
     * money       |string |    支付金额：单位为分
     * precId      |string |    支付批次：pay_recharge->prec_id，合并支付交易批次相同，纯余额支付为0
     * status      |string |    处理状态：0 待处理 1 成功 2 处理中 3 失败
     * checkStatus |string |    对帐状态：0 未对帐 1 对帐成功 2 对帐中 3 对帐失败
     * remark      |string |    备注
     * createdTime |string |    添加时间
     * updateTime  |string |    修改时间
     *
     * @throws PayException
     *
     * @return PaymentDTO
     * @requestExample({"billNo":"1001"})
     * @returnExample({"ppId":"4","paId":"1","type":"1","itemId":"10001","billNo":"1711104274386cvAeR","money":"100","precId":"0",
     *     "status":"0","checkStatus":"0","remark":"备注","createdTime":"1510296034","updateTime":"2017-11-10 14:40:34"})
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     * @since  2017年11月10日
     */
    public function getPayment(string $billNo): PaymentDTO
    {
        return EellyClient::request('pay/payment', 'getPayment',true,  $billNo);
    }

    /**
     * 添加支付交易流水记录.
     *
     * @param array $data
     * @param int $data["paId"]     会员帐户ID
     * @param int $data["userId"]   用户id
     * @param int $data["type"]     支付类型：1 订单支付 2 购买服务
     * @param int $data["itemId"]   关联对象ID：如订单ID、购买服务记录ID等
     * @param int $data["money"]    支付金额：单位为分
     * @param int $data["precId"]   支付批次：pay_recharge->prec_id，合并支付交易批次相同，纯余额支付为0
     * @param int $data["status"]   处理状态：0 待处理 1 成功 2 处理中 3 失败
     * @param int $data["checkStatus"]  对帐状态：0 未对帐 1 对帐成功 2 对帐中 3 对帐失败
     * @param string $data ["remark"]   备注
     *
     * @throws PayException
     *
     * @return int
     * @requestExample({"data":{"paId":1,"type":1,"itemId":10001,"money":100,"precId":0,"status":0,"checkStatus":0,"remark":"备注"}})
     * @returnExample(true)
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     * @since  2017年11月10日
     */
    public function addPayment(array $data): int
    {
        return EellyClient::request('pay/payment', 'addPayment',true,  $data);
    }

    /**
     * 更新支付交易流水记录.
     *
     * @param int   $paymentId    支付交易流水id
     * @param array $data
     * @param int $data['precId'] 支付批次：pay_recharge->prec_id，合并支付交易批次相同，纯余额支付为0
     * @param int $data['status'] 处理状态：0 待处理 1 成功 2 处理中 3 失败
     * @param int $data['checkStatus'] 对帐状态：0 未对帐 1 对帐成功 2 对帐中 3 对帐失败
     * @param string $data['remark'] 备注
     *
     * @throws PaymentException
     *
     * @return bool
     * @requestExample({"paymentId":1,"data":{"precId":1,"status":1,"checkStatus":1,"remark":"helloWorld"}})
     * @returnExample(true)
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     * @since  2017年11月13日
     */
    public function updatePayment(int $paymentId, array $data): bool
    {
        return EellyClient::request('pay/payment', 'updatePayment', true, $paymentId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listPaymentPage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('pay/payment', 'listPaymentPage', true, $condition, $currentPage, $limit);
    }

    /**
     * 订单|服务交易入口.
     *
     * @param array $data
     * @param int $data['userId']           用户id
     * @param int $data["paId"]             会员账户资金id
     * @param int $data["type"]             支付类型：1 订单支付 2 购买服务
     * @param int $data["itemId"]           关联对象ID：如订单ID、购买服务记录ID等
     * @param int $data["money"]            支付金额：单位为分
     * @param string $data ["remark"]       备注
     * @param int $data['mixPay']           0:余额支付 1:纯第三方支付 2:混分支付(账户余额+第三方支付)
     *
     * @descriptionText 如选择混合支付或第三方支付方式，需要传递第三方支付需要的信息，如以下，否则传空即可
     * @param string $data['subject']       支付请求标题
     * @param int $data['channel']          充值渠道：0 线下 1 支付宝 2 微信钱包 3 QQ钱包 4 银联 5 移动支付
     * @param int $data['style']            充值方式：0 未知 1 储蓄卡 2 信用卡 3 余额充值
     * @param int $data['bankId']           充值银行ID
     * @param string $data['bankName']      充值银行名称
     * @param string $data['bankAccount']   充值帐号：支付宝账号/微信绑定open_id/QQ
     * @param string $data['platform']      平台的支付网关(tradeLogic->$requestPay的键名)
     * @param string $data['account']      衣联财务账号标识,值为: 126mail.pc, 126mail.wap, eellyMail.pc, eellyMail.app,union.pc,eelly.wap,eellyBuyer.wap, order.app, eelly.app, eellySeller.app, storeUnion.wap
     *
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * ----------|-------|--------------
     * platform  |string |  平台的支付网关(tradeLogic->$requestPay的键名),纯余额支付则返回空
     * data      |array  |
     * data["0"] |string |  当platform=alipayWap时返回url地址；当platform=alipayWap时返回url地址；当platform=alipayApp时返回是订单ID
     *
     * @throws PaymentException
     *
     * @return array
     * @requestExample({"userId":148086,"paId":1,"type":1,"itemId":1001,"money":12,"remark":"订单支付1元","mixPay":1,
     *     "subject":"订单支付1元","channel":1,"style":0,"bankId":184,"bankName":"支付宝","bankAccount":"13711221122",
     *     "platform":"alipayWap","account":"126mail.pc"})
     * @returnExample({
     *     "platform": 'alipayWap',
     *     'data':{
     *          'platform=alipayWap:url地址','platform=alipayWap:url地址',
     *          'platform=alipayApp:返回是订单ID'
     *     }
     * })
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     * @since  2017年11月13日
     */
    public function goPayment(array $data): array
    {
        return EellyClient::request('pay/payment', 'goPayment',true,  $data);
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