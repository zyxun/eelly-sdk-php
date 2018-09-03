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
class ConfirmWithdraw implements ConfirmWithdrawInterface
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
    public function acceptForWechat(int $pwId): bool
    {
        return EellyClient::request('pay/confirmWithdraw', 'acceptForWechat', true, $pwId);
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
    public function acceptForWechatAsync(int $pwId)
    {
        return EellyClient::request('pay/confirmWithdraw', 'acceptForWechat', false, $pwId);
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
     * 驳回提现申请.
     * 
     * @param integer $paId 提现交易id
     * 
     * @return boolean
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.9.3
     */
    public function closeWithdraw(int $pwId): bool
    {
        return EellyClient::request('pay/confirmWithdraw', 'closeWithdraw', true, $pwId);
    }

    /**
     * 驳回提现申请.
     * 
     * @param integer $paId 提现交易id
     * 
     * @return boolean
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.9.3
     */
    public function closeWithdrawAsync(int $pwId)
    {
        return EellyClient::request('pay/confirmWithdraw', 'closeWithdraw', false, $pwId);
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