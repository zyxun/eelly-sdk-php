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

use Eelly\DTO\UidDTO;
use Eelly\SDK\EellyClient;

class UcReplace
{
    public function getUserIdByUsername(string $username): int
    {
        return EellyClient::request('user/ucReplace', __FUNCTION__, true, $username);
    }

    public function getUserIdByWechatUnionid(string $unionid): int
    {
        return EellyClient::request('user/ucReplace', __FUNCTION__, true, $unionid);
    }

    public function getUserIdByQQOpenid(string $openid): int
    {
        return EellyClient::request('user/ucReplace', __FUNCTION__, true, $openid);
    }

    public function updatePassword(int $userId, string $password, UidDTO $uidDTO = null): bool
    {
        return EellyClient::request('user/ucReplace', __FUNCTION__, true, $userId, $password);
    }

    public function hasPassword(int $userId): bool
    {
        return EellyClient::request('user/ucReplace', __FUNCTION__, true, $userId);
    }

    public function checkPassword(int $userId, string $password): bool
    {
        return EellyClient::request('user/ucReplace', __FUNCTION__, true, $userId, $password);
    }

    public function getUserBind(int $userId, int $type): array
    {
        return EellyClient::request('user/ucReplace', __FUNCTION__, true, $userId, $type);
    }

    public function updateUserBind(int $userId, int $type, string $strid): bool
    {
        return EellyClient::request('user/ucReplace', __FUNCTION__, true, $userId, $type, $strid);
    }
}
