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
use Eelly\SDK\Tim\Service\GroupChatInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class GroupChat implements GroupChatInterface
{
    /**
     * 腾讯云直播间聊天室发送弹幕消息
     *
     * @param integer $userId 用户id
     * @param integer $liveId 直播间id
     * @param integer $type 类型
     * @param array $replaceData 替换的数据
     * @param array $extend 拓展数据
     * @return boolean
     *
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.3.13
     */
    public function timSendBarrage(int $userId, int $liveId, int $type, array $replaceData = [], array $extend = []): bool
    {
        return EellyClient::request('tim/groupChat', 'timSendBarrage', true, $userId, $liveId, $type, $replaceData, $extend);
    }

    /**
     * 腾讯云直播间聊天室发送弹幕消息
     *
     * @param integer $userId 用户id
     * @param integer $liveId 直播间id
     * @param integer $type 类型
     * @param array $replaceData 替换的数据
     * @param array $extend 拓展数据
     * @return boolean
     *
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.3.13
     */
    public function timSendBarrageAsync(int $userId, int $liveId, int $type, array $replaceData = [], array $extend = [])
    {
        return EellyClient::request('tim/groupChat', 'timSendBarrage', false, $userId, $liveId, $type, $replaceData, $extend);
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