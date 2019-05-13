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

use Eelly\DTO\UidDTO;
use Eelly\SDK\EellyClient;

class Accounts
{
    public function getOne(int $uid, int $type, UidDTO $uidDTO = null): array
    {
        return EellyClient::request('im/accounts', __FUNCTION__, true, $uid, $type);
    }

    public function getOneNoLogin(int $uid, int $type): array
    {
        return EellyClient::request('im/accounts', __FUNCTION__, true, $uid, $type);
    }

    public function getList(array $users, UidDTO $uidDTO = null): array
    {
        return EellyClient::request('im/accounts', __FUNCTION__, true, $users);
    }

    public function getListNoLogin(array $users): array
    {
        return EellyClient::request('im/accounts', __FUNCTION__, true, $users);
    }

    public function blockUser(int $uid, int $type): bool
    {
        return EellyClient::request('im/accounts', __FUNCTION__, true, $uid, $type);
    }

    public function unblockUser(int $uid, int $type): bool
    {
        return EellyClient::request('im/accounts', __FUNCTION__, true, $uid, $type);
    }

    /**
     * 发送登出通知给客户端.
     *
     * @param int $uid
     *
     * @internal
     *
     * @author hehui<hehui@eelly.net>
     */
    public function sendLogoutNotification(int $uid): void
    {
        EellyClient::request('im/accounts', 'sendLogoutNotification', true, $uid);
    }

    /**
     * 发送登出通知给客户端.
     *
     * @param int $uid
     *
     * @internal
     *
     * @author hehui<hehui@eelly.net>
     */
    public function sendLogoutNotificationAsync(int $uid): void
    {
        EellyClient::request('im/accounts', 'sendLogoutNotification', false, $uid);
    }

    public static function refreshUserInfo(int $uid, int $type, array $data = []): bool
    {
        return EellyClient::requestJson('im/accounts', __FUNCTION__, ['uid' => $uid, 'type' => $type, 'data' => $data]);
    }

    public static function updateNimUinfo(int $uid, int $type, string $name, string $icon, bool $created = false): bool
    {
        return EellyClient::requestJson('im/accounts', __FUNCTION__, ['uid' => $uid, 'type' => $type, 'name' => $name, 'icon' => $icon, 'created' => $created]);
    }

    public static function updateNeteaseUser(int $uid, array $data, bool $created = false): bool
    {
        return EellyClient::requestJson('im/accounts', __FUNCTION__, ['uid' => $uid, 'data' => $data, 'created' => $created]);
    }

    public static function updateNeteaseStore(int $storeId, array $data, bool $created = false): bool
    {
        return EellyClient::requestJson('im/accounts', __FUNCTION__, ['storeId' => $storeId, 'data' => $data, 'created' => $created]);
    }

    public static function checkNeteaseUser(int $uid): bool
    {
        return EellyClient::requestJson('im/accounts', __FUNCTION__, ['uid' => $uid]);
    }

    public static function checkNeteaseStore(int $storeId): bool
    {
        return EellyClient::requestJson('im/accounts', __FUNCTION__, ['storeId' => $storeId]);
    }

    /**
     * @return self
     */
    public static function getInstance(): self
    {
        static $instance;
        if (null === $instance) {
            $instance = new self();
        }

        return $instance;
    }
}
