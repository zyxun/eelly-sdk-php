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

namespace Eelly\SDK\Pay\Service;

use Eelly\DTO\UidDTO;

/**
 * 支付接口.
 *
 * @author  肖俊明<xiaojunming@eelly.net>
 *
 * @since 2017年09月28日
 */
interface TradeInterface
{
    /**
     * 支付发起.
     *
     * @param array       $data            请求支付数据
     * @param string      $data['billNo']  在线支付交易号
     * @param int         $data['money']   金额
     * @param int         $data['channel'] 类型渠道：0 线下 1 支付宝 2 微信钱包 3 QQ钱包 4 衣联帐户 5 银联 6 移动支付
     * @param string      $data['subject'] 请求标题
     * @param int         $data['style']   支付方式：0 未知 1 储蓄卡 2 信用卡 3 余额支付 4 扫码支付。。
     * @param UidDTO|null $user            登录用户数据
     * @requestExample({'billNo', 'money': 1, 'channel':1,'subject':'标题','style':1})
     * @returnExample(true)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年09月28日
     */
    public function doPay(array $data, UidDTO $user = null):void;

    /**
     * 支付宝回调函数.
     *
     * @param array  $data                支付宝回调数据
     * @param string $data['appId']       App应用ID
     * @param string $data['tradeNo']     交易号
     * @param string $data['sellerId']    商家ID
     * @param string $data['totalAmount'] 交易金额
     * @param string $data['outTradeNo']  eelly 在线支付交易号
     * @requestExample({"appId":1,"tradeNo":1,"sellerId":1})
     * @returnExample(true)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年09月28日
     */
    public function aliPayNotify(array $data): void;
}
