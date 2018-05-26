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
     * @param int    $liveId 当前进入的直播间id
     * @param string $type   直播间的类型 [app-分享、pc端-分享、小程序-分享]
     * @param UidDTO $user   当前登陆的用户
     * @requestExample({
     *     "liveId":1,
     *     "type":"小程序-分享"
     * })
     * @returnExample({
     *     "code":200,
     *     "msg":"分享信息记录成功",
     *     "data":{
     *      "uniqueFlag":"5b07c5b5b7490"
     *    }
     * })
     *
     * @author sunanzhi<sunanzhi@hotmail.com>
     *
     * @since 2018年5月25日
     */
    public function share(int $liveId, string $type = null, UidDTO $user = null)
    {
        return EellyClient::request('live/liveShare', 'share', true, $liveId, $type, $user);
    }

    /**
     * 直播间分享.
     *
     * @param int    $liveId 当前进入的直播间id
     * @param string $type   直播间的类型 [app-分享、pc端-分享、小程序-分享]
     * @param UidDTO $user   当前登陆的用户
     * @requestExample({
     *     "liveId":1,
     *     "type":"小程序-分享"
     * })
     * @returnExample({
     *     "code":200,
     *     "msg":"分享信息记录成功",
     *     "data":{
     *      "uniqueFlag":"5b07c5b5b7490"
     *    }
     * })
     *
     * @author sunanzhi<sunanzhi@hotmail.com>
     *
     * @since 2018年5月25日
     */
    public function shareAsync(int $liveId, string $type = null, UidDTO $user = null)
    {
        return EellyClient::request('live/liveShare', 'share', false, $liveId, $type, $user);
    }

    /**
     * 进入分享反馈.
     *
     * @param string $uniqueFlag 直播间分享返回的唯一标识
     * @param string $type       进入直播间的类型 [小程序进入、pc端进入]
     * @param UidDTO $user       当前登陆的用户
     *
     * @requestExample({
     *     "uniqueFlag":"5b07c5b5b7490",
     *     "type":"小程序进入"
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
    public function shareFeedback(string $uniqueFlag, string $type = null, UidDTO $user = null)
    {
        return EellyClient::request('live/liveShare', 'shareFeedback', true, $uniqueFlag, $type, $user);
    }

    /**
     * 进入分享反馈.
     *
     * @param string $uniqueFlag 直播间分享返回的唯一标识
     * @param string $type       进入直播间的类型 [小程序进入、pc端进入]
     * @param UidDTO $user       当前登陆的用户
     *
     * @requestExample({
     *     "uniqueFlag":"5b07c5b5b7490",
     *     "type":"小程序进入"
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
    public function shareFeedbackAsync(string $uniqueFlag, string $type = null, UidDTO $user = null)
    {
        return EellyClient::request('live/liveShare', 'shareFeedback', false, $uniqueFlag, $type, $user);
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