<?php
declare(strict_types=1);
/**
 * PHP version 5.5
 *
 * @copyright  Copyright (c) 2012-2015 EELLY Inc. (http://www.eelly.com)
 * @link       http://www.eelly.com
 * @license    衣联网版权所有
 */


namespace Eelly\SDK\Im\Service;

/**
 * 聊天室
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface ChatRoomInterface
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
    public function getChatRoomByLiveId(int $liveId): array;
}