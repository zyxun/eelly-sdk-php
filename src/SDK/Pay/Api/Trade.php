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

namespace Eelly\SDK\Pay\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Pay\Service\TradeInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Trade implements TradeInterface
{
    /**
     * 支付发起.
     *
     * @param array       $data             请求支付数据
     * @param int         $data['userId']   用户ID
     * @param string      $data['billNo']   在线支付交易号
     * @param int         $data['money']    金额
     * @param int         $data['paId']     账户ID，自增主键
     * @param int         $data['channel']  类型渠道：0 线下 1 支付宝 2 微信钱包 3 QQ钱包 4 衣联帐户 5 银联 6 移动支付
     * @param int         $data['type']     操作类型：1 充值 2 提现 3 消费 4 结算 5 退款 6 诚保冻结 7 诚保解冻
     * @param string      $data['subject']  请求标题
     * @param string      $data['platform'] ALIPAY_WAP:ALIPAY_WEB:ALIPAY_APP
     * @param int         $data['itemId']   关联ID
     * @param string      $data['account']  账号，可以从支付宝和微信配置文件中拿
     * @requestExample({'billNo':'18位数据', 'money': 1, 'channel':1,'subject':'标题'})
     * @returnExample(true)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年09月28日
     */
    public function doPay(array $data)
    {
        return EellyClient::request('pay/trade', 'doPay', true, $data);
    }

    /**
     * 支付发起.
     *
     * @param array       $data             请求支付数据
     * @param int         $data['userId']   用户ID
     * @param string      $data['billNo']   在线支付交易号
     * @param int         $data['money']    金额
     * @param int         $data['paId']     账户ID，自增主键
     * @param int         $data['channel']  类型渠道：0 线下 1 支付宝 2 微信钱包 3 QQ钱包 4 衣联帐户 5 银联 6 移动支付
     * @param int         $data['type']     操作类型：1 充值 2 提现 3 消费 4 结算 5 退款 6 诚保冻结 7 诚保解冻
     * @param string      $data['subject']  请求标题
     * @param string      $data['platform'] ALIPAY_WAP:ALIPAY_WEB:ALIPAY_APP
     * @param int         $data['itemId']   关联ID
     * @param string      $data['account']  账号，可以从支付宝和微信配置文件中拿
     * @requestExample({'billNo':'18位数据', 'money': 1, 'channel':1,'subject':'标题'})
     * @returnExample(true)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年09月28日
     */
    public function doPayAsync(array $data)
    {
        return EellyClient::request('pay/trade', 'doPay', false, $data);
    }

    /**
     * 支付宝回调校验.
     *
     * @param array  $data                    支付宝请求参数
     * @param string $data["out_trade_no"]    支付宝订单号
     * @param string $data["trade_no"]        商户订单号
     * @param float  $data["total_amount"]    支付宝金额
     * @param string $data["passback_params"] 额外参数
     *
     * @return bool
     * @requestExample({"out_trade_no":"1288299229939202023322196",
     *     "trade_no":"2017112121001004950200222202","total_amount":"1.00","passback_params":"paId%3D1%26userId%3D148086%26account%3Deelly.test%26type%3D1%26transact%3D1%26platform%3DalipayWeb"})
     * @returnExample(true)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2018年01月03日
     */
    public function doVerifyAliPay(array $data, bool $isOldAliPay = false): bool
    {
        return EellyClient::request('pay/trade', 'doVerifyAliPay', true, $data, $isOldAliPay);
    }

    /**
     * 支付宝回调校验.
     *
     * @param array  $data                    支付宝请求参数
     * @param string $data["out_trade_no"]    支付宝订单号
     * @param string $data["trade_no"]        商户订单号
     * @param float  $data["total_amount"]    支付宝金额
     * @param string $data["passback_params"] 额外参数
     *
     * @return bool
     * @requestExample({"out_trade_no":"1288299229939202023322196",
     *     "trade_no":"2017112121001004950200222202","total_amount":"1.00","passback_params":"paId%3D1%26userId%3D148086%26account%3Deelly.test%26type%3D1%26transact%3D1%26platform%3DalipayWeb"})
     * @returnExample(true)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2018年01月03日
     */
    public function doVerifyAliPayAsync(array $data, bool $isOldAliPay = false)
    {
        return EellyClient::request('pay/trade', 'doVerifyAliPay', false, $data, $isOldAliPay);
    }

