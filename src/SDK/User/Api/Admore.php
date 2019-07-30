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

class Admore
{
    public static function isIosIdfaExist(string $iosIdfa): bool
    {
        return EellyClient::requestJson('user/admore', __FUNCTION__, ['iosIdfa' => $iosIdfa]);
    }

    public static function saveReceiveTaskUserInfo(array $data): bool
    {
        return EellyClient::requestJson('user/admore', __FUNCTION__, ['data' => $data]);
    }

    public static function saveDownloadAppUserInfo(array $data): bool
    {
        return EellyClient::requestJson('user/admore', __FUNCTION__, ['data' => $data]);
    }
}
