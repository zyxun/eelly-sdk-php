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

use Eelly\DTO\UserDTO;
use Eelly\SDK\EellyClient;

class OauthUser
{
    public function getUserByPassword(string $username, string $password): UserDTO
    {
        return EellyClient::request('user/oauthUser', __FUNCTION__, true, $username, $password);
    }

    public function getUserByUid(int $uid): UserDTO
    {
        return EellyClient::request('user/oauthUser', __FUNCTION__, true, $uid);
    }

    public static function getUserByPasswordGrant(int $grantType, array $parameters, array $extends): UserDTO
    {
        return EellyClient::requestJson('user/oauthUser', __FUNCTION__, ['grantType' => $grantType, 'parameters' => $parameters, 'extends' => $extends]);
    }

    public function getUserByQQAccessToken(string $accessToken): UserDTO
    {
        return EellyClient::request('user/oauthUser', __FUNCTION__, true, $accessToken);
    }

    public function getUserByWechatCode(string $clientId, string $code): UserDTO
    {
        return EellyClient::request('user/oauthUser', __FUNCTION__, true, $clientId, $code);
    }

    public function getUserByWechatJscode(
        string $clientId,
        string $code,
        string $encryptedData,
        string $iv,
        string $rawData,
        string $signature
    ): UserDTO {
        return EellyClient::request('user/oauthUser', __FUNCTION__, true, $clientId, $code, $encryptedData, $iv, $rawData, $signature);
    }

    public function getUserByMobileCode(string $mobile, string $code): UserDTO
    {
        return EellyClient::request('user/oauthUser', __FUNCTION__, true, $mobile, $code);
    }

    public static function checkDayActiveUsers(int $uid): bool
    {
        return EellyClient::requestJson('user/oauthUser', __FUNCTION__, ['uid' => $uid]);
    }
}
