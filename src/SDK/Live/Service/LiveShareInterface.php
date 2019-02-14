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

namespace Eelly\SDK\Live\Service;

use Eelly\DTO\UidDTO;

/**
 * 直播间分享.
 *
 * @author sunanzhi<sunanzhi@hotmail.com>
 */
interface LiveShareInterface
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
    public function share(int $liveId, string $uniqueFlag, string $type, int $laId = 0, UidDTO $user = null):string;

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
    public function shareFeedback(string $uniqueFlag, string $type, string $clientInfo, int $laId = 0):string;
    
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
    public function shareV2(array $data, UidDTO $user = null):string;
 
}
