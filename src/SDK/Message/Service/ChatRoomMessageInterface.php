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

/**
 * 直播间信息推送.
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface ChatRoomMessageInterface
{
    /**
     * 通过店铺id发送直播间弹幕和消息.
     *
     * @param int $fromUserId 发送消息用户id
     * @param int $storeId    店铺id
     * @param int $type       消息类型 1正在去拿货2刚刚下了单3关注了直播商家4分享了该直播5主播变更讲解商品
     *
     * @return bool
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2018年2月2日
     */
    public function sendBarrageByStoreId(int $userId, int $storeId, int $type):bool; 

    /**
     * 记录直播间用户添加进购物车数量.
     *
     * @param int $userId  用户id
     * @param int $storeId 店铺id
     *
     * @return bool
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2018年3月16日
     */
    public function recordAddCartNumber(int $userId, int $storeId):bool;

    /**
     * 获取直播间信息.
     *
     * @param int $liveId   直播id
     * @param int $loginUid 登录用户id
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2018年1月30日
     */
    public function getLiveRoomInfo(int $liveId, int $loginUid):array;
}
