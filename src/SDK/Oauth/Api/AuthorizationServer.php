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

namespace Eelly\SDK\Oauth\Api;

use Eelly\SDK\EellyClient;

/**
 * @author shadonTools<localhost.shell@gmail.com>
 */
class AuthorizationServer
{
    public static function isAccessTokenRevoked(string $tokenId): bool
    {
        return EellyClient::requestJson('oauth/authorizationServer', __FUNCTION__, ['tokenId' => $tokenId]);
    }

    public static function revokeUserAccessToken(int $uid): bool
    {
        return EellyClient::requestJson('oauth/authorizationServer', __FUNCTION__, ['uid' => $uid]);
    }
}
