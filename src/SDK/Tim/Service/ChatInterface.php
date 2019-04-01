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

namespace Eelly\SDK\Tim\Service;

/**
 * 单聊天
 *
 * @author sunanzhi <sunanzhi@hotmail.com>
 */
interface ChatInterface
{
    /**
     * 单发送消息
     *
     * @param string $fromAccount 消息发送方identifier
     * @param string $toAccount 消息接受放identifier
     * @param array $msgBodyData 消息内容 不同消息类型不同格式
     * @param array $offlinePushInfo 离线推送消息设置
     * @param array $conditions 其他参数 拓展使用
     * @return boolean
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.2.25
     * 
     * @see https://cloud.tencent.com/document/product/269/2282
     */
    public function sendMsg(string $fromAccount, string $toAccount, array $msgBodyData, array $offlinePushInfo = [], array $conditions = []):bool;

    /**
     * 批量单发送消息
     *
     * @param string $fromAccount 消息发送方identifier
     * @param array $toAccount 消息接受放identifier
     * @param array $msgBodyData 消息内容 不同消息类型不同格式
     * @param array $offlinePushInfo 离线推送消息设置
     * @param array $conditions 其他参数 拓展使用
     * @return array
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.2.26
     * 
     * @see https://cloud.tencent.com/document/product/269/1612
     */
    public function batchSendMsg(string $fromAccount, array $toAccount, array $msgBodyData, array $offlinePushInfo = [], array $conditions = []):array;

    /**
     * @param string $setAccount    禁言账号
     * @param int    $c2cTime       单聊禁言时间，0取消，4294967295永久，其他代表禁言时间
     * @param int    $groupTime     群组禁言时间，0取消，4294967295永久，其他代表禁言时间
     * @return bool
     *
     * @author zhangyangxun
     * @since 2019-02-27
     */
    public function setNoSpeaking(string $setAccount, int $c2cTime, int $groupTime): bool;
}