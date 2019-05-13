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

/**
 * Class UserContacts.
 *
 * @author hehui<runphp@dingtalk.com>
 */
class UserContacts
{
    /**
     * @param int   $uid
     * @param int   $type
     * @param array $users
     *
     * @return array
     */
    public function getListNoLogin(int $uid, int $type, array $users): array
    {
        return EellyClient::request('im/userContacts', __FUNCTION__, true, $uid, $type, $users);
    }
}
