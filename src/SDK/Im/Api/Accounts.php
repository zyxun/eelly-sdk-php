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
use Eelly\SDK\Im\Service\AccountsInterface;

class Accounts
{
    /**
     *{@inheritdoc}
     */
    public function getOne(int $uid, int $type, UidDTO $uidDTO = null): array
    {
        return EellyClient::request('im/accounts', __FUNCTION__, true, $uid, $type);
    }

    /**
     * {@inheritdoc}
     */
    public function getOneNoLogin(int $uid, int $type): array
    {
        return EellyClient::request('im/accounts', __FUNCTION__, true, $uid, $type);
    }

    /**
     * {@inheritdoc}
     */
    public function getList(array $users, UidDTO $uidDTO = null): array
    {
        return EellyClient::request('im/accounts', __FUNCTION__, true, $users);
    }

    /**
     * {@inheritdoc}
     */
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
        return EellyClient::request('im/accounts', 'sendLogoutNotification', true, $uid);
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
    public function sendLogoutNotificationAsync(int $uid)
    {
        return EellyClient::request('im/accounts', 'sendLogoutNotification', false, $uid);
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
