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

namespace Eelly\SDK\EellyOldCode\Api\IM\Netease;

use Eelly\SDK\EellyClient;

/**
 * Class ChatRoom.
 */
class User
{
    /**
     * 更新云信昵称
     * 
     * @param int $userId 用户id
     * @param int $type 类型
     * @param string $nickName 昵称 
     */
    public function updateUserNickName($userId, $type, $nickName)
    {
        return EellyClient::request('eellyOldCode/IM/Netease/User', __FUNCTION__, true, $userId, $type, $nickName);
    }
}
