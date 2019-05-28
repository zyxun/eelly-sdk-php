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

class UserRelation
{
    public static function getOneInternal(int $fromUid, int $fromType, int $toUid, int $toType): array
    {
        return EellyClient::requestJson('im/userRelation', __FUNCTION__, ['fromUid' => $fromUid, 'fromType' => $fromType, 'toUid' => $toUid, 'toType' => $toType]);
    }
}
