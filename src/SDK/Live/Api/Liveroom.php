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

class Liveroom
{
    public function getOne(int $liveId): array
    {
        return EellyClient::request('live/liveroom', __FUNCTION__, true, $liveId);
    }

    public function sendPraise(int $uid, int $liveId, int $praise): bool
    {
        return EellyClient::request('live/liveroom', __FUNCTION__, true, $uid, $liveId, $praise);
    }

    public function enterEventNotify(int $liveId): bool
    {
        return EellyClient::request('live/liveroom', __FUNCTION__, true, $liveId);
    }
}
