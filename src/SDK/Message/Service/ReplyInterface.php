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
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface ReplyInterface
{
    /**
     * 添加消息回复.
     *
     * @param int $messageId 用户消息ID
     * @param int $replayReceiverId 回复接收者ID
     * @param string $content 回复内容
     * @return int
     * @requestExample({"msiId":1,"replayReceiverId":2,"content":"测试消息回复","user":{"user_id":1,"username":"lxy"}})
     * @returnExample(1)
     * @throws \Eelly\SDK\Message\Exception\MessageException
     * @author liangxinyi<liangxinyi@eelly.net>
     * @since 2017-8-1
     */
    public function addMessageReply(int $msiId,int $replayReceiverId,string $content,UserDTO $user):int;

    /**
     * 更新用户消息成已读.
     *
     * @param int $mrId 回复id
     * @param UserDTO $user 用户对象
     * @return bool
     * @requestExample({"mrId":1,"user":{"user_id":1,"username":"lxy"}})
     * @returnExample(true)
     * @throws \Eelly\SDK\Message\Exception\MessageException
     * @author liangxinyi<liangxinyi@eelly.net>
     * @since 2017-8-1
     */
    public function updateMessageReplyStatus(int $mrId,UserDTO $user):bool;

    /**
     * 获取指定messageId的所有回复列表.
     *
     * @param int $msiId 消息ID
     * @return array
     * @requestExample(1)
     * @returnExample()
     * @author liangxinyi<liangxinyi@eelly.net>
     * @since 2017-8-1
     */
    public function listMessageReplyById(int $msiId):array;

    /**
     * @param int $mrId 消息回复id
     * @return bool
     * @requestExample(1)
     * @returnExample(true)
     * @throws \Eelly\SDK\Message\Exception\MessageException
     * @author liangxinyi<liangxinyi@eelly.net>
     * @since 2017-8-1
     */
    public function deleteMessageReply(int $mrId,UserDTO $user):bool;

    /**
     * 获得指定id消息回复.
     *
     * @param int $mrId 消息回复id
     * @return MessageReplyDTO
     * @requestExample(1)
     * @returnExample()
     * @throws \Eelly\SDK\Message\Exception\MessageException
     * @author liangxinyi<liangxinyi@eelly.net>
     * @since 2017-8-4
     */
    public function getMessageReply(int $mrId): MessageReplyDTO;






}