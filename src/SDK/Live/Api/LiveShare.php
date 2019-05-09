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

namespace Eelly\SDK\Live\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Live\Service\LiveShareInterface;
use Eelly\DTO\UidDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class LiveShare implements LiveShareInterface
{
    /**
     * 直播间分享.
     *
     * @param int    $liveId     当前进入的直播间id
     * @param string $uniqueFlag 分享的唯一标识 
     * @param string $type       直播间的类型 [app-分享、pc端-分享、小程序-分享]
     * @param int    $laId       活动id
     * @param UidDTO $user       当前登陆的用户 
     * 
     * @return string
     * 
     * @requestExample({
     *     "liveId":1,
     *     "uniqueFlag":"5b0932c4c0fe9c000f131f96",
     *     "type":"小程序-分享",
     *     "laId":"4"
     * })
     * @returnExample({
     *     "code":200,
     *     "msg":"分享信息记录成功"
     * })
     *
     * @author sunanzhi<sunanzhi@hotmail.com>
     *
     * @since 2018年5月25日
     */
    public function share(int $liveId, string $uniqueFlag, string $type, int $laId = 0, UidDTO $user = null): string
    {
        return EellyClient::request('live/liveShare', 'share', true, $liveId, $uniqueFlag, $type, $laId, $user);
    }

    /**
     * 直播间分享.
     *
     * @param int    $liveId     当前进入的直播间id
     * @param string $uniqueFlag 分享的唯一标识 
     * @param string $type       直播间的类型 [app-分享、pc端-分享、小程序-分享]
     * @param int    $laId       活动id
     * @param UidDTO $user       当前登陆的用户 
     * 
     * @return string
     * 
     * @requestExample({
     *     "liveId":1,
     *     "uniqueFlag":"5b0932c4c0fe9c000f131f96",
     *     "type":"小程序-分享",
     *     "laId":"4"
     * })
     * @returnExample({
     *     "code":200,
     *     "msg":"分享信息记录成功"
     * })
     *
     * @author sunanzhi<sunanzhi@hotmail.com>
     *
     * @since 2018年5月25日
     */
    public function shareAsync(int $liveId, string $uniqueFlag, string $type, int $laId = 0, UidDTO $user = null)
    {
        return EellyClient::request('live/liveShare', 'share', false, $liveId, $uniqueFlag, $type, $laId, $user);
    }

    /**
     * 进入分享反馈.
     *
     * @param string $uniqueFlag 直播间分享提供的唯一标识
     * @param string $type       进入直播间的类型 [小程序进入、pc端进入]
     * @param string $clientInfo 客户端信息
     * @param int    $laId       活动id 
     *
     * @return string
     * 
     * @requestExample({
     *     "uniqueFlag":"5b0932c4c0fe9c000f131f96",
     *     "type":"小程序进入",
     *     "clientInfo":'{"ip":"127.0.0.1","brand":"apple", "model":"iphone x", "version":"6.42", "system":"os 12.01", "platform":"nothing"}',
     *     "laId":"4"
     * })
     *
     * @returnExample({
     *     "code":200,
     *     "msg":"反馈记录成功"
     * })
     *
     * @author sunanzhi<sunanzhi@hotmail.com>
     *
     * @since 2018年5月25日
     */
    public function shareFeedback(string $uniqueFlag, string $type, string $clientInfo, int $laId = 0): string
    {
        return EellyClient::request('live/liveShare', 'shareFeedback', true, $uniqueFlag, $type, $clientInfo, $laId);
    }

    /**
     * 进入分享反馈.
     *
     * @param string $uniqueFlag 直播间分享提供的唯一标识
     * @param string $type       进入直播间的类型 [小程序进入、pc端进入]
     * @param string $clientInfo 客户端信息
     * @param int    $laId       活动id 
     *
     * @return string
     * 
     * @requestExample({
     *     "uniqueFlag":"5b0932c4c0fe9c000f131f96",
     *     "type":"小程序进入",
     *     "clientInfo":'{"ip":"127.0.0.1","brand":"apple", "model":"iphone x", "version":"6.42", "system":"os 12.01", "platform":"nothing"}',
     *     "laId":"4"
     * })
     *
     * @returnExample({
     *     "code":200,
     *     "msg":"反馈记录成功"
     * })
     *
     * @author sunanzhi<sunanzhi@hotmail.com>
     *
     * @since 2018年5月25日
     */
    public function shareFeedbackAsync(string $uniqueFlag, string $type, string $clientInfo, int $laId = 0)
    {
        return EellyClient::request('live/liveShare', 'shareFeedback', false, $uniqueFlag, $type, $clientInfo, $laId);
    }

    /**
     * 直播间分享V2
     * 
     * @param array $data 请求数据
     * @param int $data[liveId] 直播id
     * @param string $data[uniqueFlag]  唯一标识
     * @param string $data[type]  分享类型
     * @param string $data[chatRoomType] 消息类型 4微信分享 10 朋友圈分享 11 QQ分享
     * @param int $data[laId] 活动id
     * @param UidDTO $user
     * @return string
     * @throws ShareException
     * 
     * @return string
     * 
     * @requestExample({
     *     "liveId":1,
     *     "uniqueFlag":"5b0932c4c0fe9c000f131f96",
     *     "type":"小程序-分享",
     *     "laId":"4"
     * })
     * @returnExample({
     *     "code":200,
     *     "msg":"分享信息记录成功"
     * })
     * 
     * @author wechan
     * @since 2019年01月11日
     */
    public function shareV2(array $data, UidDTO $user = null): string
    {
        return EellyClient::request('live/liveShare', 'shareV2', true, $data, $user);
    }

    /**
     * 直播间分享V2
     * 
     * @param array $data 请求数据
     * @param int $data[liveId] 直播id
     * @param string $data[uniqueFlag]  唯一标识
     * @param string $data[type]  分享类型
     * @param string $data[chatRoomType] 消息类型 4微信分享 10 朋友圈分享 11 QQ分享
     * @param int $data[laId] 活动id
     * @param UidDTO $user
     * @return string
     * @throws ShareException
     * 
     * @return string
     * 
     * @requestExample({
     *     "liveId":1,
     *     "uniqueFlag":"5b0932c4c0fe9c000f131f96",
     *     "type":"小程序-分享",
     *     "laId":"4"
     * })
     * @returnExample({
     *     "code":200,
     *     "msg":"分享信息记录成功"
     * })
     * 
     * @author wechan
     * @since 2019年01月11日
     */
    public function shareV2Async(array $data, UidDTO $user = null)
    {
        return EellyClient::request('live/liveShare', 'shareV2', false, $data, $user);
    }

    /**
     * 分享记录用户
     *
     * @param string $uniqueFlag 唯一标示
     * @param UidDTO $user|null 登录用户才可以使用这个接口
     * @return boolean
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.3.28
     */
    public function shareRecordUser(string $uniqueFlag, UidDTO $user = null): bool
    {
        return EellyClient::request('live/liveShare', 'shareRecordUser', true, $uniqueFlag, $user);
    }

    /**
     * 分享记录用户
     *
     * @param string $uniqueFlag 唯一标示
     * @param UidDTO $user|null 登录用户才可以使用这个接口
     * @return boolean
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.3.28
     */
    public function shareRecordUserAsync(string $uniqueFlag, UidDTO $user = null)
    {
        return EellyClient::request('live/liveShare', 'shareRecordUser', false, $uniqueFlag, $user);
    }

    /**
     * 获取直播间分享的拉新用户数量
     *
     * @param integer $liveId 直播间id
     * @return integer
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.3.28
     */
    public function getShareNewUser(int $liveId): int
    {
        return EellyClient::request('live/liveShare', 'getShareNewUser', true, $liveId);
    }

    /**
     * 获取直播间分享的拉新用户数量
     *
     * @param integer $liveId 直播间id
     * @return integer
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.3.28
     */
    public function getShareNewUserAsync(int $liveId)
    {
        return EellyClient::request('live/liveShare', 'getShareNewUser', false, $liveId);
    }

    /**
     * 获取用户在店铺的拉新时间
     *
     * @internal
     *
     * @param int $userId
     * @param int $storeId
     * @return int
     * @author zhangyangxun
     * @since 2019/5/8
     */
    public function getShareNewUserTime(int $userId, int $storeId): int
    {
        return EellyClient::request('live/liveShare', 'getShareNewUserTime', true, $userId, $storeId);
    }

    /**
     * 获取用户在店铺的拉新时间
     *
     * @internal
     *
     * @param int $userId
     * @param int $storeId
     * @return int
     * @author zhangyangxun
     * @since 2019/5/8
     */
    public function getShareNewUserTimeAsync(int $userId, int $storeId)
    {
        return EellyClient::request('live/liveShare', 'getShareNewUserTime', false, $userId, $storeId);
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