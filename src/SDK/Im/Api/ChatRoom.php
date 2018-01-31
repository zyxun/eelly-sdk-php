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
     * @param int $liveId 直播ID
     * @return array
     * @requestExample({"liveId":1})
     * @returnExample({"liveId":1,"chatroom":null,"_id":{"$oid":"5a7021d0044b8c00094de7ff"},"chatRoomName":"1111","chatRoomInfo":{"roomid":21664881,"valid":true,"announcement":null,"queuelevel":0,"muted":false,"name":"1111","broadcasturl":null,"ext":"","creator":"seller_000000148086"},"robots":[],"liveTotalOnline":0,"status":0,"created":1517298128952,"modified":1517380836939,"defaultAnnouncement":["",""]})
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2018年01月31日
     */
    public function getChatRoomByLiveId(int $liveId): array
    {
        return EellyClient::request('im/chatRoom', 'getChatRoomByLiveId', true, $liveId);
    }

    /**
     * 获取直播间的基础数据.
     *
     * @param int $liveId 直播ID
     * @return array
     * @requestExample({"liveId":1})
     * @returnExample({"liveId":1,"chatroom":null,"_id":{"$oid":"5a7021d0044b8c00094de7ff"},"chatRoomName":"1111","chatRoomInfo":{"roomid":21664881,"valid":true,"announcement":null,"queuelevel":0,"muted":false,"name":"1111","broadcasturl":null,"ext":"","creator":"seller_000000148086"},"robots":[],"liveTotalOnline":0,"status":0,"created":1517298128952,"modified":1517380836939,"defaultAnnouncement":["",""]})
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2018年01月31日
     */
    public function getChatRoomByLiveIdAsync(int $liveId)
    {
        return EellyClient::request('im/chatRoom', 'getChatRoomByLiveId', false, $liveId);
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