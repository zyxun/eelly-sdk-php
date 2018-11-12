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

namespace Eelly\SDK\EellyOldCode\Api\IM\Netease;

use Eelly\SDK\EellyClient;

/**
 * Class ChatRoom.

 * @author sunanzhi <sunanzhi@hotmail.com>
 */
class ChatRoom
{
    /**
     * 获取直播聊天室信息.
     *
     * @param array $liveInfo 直播信息
     *
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2018年1月30日
     */
    public function getLiveChatRoom(array $liveInfo)
    {
        return EellyClient::request('eellyOldCode/IM/Netease/ChatRoom', __FUNCTION__, true, $liveInfo);
    }

    /**
     * 发送直播间弹幕和消息.
     *
     * @param int   $fromUserId  发送消息用户id
     * @param int   $liveId      直播id
     * @param int   $type        消息类型 1正在去拿货2刚刚下了单3关注了直播商家4分享了该直播5主播变更讲解商品
     * @param array $replaceData 替换的数组
     *
     * @return mixed
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2018年2月1日
     */
    public function sendBarrage(int $fromUserId, int $liveId, int $type, array $replaceData = []): array
    {
        return EellyClient::request('eellyOldCode/IM/Netease/ChatRoom', __FUNCTION__, true, $fromUserId, $liveId, $type, $replaceData);
    }

    /**
     * 通过店铺id发送直播间弹幕和消息.
     *
     * @param int $fromUserId 发送消息用户id
     * @param int $storeId    店铺id
     * @param int $type       消息类型 1正在去拿货2刚刚下了单3关注了直播商家4分享了该直播5主播变更讲解商品
     *
     * @return mixed
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2018年2月2日
     */
    public function sendBarrageByStoreId(int $fromUserId, int $storeId, int $type): array
    {
        return EellyClient::request('eellyOldCode/IM/Netease/ChatRoom', __FUNCTION__, true, $fromUserId, $storeId, $type);
    }

    /**
     * 发送点赞信息.
     *
     * @param int $fromUserId   发送消息用户id
     * @param int $liveId       直播id
     * @param int $praiseNumber 点赞数量
     *
     * @return mixed
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2018年2月1日
     */
    public function sendPraise(int $fromUserId, int $liveId, int $praiseNumber): bool
    {
        return EellyClient::request('eellyOldCode/IM/Netease/ChatRoom', __FUNCTION__, true, $fromUserId, $liveId, $praiseNumber);
    }

    /**
     * 获取直播间总观众数.
     *
     * @param array $liveIds 直播间id
     *
     * @return array
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2018年3月17日
     */
    public function getLiveTotalOnline(array $liveIds)
    {
        return EellyClient::request('eellyOldCode/IM/Netease/ChatRoom', __FUNCTION__, true, $liveIds);
    }


}
