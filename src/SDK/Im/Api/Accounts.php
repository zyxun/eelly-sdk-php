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
use Eelly\SDK\Im\Service\AccountsInterface;
use Eelly\DTO\UidDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Accounts implements AccountsInterface
{
    /**
     * 获取单个用户信息.
     *
     * @param int         $uid    用户id
     * @param int         $type   用户类型 1 店 2 厂
     * @param UidDTO|null $uidDTO 登录dto
     *
     * @return array
     *
     * @requestExample({"uid":148086, "type":2})
     *
     * @author hehui<hehui@eelly.com>
     */
    public function getOne(int $uid, int $type, UidDTO $uidDTO = null): array
    {
        return EellyClient::request('im/accounts', 'getOne', true, $uid, $type, $uidDTO);
    }

    /**
     * 获取单个用户信息.
     *
     * @param int         $uid    用户id
     * @param int         $type   用户类型 1 店 2 厂
     * @param UidDTO|null $uidDTO 登录dto
     *
     * @return array
     *
     * @requestExample({"uid":148086, "type":2})
     *
     * @author hehui<hehui@eelly.com>
     */
    public function getOneAsync(int $uid, int $type, UidDTO $uidDTO = null)
    {
        return EellyClient::request('im/accounts', 'getOne', false, $uid, $type, $uidDTO);
    }

    /**
     * 获取单个用户信息.
     *
     * @param int         $uid    用户id
     * @param int         $type   用户类型 1 店 2 厂
     *
     * @return array
     *
     * @requestExample({"uid":148086, "type":2})
     *
     * @author hehui<hehui@eelly.com>
     */
    public function getOneNoLogin(int $uid, int $type): array
    {
        return EellyClient::request('im/accounts', 'getOneNoLogin', true, $uid, $type);
    }

    /**
     * 获取单个用户信息.
     *
     * @param int         $uid    用户id
     * @param int         $type   用户类型 1 店 2 厂
     *
     * @return array
     *
     * @requestExample({"uid":148086, "type":2})
     *
     * @author hehui<hehui@eelly.com>
     */
    public function getOneNoLoginAsync(int $uid, int $type)
    {
        return EellyClient::request('im/accounts', 'getOneNoLogin', false, $uid, $type);
    }

    /**
     * 获取多个用户.
     *
     * @param array       $users   用户列表
     * @param UidDTO|null $uidDTO  登录dto
     *
     * @return array
     *
     * @requestExample({"users":[[148086, 2],[148086, 1]]})
     *
     * @author hehui<hehui@eelly.com>
     */
    public function getList(array $users, UidDTO $uidDTO = null): array
    {
        return EellyClient::request('im/accounts', 'getList', true, $users, $uidDTO);
    }

    /**
     * 获取多个用户.
     *
     * @param array       $users   用户列表
     * @param UidDTO|null $uidDTO  登录dto
     *
     * @return array
     *
     * @requestExample({"users":[[148086, 2],[148086, 1]]})
     *
     * @author hehui<hehui@eelly.com>
     */
    public function getListAsync(array $users, UidDTO $uidDTO = null)
    {
        return EellyClient::request('im/accounts', 'getList', false, $users, $uidDTO);
    }

    /**
     * 获取多个用户.
     *
     * @param array       $users   用户列表
     *
     * @return array
     *
     * @requestExample({"users":[[148086, 2],[148086, 1]]})
     *
     * @author hehui<hehui@eelly.com>
     */
    public function getListNoLogin(array $users): array
    {
        return EellyClient::request('im/accounts', 'getListNoLogin', true, $users);
    }

    /**
     * 获取多个用户.
     *
     * @param array       $users   用户列表
     *
     * @return array
     *
     * @requestExample({"users":[[148086, 2],[148086, 1]]})
     *
     * @author hehui<hehui@eelly.com>
     */
    public function getListNoLoginAsync(array $users)
    {
        return EellyClient::request('im/accounts', 'getListNoLogin', false, $users);
    }

    /**
     * 封禁网易云通信ID.
     *
     * @param int $uid
     * @param int $type
     *
     * @return bool
     *
     * @internal
     *
     * @author hehui<hehui@eelly.net>
     */
    public function blockUser(int $uid, int $type): bool
    {
        return EellyClient::request('im/accounts', 'blockUser', true, $uid, $type);
    }

    /**
     * 封禁网易云通信ID.
     *
     * @param int $uid
     * @param int $type
     *
     * @return bool
     *
     * @internal
     *
     * @author hehui<hehui@eelly.net>
     */
    public function blockUserAsync(int $uid, int $type)
    {
        return EellyClient::request('im/accounts', 'blockUser', false, $uid, $type);
    }

    /**
     * 解禁网易云通信ID.
     *
     * @param int $uid
     * @param int $type
     *
     * @return bool
     *
     * @internal
     *
     * @author hehui<hehui@eelly.net>
     */
    public function unblockUser(int $uid, int $type): bool
    {
        return EellyClient::request('im/accounts', 'unblockUser', true, $uid, $type);
    }

    /**
     * 解禁网易云通信ID.
     *
     * @param int $uid
     * @param int $type
     *
     * @return bool
     *
     * @internal
     *
     * @author hehui<hehui@eelly.net>
     */
    public function unblockUserAsync(int $uid, int $type)
    {
        return EellyClient::request('im/accounts', 'unblockUser', false, $uid, $type);
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