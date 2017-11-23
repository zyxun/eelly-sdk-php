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
use Eelly\SDK\Pay\Service\TradeInterface;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
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
    public function doPay(array $data): void
    {
        return EellyClient::request('pay/trade', 'doPay', true, $data);
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