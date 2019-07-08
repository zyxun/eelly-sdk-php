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

namespace Eelly\SDK\EellyOldCode\Api;

use Eelly\SDK\EellyClient;

class UserInfo
{
    public static function getMemberExtend(int $uid): array
    {
        return EellyClient::requestJson('eellyOldCode/userInfo', __FUNCTION__, ['uid' => $uid]);
    }

    public static function getCreditValue(int $uid): int
    {
        return EellyClient::request('eellyOldCode/userInfo', __FUNCTION__, true, $uid);
    }

    public static function checkImCreditValue(int $uid, array $data): bool
    {
        return EellyClient::requestJson('eellyOldCode/userInfo', __FUNCTION__, ['uid' => $uid, 'data' => $data]);
    }

    public static function getDefaultAddress(int $uid): array
    {
        return EellyClient::request('eellyOldCode/userInfo', __FUNCTION__, true, $uid);
    }

    public static function getTalkTopUserInfo(int $fromUid, int $toUid, int $relationType): array
    {
        return EellyClient::requestJson('eellyOldCode/userInfo', __FUNCTION__, [
            'fromUid'      => $fromUid,
            'toUid'        => $toUid,
            'relationType' => $relationType,
        ]);
    }

    public static function getUserRealName(int $userId):bool
    {
        return EellyClient::requestJson('eellyOldCode/userInfo', __FUNCTION__, [
            'userId'      => $userId
        ]);
    }
}
