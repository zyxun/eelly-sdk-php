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

class Handlelog
{
    public static function addBarrage(int $liveId, int $uid): bool
    {
        return EellyClient::requestJson('im/handlelog', __FUNCTION__, ['liveId' => $liveId, 'uid' => $uid]);
    }
}
