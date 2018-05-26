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
     * @param int    $liveId 当前进入的直播间id
     * @param string $type   直播间的类型 [app-分享、pc端-分享、小程序-分享]
     * @param UidDTO $user   当前登陆的用户
     * 
     * @return string
     * 
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
    public function share(int $liveId, string $type = null, UidDTO $user = null):string;

    /**
     * 进入分享反馈.
     *
     * @param string $uniqueFlag 直播间分享返回的唯一标识
     * @param string $type       进入直播间的类型 [小程序进入、pc端进入]
     * @param UidDTO $user       当前登陆的用户
     *
     * @return string
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
    public function shareFeedback(string $uniqueFlag, string $type = null, UidDTO $user = null):string;
}
