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
     * @param int    $live_id 当前进入的直播间id
     * @param string $type    直播间的类型 [app-分享、pc端-分享、小程序-分享]
     * @param UidDTO $user    当前登陆的用户
     *
     * @requestExample ({
     *    "live_id":1,
     *    "type":"小程序-分享"
     * })
     * @returnExample ({
     *    unique_flag:'5b07c5b5b7490',
     * })
     *
     * @author sunanzhi<sunanzhi@hotmail.com>
     *
     * @since 2018年5月25日
     */
    public function share(int $live_id, string $type = null, UidDTO $user = null);

    /**
     * 进入分享反馈.
     *
     * @param string $unique_flag 直播间分享返回的唯一标识
     * @param string $type        进入直播间的类型 [小程序进入、pc端进入]
     * @param UidDTO $user        当前登陆的用户
     *
     * @requestExample ({
     *    "unique_flag":'5b07c5b5b7490',
     *    "type":"小程序进入"
     * })
     *
     * @author sunanzhi<sunanzhi@hotmail.com>
     *
     * @since 2018年5月25日
     */
    public function shareFeedback(string $unique_flag, string $type = null, UidDTO $user = null);
}
