<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Message\Service;


/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface ReplyInterface
{
    /**
     * 添加消息回复.
     *
     * @param int $messageId 消息ID
     * @param int $userId 回复用户ID
     * @param string $content 回复内容
     * @return int
     * @requestExample([1,2,"测试消息回复"])
     * @returnExample(1)
     * @throws \Eelly\SDK\
     * @author liangxinyi<liangxinyi@eelly.net>
     * @since 2017-8-1
     */
    public function addMessageReply(int $messageId,int $userId,string $content):int;

    /**
     * 更新用户消息回复状态.
     *
     * @param int $mrId 回复id
     * @param int $isRead 是否已读：0 否 1 是
     * @return bool
     * @requestExample([1,1])
     * @returnExample(true)
     * @throws \Eelly\SDK\
     * @author liangxinyi<liangxinyi@eelly.net>
     * @since 2017-8-1
     */
    public function updateMessageReplyStatus(int $mrId,int $isRead):bool ;

    /**
     * 获取指定messageId的所有回复列表.
     *
     * @param int messageId 消息ID
     * @return array
     * @requestExample(1)
     * @returnExample()
     * @throws \Eelly\SDK\
     * @author liangxinyi<liangxinyi@eelly.net>
     * @since 2017-8-1
     */
    public function listMessageReplyById(int $messageId):array ;

    /**
     * @param int $mrId 消息回复id
     * @return bool
     * @requestExample(1)
     * @returnExample(true)
     * @throws \Eelly\SDK\
     * @author liangxinyi<liangxinyi@eelly.net>
     * @since 2017-8-1
     */
    public function deleteMessageReply(int $mrId):bool ;

    /**
     * @param int $mrId 消息回复id
     * @return bool
     * @requestExample(1)
     * @returnExample(true)
     * @throws \Eelly\SDK\
     * @author liangxinyi<liangxinyi@eelly.net>
     * @since 2017-8-1
     */
    public function updateMessageReply(int $mrId):bool ;




}