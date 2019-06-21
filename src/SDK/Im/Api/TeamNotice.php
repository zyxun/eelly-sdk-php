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

class TeamNotice
{
    public static function getStorePrepareMsg(int $storeId): array
    {
        return EellyClient::requestJson('im/teamNotice', __FUNCTION__, ['storeId' => $storeId]);
    }

    public static function sendOpenLive(int $storeId): bool
    {
        return EellyClient::requestJson('im/teamNotice', __FUNCTION__, ['storeId' => $storeId]);
    }

    public static function sendTeamLiveEnterMsg(string $tid, string $username): bool
    {
        return EellyClient::requestJson('im/teamNotice', __FUNCTION__, ['tid' => $tid, 'username' => $username]);
    }
}
