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

namespace Eelly\SDK\Tim\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Tim\Service\ChatInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Chat
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
    public function sendMsg(string $fromAccount, string $toAccount, array $msgBodyData, array $offlinePushInfo = [], array $conditions = []): bool
    {
        return EellyClient::request('tim/chat', 'sendMsg', true, $fromAccount, $toAccount, $msgBodyData, $offlinePushInfo, $conditions);
    }

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
    public function sendMsgAsync(string $fromAccount, string $toAccount, array $msgBodyData, array $offlinePushInfo = [], array $conditions = [])
    {
        return EellyClient::request('tim/chat', 'sendMsg', false, $fromAccount, $toAccount, $msgBodyData, $offlinePushInfo, $conditions);
    }

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
    public function batchSendMsg(string $fromAccount, array $toAccount, array $msgBodyData, array $offlinePushInfo = [], array $conditions = []): array
    {
        return EellyClient::request('tim/chat', 'batchSendMsg', true, $fromAccount, $toAccount, $msgBodyData, $offlinePushInfo, $conditions);
    }

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
    public function batchSendMsgAsync(string $fromAccount, array $toAccount, array $msgBodyData, array $offlinePushInfo = [], array $conditions = [])
    {
        return EellyClient::request('tim/chat', 'batchSendMsg', false, $fromAccount, $toAccount, $msgBodyData, $offlinePushInfo, $conditions);
    }

    /**
     * @param string $setAccount    禁言账号
     * @param int    $c2cTime       单聊禁言时间，0取消，4294967295永久，其他代表禁言时间
     * @param int    $groupTime     群组禁言时间，0取消，4294967295永久，其他代表禁言时间
     * @return bool
     *
     * @author zhangyangxun
     * @since 2019-02-27
     */
    public function setNoSpeaking(string $setAccount, int $c2cTime, int $groupTime): bool
    {
        return EellyClient::request('tim/chat', 'setNoSpeaking', true, $setAccount, $c2cTime, $groupTime);
    }

    /**
     * @param string $setAccount    禁言账号
     * @param int    $c2cTime       单聊禁言时间，0取消，4294967295永久，其他代表禁言时间
     * @param int    $groupTime     群组禁言时间，0取消，4294967295永久，其他代表禁言时间
     * @return bool
     *
     * @author zhangyangxun
     * @since 2019-02-27
     */
    public function setNoSpeakingAsync(string $setAccount, int $c2cTime, int $groupTime)
    {
        return EellyClient::request('tim/chat', 'setNoSpeaking', false, $setAccount, $c2cTime, $groupTime);
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