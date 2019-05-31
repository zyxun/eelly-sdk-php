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

class Follow
{
    public static function isFollow(int $fromUid, int $fromType, int $toUid, int $toType): bool
    {
        return EellyClient::requestJson('eellyOldCode/follow', __FUNCTION__, ['fromUid' => $fromUid, 'fromType' => $fromType, 'toUid' => $toUid, 'toType' => $toType]);
    }

    public static function addFollow(int $fromUid, int $fromType, int $toUid, int $toType): bool
    {
        return EellyClient::requestJson('eellyOldCode/follow', __FUNCTION__, ['fromUid' => $fromUid, 'fromType' => $fromType, 'toUid' => $toUid, 'toType' => $toType]);
    }

    public static function unFollow(int $fromUid, int $fromType, int $toUid, int $toType): bool
    {
        return EellyClient::requestJson('eellyOldCode/follow', __FUNCTION__, ['fromUid' => $fromUid, 'fromType' => $fromType, 'toUid' => $toUid, 'toType' => $toType]);
    }
}
