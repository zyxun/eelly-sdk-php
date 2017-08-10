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

namespace Eelly\SDK\Message\Service;

use Eelly\DTO\UserDTO;
use Eelly\SDK\Message\Service\DTO\MessageReplyDTO;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface ReplyInterface
{
    /**
     * 添加消息回复.
     *
     * @param int    $messageId          消息ID
     * @param int    $replay_receiver_id 回复接收者ID
     * @param string $content            回复内容
     *
     * @throws \Eelly\SDK\
     *
     * @return int
     * @requestExample([1,2,"测试消息回复"])
     * @returnExample(1)
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-8-1
     */
    public function addMessageReply(int $messageId, int $replay_receiver_id, string $content, UserDTO $user): int;

    /**
     * 更新用户消息回复状态.
     *
     * @param int $mrId   回复id
     * @param int $isRead 是否已读：0 否 1 是
     *
     * @throws \Eelly\SDK\
     *
     * @return bool
     * @requestExample([1,1])
     * @returnExample(true)
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-8-1
     */
    public function updateMessageReplyStatus(int $mrId, int $isRead, UserDTO $user): bool;

    /**
     * 获取指定messageId的所有回复列表.
     *
     * @param int messageId 消息ID
     *
     * @throws \Eelly\SDK\
     *
     * @return array
     * @requestExample(1)
     * @returnExample()
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-8-1
     */
    public function listMessageReplyById(int $messageId): array;

    /**
     * @param int $mrId 消息回复id
     *
     * @throws \Eelly\SDK\
     *
     * @return bool
     * @requestExample(1)
     * @returnExample(true)
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-8-1
     */
    public function deleteMessageReply(int $mrId, UserDTO $user): bool;

    /**
     * 获得指定id消息回复.
     *
     * @param int $mrId 消息回复id
     *
     * @throws \Eelly\SDK\
     *
     * @return MessageReplyDTO
     * @requestExample()
     * @returnExample()
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-8-4
     */
    public function getMessageReply(int $mrId): MessageReplyDTO;
}
