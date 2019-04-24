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

class TeamMember
{
    public function kickMembers(int $uid, int $storeId, array $users, bool $black = false): bool
    {
        return EellyClient::requestJson('im/teamMember', __FUNCTION__, [
            'uid'     => $uid,
            'storeId' => $storeId,
            'users'   => $users,
            'black'   => $black,
        ]);
    }
}
