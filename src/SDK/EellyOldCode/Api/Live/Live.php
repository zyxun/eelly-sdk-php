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

namespace Eelly\SDK\EellyOldCode\Api\Live;

use Eelly\SDK\EellyClient;

/**
 * Class Operation.
 *
 * @author sunanzhi <sunanzhi@hotmail.com>
 */
class Live
{
    /**
     * 获取直播间信息.
     *
     * @param int $liveId 直播id
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2018年1月30日
     */
    public function getLiveRoomInfo($liveId, $userId)
    {
        return EellyClient::request('eellyOldCode/Live/Live', __FUNCTION__, true, $liveId, $userId);
    }
}
