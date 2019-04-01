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

namespace Eelly\SDK\Im\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Im\Service\ChatRoomInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class ChatRoom implements ChatRoomInterface
{
    /**
     * 获取直播间的基础数据.
     *
     * @param array $liveIds 多个直播值
     * @return array
     * @requestExample({"liveId":1})
     * @returnExample({"1":{"liveId":1,"chatroom":null,"_id":{"$oid":"5a7021d0044b8c00094de7ff"},"chatRoomName":"1111","liveTotalOnline":233}})
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2018年01月31日
     */
    public function getChatRoomByLiveId(array $liveIds): array
    {
        return EellyClient::request('im/chatRoom', 'getChatRoomByLiveId', true, $liveIds);
    }

    /**
     * 获取直播间的基础数据.
     *
     * @param array $liveIds 多个直播值
     * @return array
     * @requestExample({"liveId":1})
     * @returnExample({"1":{"liveId":1,"chatroom":null,"_id":{"$oid":"5a7021d0044b8c00094de7ff"},"chatRoomName":"1111","liveTotalOnline":233}})
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2018年01月31日
     */
    public function getChatRoomByLiveIdAsync(array $liveIds)
    {
        return EellyClient::request('im/chatRoom', 'getChatRoomByLiveId', false, $liveIds);
    }

    /**
     * 聊天室云端历史消息查询
     * 
     * @param string $roomid 聊天室id
     * @param string $accid 用户账号
     * @param string $timetag 查询的时间戳锚点，13位。reverse=1时timetag为起始时间戳，reverse=2时timetag为终止时间戳
     * @param int $limit 本次查询的消息条数上限(最多200条),小于等于0，或者大于200，会提示参数错误
     * @param string  $type 查询指定的多个消息类型，类型之间用","分割，不设置该参数则查询全部类型消息。 格式示例： 0,1,2,3
     *                      支持的消息类型：0:文本，1:图片，2:语音，3:视频，4:地理位置，5:通知，6:文件，10:提示，11:智能机器人消息，
     *                      100:自定义消息。用英文逗号分隔。
     * @param int $reverse 1按时间正序排列，2按时间降序排列。其它返回参数414错误。默认是2按时间降序排列
     * 
     * @return mixed
     */
    public function queryChatroomMsg(string $roomid, string $accid, string $timetag, int $limit, string $type, int $reverse = 1): array
    {
        return EellyClient::request('im/chatRoom', 'queryChatroomMsg', true, $roomid, $accid, $timetag, $limit, $type, $reverse);
    }

    /**
     * 聊天室云端历史消息查询
     * 
     * @param string $roomid 聊天室id
     * @param string $accid 用户账号
     * @param string $timetag 查询的时间戳锚点，13位。reverse=1时timetag为起始时间戳，reverse=2时timetag为终止时间戳
     * @param int $limit 本次查询的消息条数上限(最多200条),小于等于0，或者大于200，会提示参数错误
     * @param string  $type 查询指定的多个消息类型，类型之间用","分割，不设置该参数则查询全部类型消息。 格式示例： 0,1,2,3
     *                      支持的消息类型：0:文本，1:图片，2:语音，3:视频，4:地理位置，5:通知，6:文件，10:提示，11:智能机器人消息，
     *                      100:自定义消息。用英文逗号分隔。
     * @param int $reverse 1按时间正序排列，2按时间降序排列。其它返回参数414错误。默认是2按时间降序排列
     * 
     * @return mixed
     */
    public function queryChatroomMsgAsync(string $roomid, string $accid, string $timetag, int $limit, string $type, int $reverse = 1)
    {
        return EellyClient::request('im/chatRoom', 'queryChatroomMsg', false, $roomid, $accid, $timetag, $limit, $type, $reverse);
    }

    /**
     * 发送聊天室消息
     * 
     * @param string $roomid 聊天室id
     * @param string $msgId 客户端消息id，使用uuid等随机串，msgId相同的消息会被客户端去重
     * @param string $fromAccid 消息发出者的账号accid
     * @param int $msgType 消息类型
     * @param string $attach 消息内容，格式同消息格式示例中的body字段,长度限制4096字符
     * @param string $ext 消息扩展字段，内容可自定义，请使用JSON格式，长度限制4096字符
     * 
     */
    public function sendChatRoomMsg(string $roomid, string $msgId, string $fromAccid, int $msgType, string $attach = '', string $ext = ''): array
    {
        return EellyClient::request('im/chatRoom', 'sendChatRoomMsg', true, $roomid, $msgId, $fromAccid, $msgType, $attach, $ext);
    }

    /**
     * 发送聊天室消息
     * 
     * @param string $roomid 聊天室id
     * @param string $msgId 客户端消息id，使用uuid等随机串，msgId相同的消息会被客户端去重
     * @param string $fromAccid 消息发出者的账号accid
     * @param int $msgType 消息类型
     * @param string $attach 消息内容，格式同消息格式示例中的body字段,长度限制4096字符
     * @param string $ext 消息扩展字段，内容可自定义，请使用JSON格式，长度限制4096字符
     * 
     */
    public function sendChatRoomMsgAsync(string $roomid, string $msgId, string $fromAccid, int $msgType, string $attach = '', string $ext = '')
    {
        return EellyClient::request('im/chatRoom', 'sendChatRoomMsg', false, $roomid, $msgId, $fromAccid, $msgType, $attach, $ext);
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