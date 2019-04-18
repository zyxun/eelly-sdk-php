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
use Eelly\SDK\Pay\Service\ConfirmWithdrawInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class ConfirmWithdraw
{
    /**
     * 同意提现申请
     *
     * @param integer $pwId 申请交易的id
     * @return boolean
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.9.3
     */
    public function acceptWithdraw(int $pwId): bool
    {
        return EellyClient::request('pay/confirmWithdraw', 'acceptWithdraw', true, $pwId);
    }

    /**
     * 同意提现申请
     *
     * @param integer $pwId 申请交易的id
     * @return boolean
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.9.3
     */
    public function acceptWithdrawAsync(int $pwId)
    {
        return EellyClient::request('pay/confirmWithdraw', 'acceptWithdraw', false, $pwId);
    }

    /**
     * 确认提现到微信.
     *
     * @param integer $pwId 申请交易的id
     * @param string $account 账号配置
     * @return boolean
     * 
     * @requestExample({"paId":2,"account":"eelly.app"})
     * @returnExample(true)
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.9.3
     */
    public function confirmForWechat(int $pwId, string $account = 'eelly.app'): bool
    {
        return EellyClient::request('pay/confirmWithdraw', 'confirmForWechat', true, $pwId, $account);
    }

    /**
     * 确认提现到微信.
     *
     * @param integer $pwId 申请交易的id
     * @param string $account 账号配置
     * @return boolean
     * 
     * @requestExample({"paId":2,"account":"eelly.app"})
     * @returnExample(true)
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.9.3
     */
    public function confirmForWechatAsync(int $pwId, string $account = 'eelly.app')
    {
        return EellyClient::request('pay/confirmWithdraw', 'confirmForWechat', false, $pwId, $account);
    }

    /**
     * 确认提现到银行
     *
     * @param integer $pwId 申请交易的id
     * @return boolean
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.9.4
     */
    public function confirmForBank(int $pwId): bool
    {
        return EellyClient::request('pay/confirmWithdraw', 'confirmForBank', true, $pwId);
    }

    /**
     * 确认提现到银行
     *
     * @param integer $pwId 申请交易的id
     * @return boolean
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.9.4
     */
    public function confirmForBankAsync(int $pwId)
    {
        return EellyClient::request('pay/confirmWithdraw', 'confirmForBank', false, $pwId);
    }

    /**
     * 驳回提现申请.
     * 
     * @param integer $paId 提现交易id
     * @param string $remark 驳回理由
     * 
     * @return boolean
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.9.3
     */
    public function closeWithdraw(int $pwId, string $remark = ''): bool
    {
        return EellyClient::request('pay/confirmWithdraw', 'closeWithdraw', true, $pwId, $remark);
    }

    /**
     * 驳回提现申请.
     * 
     * @param integer $paId 提现交易id
     * @param string $remark 驳回理由
     * 
     * @return boolean
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.9.3
     */
    public function closeWithdrawAsync(int $pwId, string $remark = '')
    {
        return EellyClient::request('pay/confirmWithdraw', 'closeWithdraw', false, $pwId, $remark);
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