    /**
     * 微信回调校验.
     *
     * @param string $data XML 微信支付数据
     * @return array
     * @requestExample({"data":"<xml><appid><![CDATA[wxde31786ddb55f9a8]]></appid>
<attach><![CDATA[paId%3D1%26userId%3D148086%26account%3Deelly.wap%26type%3D1%26transact%3D1%26platform%3DwechatPayNative]]></attach>
    <bank_type><![CDATA[CFT]]></bank_type>
    <cash_fee><![CDATA[10]]></cash_fee>
    <fee_type><![CDATA[CNY]]></fee_type>
    <is_subscribe><![CDATA[N]]></is_subscribe>
    <mch_id><![CDATA[1220553101]]></mch_id>
    <nonce_str><![CDATA[a1017eae7373f349a00381dbc161d95d]]></nonce_str>
    <openid><![CDATA[oS3s7uBBGaftF4dxaEkELYO_L9JA]]></openid>
    <out_trade_no><![CDATA[1288299229939202023322304]]></out_trade_no>
    <result_code><![CDATA[SUCCESS]]></result_code>
    <return_code><![CDATA[SUCCESS]]></return_code>
    <sign><![CDATA[0EC8ACD8E0A75C6F287EC49B050BD38A]]></sign>
    <time_end><![CDATA[20171122105959]]></time_end>
    <total_fee>10</total_fee>
    <trade_type><![CDATA[NATIVE]]></trade_type>
    <transaction_id><![CDATA[4200000044201711226265317145]]></transaction_id>
    </xml>"})
     * @returnExample({"returnCode":"SUCCESS","return_msg":"OK"})
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2018年01月03日
     */
    public function wechatPayNotify(string $data): array
    {
        return EellyClient::request('pay/trade', 'wechatPayNotify', true, $data);
    }

    /**
     * 微信回调校验.
     *
     * @param string $data XML 微信支付数据
     * @return array
     * @requestExample({"data":"<xml><appid><![CDATA[wxde31786ddb55f9a8]]></appid>
<attach><![CDATA[paId%3D1%26userId%3D148086%26account%3Deelly.wap%26type%3D1%26transact%3D1%26platform%3DwechatPayNative]]></attach>
    <bank_type><![CDATA[CFT]]></bank_type>
    <cash_fee><![CDATA[10]]></cash_fee>
    <fee_type><![CDATA[CNY]]></fee_type>
    <is_subscribe><![CDATA[N]]></is_subscribe>
    <mch_id><![CDATA[1220553101]]></mch_id>
    <nonce_str><![CDATA[a1017eae7373f349a00381dbc161d95d]]></nonce_str>
    <openid><![CDATA[oS3s7uBBGaftF4dxaEkELYO_L9JA]]></openid>
    <out_trade_no><![CDATA[1288299229939202023322304]]></out_trade_no>
    <result_code><![CDATA[SUCCESS]]></result_code>
    <return_code><![CDATA[SUCCESS]]></return_code>
    <sign><![CDATA[0EC8ACD8E0A75C6F287EC49B050BD38A]]></sign>
    <time_end><![CDATA[20171122105959]]></time_end>
    <total_fee>10</total_fee>
    <trade_type><![CDATA[NATIVE]]></trade_type>
    <transaction_id><![CDATA[4200000044201711226265317145]]></transaction_id>
    </xml>"})
     * @returnExample({"returnCode":"SUCCESS","return_msg":"OK"})
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2018年01月03日
     */
    public function wechatPayNotifyAsync(string $data)
    {
        return EellyClient::request('pay/trade', 'wechatPayNotify', false, $data);
    }

