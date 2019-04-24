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

namespace Eelly\SDK\User\Api;

use Eelly\SDK\EellyClient;

class UserContacts
{
    public static function addBlackInternal(int $fromUid, int $fromType, array $users): bool
    {
        return EellyClient::requestJson('user/userContacts', __FUNCTION__, [
            'fromUid'  => $fromUid,
            'fromType' => $fromType,
            'users'    => $users,
        ]);
    }
}
