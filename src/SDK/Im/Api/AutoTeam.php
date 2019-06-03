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

class AutoTeam
{
    public static function registerJoinTeam(array $user, array $extends): bool
    {
        return EellyClient::requestJson('im/autoTeam', __FUNCTION__, ['user' => $user, 'extends' => $extends]);
    }

    public static function joinTeam(string $tid, int $uid, int $type): bool
    {
        return EellyClient::requestJson('im/autoTeam', __FUNCTION__, ['tid' => $tid, 'uid' => $uid, 'type' => $type]);
    }

    public static function orderJoinTeam(array $user): bool
    {
        return EellyClient::requestJson('im/autoTeam', __FUNCTION__, ['user' => $user]);
    }
}
