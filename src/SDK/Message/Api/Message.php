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
use Eelly\SDK\Message\Service\MessageInterface;
use Eelly\SDK\Message\DTO\MessageDTO;
use Eelly\DTO\UidDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Message implements MessageInterface
{
    /**
     * 获取指定id消息.
     *
     * @param int $messageId 消息id
     *
     * @throws \Eelly\SDK\
     *
     * @return MessageDTO
     * @requestExample(1)
     * @returnExample()
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-8-1
     */
    public function getMessage(int $messageId): MessageDTO
    {
        return EellyClient::request('message/message', __FUNCTION__, true, $messageId);
    }

    /**
     * 获取指定id消息.
     *
     * @param int $messageId 消息id
     *
     * @throws \Eelly\SDK\
     *
     * @return MessageDTO
     * @requestExample(1)
     * @returnExample()
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-8-1
     */
    public function getMessageAsync(int $messageId)
    {
        return EellyClient::request('message/message', __FUNCTION__, false, $messageId);
    }

    /**
     * 添加消息.
     *
     * @param array  $data 添加的信息
     * @param int    $data ['senderId']    发送者ID：0 系统消息
     * @param int    $data ['receiveType'] 接收类型：1 全部用户(系统) 2
     * @param int    $data ['mtId']        消息模板ID：0 自定义消息
     * @param string $data ['title']       消息标题
     * @param array  $data ['parameter']   消息参数
     *
     * @throws \Eelly\SDK\Message\Exception\MessageException
     *
     * @return int 返回添加成功id
     * @requestExample({"senderId":1,"receiveType":1,"mtId":1,"title":"消息标题","parameter":{"user":"梁新宜","content":"测试消息参数","time":"2017-09-04"}})
     * @returnExample(1)
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-8-1
     */
    public function addMessage(array $data): int
    {
        return EellyClient::request('message/message', __FUNCTION__, true, $data);
    }

    /**
     * 添加消息.
     *
     * @param array  $data 添加的信息
     * @param int    $data ['senderId']    发送者ID：0 系统消息
     * @param int    $data ['receiveType'] 接收类型：1 全部用户(系统) 2
     * @param int    $data ['mtId']        消息模板ID：0 自定义消息
     * @param string $data ['title']       消息标题
     * @param array  $data ['parameter']   消息参数
     *
     * @throws \Eelly\SDK\Message\Exception\MessageException
     *
     * @return int 返回添加成功id
     * @requestExample({"senderId":1,"receiveType":1,"mtId":1,"title":"消息标题","parameter":{"user":"梁新宜","content":"测试消息参数","time":"2017-09-04"}})
     * @returnExample(1)
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-8-1
     */
    public function addMessageAsync(array $data)
    {
        return EellyClient::request('message/message', __FUNCTION__, false, $data);
    }

    /**
     * 删除指定id消息.
     *
     * @param int $messageId 消息id
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
    public function deleteMessage(int $messageId, UidDTO $user = null): bool
    {
        return EellyClient::request('message/message', __FUNCTION__, true, $messageId, $user);
    }

    /**
     * 删除指定id消息.
     *
     * @param int $messageId 消息id
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
    public function deleteMessageAsync(int $messageId, UidDTO $user = null)
    {
        return EellyClient::request('message/message', __FUNCTION__, false, $messageId, $user);
    }

    /**
     * 批量删除消息.
     *
     * @param int $messageIds 消息id数组
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
    public function deleteMessageBatch(array $messageIds, UidDTO $user): bool
    {
        return EellyClient::request('message/message', __FUNCTION__, true, $messageIds, $user);
    }

    /**
     * 批量删除消息.
     *
     * @param int $messageIds 消息id数组
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
    public function deleteMessageBatchAsync(array $messageIds, UidDTO $user)
    {
        return EellyClient::request('message/message', __FUNCTION__, false, $messageIds, $user);
    }

    /**
     * 获取消息列表（可条件检索）.
     *
     * @param int|null    $senderId    发送者ID：0 系统消息
     * @param int|null    $receiveType 接收类型：1 全部用户(系统) 2 全部卖家(系统) 3 全部买家(系统) 4 指定用户
     * @param int|null    $mtId        消息模板ID：0 自定义消息
     * @param string|null $title       消息标题
     * @param int|null    $status      状态：0 未处理 1 处理完成 2 处理中，主要用于邮件、短信消息异步处理时标注处理状态
     *
     * @throws \Eelly\SDK\
     *
     * @return array
     * @requestExample()
     * @returnExample()
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-
     */
    public function listMessage(int $senderId = null, int $receiveType = null, int $mtId = null, string $title = null, int $status = null): array
    {
        return EellyClient::request('message/message', __FUNCTION__, true, $senderId, $receiveType, $mtId, $title, $status);
    }

    /**
     * 获取消息列表（可条件检索）.
     *
     * @param int|null    $senderId    发送者ID：0 系统消息
     * @param int|null    $receiveType 接收类型：1 全部用户(系统) 2 全部卖家(系统) 3 全部买家(系统) 4 指定用户
     * @param int|null    $mtId        消息模板ID：0 自定义消息
     * @param string|null $title       消息标题
     * @param int|null    $status      状态：0 未处理 1 处理完成 2 处理中，主要用于邮件、短信消息异步处理时标注处理状态
     *
     * @throws \Eelly\SDK\
     *
     * @return array
     * @requestExample()
     * @returnExample()
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-
     */
    public function listMessageAsync(int $senderId = null, int $receiveType = null, int $mtId = null, string $title = null, int $status = null)
    {
        return EellyClient::request('message/message', __FUNCTION__, false, $senderId, $receiveType, $mtId, $title, $status);
    }

    /**
     * 获取分页消息列表（可条件检索）.
     *
     * @param array|null  $data
     * @param int|null    $data['sender_id']    发送者ID：0 系统消息
     * @param int|null    $data['receive_type'] 接收类型：1 全部用户(系统) 2 全部卖家(系统) 3 全部买家(系统) 4 指定用户
     * @param int|null    $data['mt_id']        消息模板ID：0 自定义消息
     * @param string|null $data['title']        消息标题
     * @param int|null    $data['status']       状态：0 未处理 1 处理完成 2 处理中，主要用于邮件、短信消息异步处理时标注处理状态
     * @param int         $limit                每页条数
     * @param int         $currentPage          当前页
     *
     * @throws \Eelly\SDK\
     *
     * @return array
     * @requestExample()
     * @returnExample()
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-
     */
    public function listMessagePage(array $data = null, int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('message/message', __FUNCTION__, true, $data, $currentPage, $limit);
    }

    /**
     * 获取分页消息列表（可条件检索）.
     *
     * @param array|null  $data
     * @param int|null    $data['sender_id']    发送者ID：0 系统消息
     * @param int|null    $data['receive_type'] 接收类型：1 全部用户(系统) 2 全部卖家(系统) 3 全部买家(系统) 4 指定用户
     * @param int|null    $data['mt_id']        消息模板ID：0 自定义消息
     * @param string|null $data['title']        消息标题
     * @param int|null    $data['status']       状态：0 未处理 1 处理完成 2 处理中，主要用于邮件、短信消息异步处理时标注处理状态
     * @param int         $limit                每页条数
     * @param int         $currentPage          当前页
     *
     * @throws \Eelly\SDK\
     *
     * @return array
     * @requestExample()
     * @returnExample()
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-
     */
    public function listMessagePageAsync(array $data = null, int $currentPage = 1, int $limit = 10)
    {
        return EellyClient::request('message/message', __FUNCTION__, false, $data, $currentPage, $limit);
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