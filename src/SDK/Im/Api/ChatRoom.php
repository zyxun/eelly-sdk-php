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
 * @author shadonTools<localhost.shell@gmail.com>
 */
class ChatRoom implements ChatRoomInterface
{
    /**
     * 获取直播间的基础数据.
     *
     * @param array $liveIds 多个直播值
     *
     * @return array
     * @requestExample({"liveId":1})
     * @returnExample({"1":{"liveId":1,"chatroom":null,"_id":{"$oid":"5a7021d0044b8c00094de7ff"},"chatRoomName":"1111","liveTotalOnline":233}})
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
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
     *
     * @return array
     * @requestExample({"liveId":1})
     * @returnExample({"1":{"liveId":1,"chatroom":null,"_id":{"$oid":"5a7021d0044b8c00094de7ff"},"chatRoomName":"1111","liveTotalOnline":233}})
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2018年01月31日
     */
    public function getChatRoomByLiveIdAsync(array $liveIds)
    {
        return EellyClient::request('im/chatRoom', 'getChatRoomByLiveId', false, $liveIds);
    }

    public function getOne(int $liveId, string $name, int $storeId): array
    {
        return EellyClient::request('im/chatRoom', __FUNCTION__, true, $liveId, $name, $storeId);
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
