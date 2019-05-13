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

class UserContacts
{
    public static function addBlack(int $fromUid, int $fromType, int $toUid, int $toType): bool
    {
        return EellyClient::requestJson('eellyOldCode/userContacts', __FUNCTION__, [
            'fromUid'  => $fromUid,
            'fromType' => $fromType,
            'toUid'    => $toUid,
            'toType'   => $toType,
        ]);
    }

    public static function unBlack(int $fromUid, int $fromType, int $toUid, int $toType): bool
    {
        return EellyClient::requestJson('eellyOldCode/userContacts', __FUNCTION__, [
            'fromUid'  => $fromUid,
            'fromType' => $fromType,
            'toUid'    => $toUid,
            'toType'   => $toType,
        ]);
    }

    public static function isBlack(int $fromUid, int $fromType, int $toUid, int $toType): bool
    {
        return EellyClient::requestJson('eellyOldCode/userContacts', __FUNCTION__, [
            'fromUid'  => $fromUid,
            'fromType' => $fromType,
            'toUid'    => $toUid,
            'toType'   => $toType,
        ]);
    }

    public static function generateContacts(int $uid, int $type): bool
    {
        return EellyClient::requestJson('eellyOldCode/userContacts', __FUNCTION__, [
            'uid'  => $uid,
            'type' => $type,
        ]);
    }
}