    /**
     * 微信回调校验.
     *
     * @param string $data XML 微信支付数据
     * @return bool
     * @requestExample({"data":"<xml><appid><![CDATA[wxde31786ddb55f9a8]]></appid>
<attach><![CDATA[paId%3D1%26userId%3D148086%26account%3Deelly.wap%26type%3D1%26transact%3D1%26platform%3DwechatPayNative]]></attach>
    <bank_type><![CDATA[CFT]]></bank_type>
    <cash_fee><![CDATA[10]]></cash_fee>
    <fee_type><![CDATA[CNY]]></fee_type>
    <is_subscribe><![CDATA[N]]></is_subscribe>
    <mch_id><![CDATA[1220553101]]></mch_id>
    <nonce_str><![CDATA[a1017eae7373f349a00381dbc161d95d]]></nonce_str>
    <openid><![CDATA[oS3s7uBBGaftF4dxaEkELYO_L9JA]]></openid>
    <out_trade_no><![CDATA[1288299229939202023322304]]></out_trade_no>
    <result_code><![CDATA[SUCCESS]]></result_code>
    <return_code><![CDATA[SUCCESS]]></return_code>
    <sign><![CDATA[0EC8ACD8E0A75C6F287EC49B050BD38A]]></sign>
    <time_end><![CDATA[20171122105959]]></time_end>
    <total_fee>10</total_fee>
    <trade_type><![CDATA[NATIVE]]></trade_type>
    <transaction_id><![CDATA[4200000044201711226265317145]]></transaction_id>
    </xml>"})
     * @returnExample(true)
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2018年01月03日
     */
    public function doVerifyWechatPay(string $data): bool
    {
        return EellyClient::request('pay/trade', 'doVerifyWechatPay', true, $data);
    }

    /**
     * 微信回调校验.
     *
     * @param string $data XML 微信支付数据
     * @return bool
     * @requestExample({"data":"<xml><appid><![CDATA[wxde31786ddb55f9a8]]></appid>
<attach><![CDATA[paId%3D1%26userId%3D148086%26account%3Deelly.wap%26type%3D1%26transact%3D1%26platform%3DwechatPayNative]]></attach>
    <bank_type><![CDATA[CFT]]></bank_type>
    <cash_fee><![CDATA[10]]></cash_fee>
    <fee_type><![CDATA[CNY]]></fee_type>
    <is_subscribe><![CDATA[N]]></is_subscribe>
    <mch_id><![CDATA[1220553101]]></mch_id>
    <nonce_str><![CDATA[a1017eae7373f349a00381dbc161d95d]]></nonce_str>
    <openid><![CDATA[oS3s7uBBGaftF4dxaEkELYO_L9JA]]></openid>
    <out_trade_no><![CDATA[1288299229939202023322304]]></out_trade_no>
    <result_code><![CDATA[SUCCESS]]></result_code>
    <return_code><![CDATA[SUCCESS]]></return_code>
    <sign><![CDATA[0EC8ACD8E0A75C6F287EC49B050BD38A]]></sign>
    <time_end><![CDATA[20171122105959]]></time_end>
    <total_fee>10</total_fee>
    <trade_type><![CDATA[NATIVE]]></trade_type>
    <transaction_id><![CDATA[4200000044201711226265317145]]></transaction_id>
    </xml>"})
     * @returnExample(true)
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2018年01月03日
     */
    public function doVerifyWechatPayAsync(string $data)
    {
        return EellyClient::request('pay/trade', 'doVerifyWechatPay', false, $data);
    }

    /**
     * 主动查询订单是否有支付
     * 
     * @param string $billNo 衣联交易号
     * @param string $type 类型:alipay.支付宝 wechat.微信 applet.小程序
     * @param array $extend 扩展信息 
     * @param array $extend[account] 账号信息
     * 
     * @author wechan
     * @since 2018年10月13日
     */
    public function orderCheckPay(string $billNo, string $type = '', array $extend = []): bool
    {
        return EellyClient::request('pay/trade', 'orderCheckPay', true, $billNo, $type, $extend);
    }

    /**
     * 主动查询订单是否有支付
     * 
     * @param string $billNo 衣联交易号
     * @param string $type 类型:alipay.支付宝 wechat.微信 applet.小程序
     * @param array $extend 扩展信息 
     * @param array $extend[account] 账号信息
     * 
     * @author wechan
     * @since 2018年10月13日
     */
    public function orderCheckPayAsync(string $billNo, string $type = '', array $extend = [])
    {
        return EellyClient::request('pay/trade', 'orderCheckPay', false, $billNo, $type, $extend);
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