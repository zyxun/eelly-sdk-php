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

namespace Eelly\SDK\Message\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Message\Service\ReplyInterface;
use Eelly\DTO\UidDTO;
use Eelly\SDK\Message\DTO\ReplyDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Reply
{
    /**
     * 添加消息回复.
     *
     * @param int    $messageId        用户消息ID
     * @param int    $replayReceiverId 回复接收者ID
     * @param string $content          回复内容
     *
     * @throws \Eelly\SDK\Message\Exception\MessageException
     *
     * @return int
     * @requestExample({"msiId":1,"replayReceiverId":2,"content":"测试消息回复","user":{"user_id":1,"username":"lxy"}})
     * @returnExample(1)
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-8-1
     */
    public function addMessageReply(int $msiId, int $replayReceiverId, string $content, UidDTO $user): int
    {
        return EellyClient::request('message/reply', __FUNCTION__, true, $msiId, $replayReceiverId, $content, $user);
    }

    /**
     * 添加消息回复.
     *
     * @param int    $messageId        用户消息ID
     * @param int    $replayReceiverId 回复接收者ID
     * @param string $content          回复内容
     *
     * @throws \Eelly\SDK\Message\Exception\MessageException
     *
     * @return int
     * @requestExample({"msiId":1,"replayReceiverId":2,"content":"测试消息回复","user":{"user_id":1,"username":"lxy"}})
     * @returnExample(1)
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-8-1
     */
    public function addMessageReplyAsync(int $msiId, int $replayReceiverId, string $content, UidDTO $user)
    {
        return EellyClient::request('message/reply', __FUNCTION__, false, $msiId, $replayReceiverId, $content, $user);
    }

    /**
     * 更新用户消息成已读.
     *
     * @param int    $mrId 回复id
     * @param UidDTO $user 用户对象
     *
     * @throws \Eelly\SDK\Message\Exception\MessageException
     *
     * @return bool
     * @requestExample({"mrId":1,"user":{"user_id":1,"username":"lxy"}})
     * @returnExample(true)
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-8-1
     */
    public function updateMessageReplyStatus(int $mrId, UidDTO $user = null): bool
    {
        return EellyClient::request('message/reply', __FUNCTION__, true, $mrId, $user);
    }

    /**
     * 更新用户消息成已读.
     *
     * @param int    $mrId 回复id
     * @param UidDTO $user 用户对象
     *
     * @throws \Eelly\SDK\Message\Exception\MessageException
     *
     * @return bool
     * @requestExample({"mrId":1,"user":{"user_id":1,"username":"lxy"}})
     * @returnExample(true)
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-8-1
     */
    public function updateMessageReplyStatusAsync(int $mrId, UidDTO $user = null)
    {
        return EellyClient::request('message/reply', __FUNCTION__, false, $mrId, $user);
    }

    /**
     * 获取指定messageId的所有回复列表.
     *
     * @param int $msiId 消息ID
     *
     * @return array
     * @requestExample(1)
     * @returnExample()
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-8-1
     */
    public function listMessageReplyById(int $msiId): array
    {
        return EellyClient::request('message/reply', __FUNCTION__, true, $msiId);
    }

    /**
     * 获取指定messageId的所有回复列表.
     *
     * @param int $msiId 消息ID
     *
     * @return array
     * @requestExample(1)
     * @returnExample()
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-8-1
     */
    public function listMessageReplyByIdAsync(int $msiId)
    {
        return EellyClient::request('message/reply', __FUNCTION__, false, $msiId);
    }

    /**
     * @param int $mrId 消息回复id
     *
     * @throws \Eelly\SDK\Message\Exception\MessageException
     *
     * @return bool
     * @requestExample(1)
     * @returnExample(true)
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-8-1
     */
    public function deleteMessageReply(int $mrId, UidDTO $user = null): bool
    {
        return EellyClient::request('message/reply', __FUNCTION__, true, $mrId, $user);
    }

    /**
     * @param int $mrId 消息回复id
     *
     * @throws \Eelly\SDK\Message\Exception\MessageException
     *
     * @return bool
     * @requestExample(1)
     * @returnExample(true)
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-8-1
     */
    public function deleteMessageReplyAsync(int $mrId, UidDTO $user = null)
    {
        return EellyClient::request('message/reply', __FUNCTION__, false, $mrId, $user);
    }

    /**
     * 获得指定id消息回复.
     *
     * @param int $mrId 消息回复id
     *
     * @throws \Eelly\SDK\Message\Exception\MessageException
     *
     * @return ReplyDTO
     * @requestExample(1)
     * @returnExample()
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-8-4
     */
    public function getMessageReply(int $mrId): ReplyDTO
    {
        return EellyClient::request('message/reply', __FUNCTION__, true, $mrId);
    }

    /**
     * 获得指定id消息回复.
     *
     * @param int $mrId 消息回复id
     *
     * @throws \Eelly\SDK\Message\Exception\MessageException
     *
     * @return ReplyDTO
     * @requestExample(1)
     * @returnExample()
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-8-4
     */
    public function getMessageReplyAsync(int $mrId)
    {
        return EellyClient::request('message/reply', __FUNCTION__, false, $mrId);
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