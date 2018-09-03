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

/**
 * 资金提现确认
 * 
 * @author sunanzhi <sunanzhi@hotmail.com>
 * @since 2018.9.3
 */
interface ConfirmWithdrawInterface
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
    public function acceptForWechat(int $pwId): bool;

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
    public function confirmForWechat(int $pwId, string $account = 'eelly.app'): bool;

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
    public function closeWithdraw(int $pwId): bool;
}
