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
use Eelly\SDK\Im\Service\TeamMemberInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class TeamMember implements TeamMemberInterface
{
    public static function kickMembers(int $uid, int $storeId, array $users, bool $black = false): bool
    {
        return EellyClient::requestJson('im/teamMember', __FUNCTION__, [
            'uid'     => $uid,
            'storeId' => $storeId,
            'users'   => $users,
            'black'   => $black,
        ]);
    }

    public static function getTeamNumNoLogin(int $userId, array $extend = []): array
    {
        return EellyClient::requestJson('im/teamMember', __FUNCTION__, [
            'userId' => $userId,
            'extend' => $extend,
        ]);
    }

    public static function afterAdminBlackUser(int $userId)
    {
        return EellyClient::requestJson('im/teamMember', __FUNCTION__, [
            'userId' => $userId,
        ]);
    }

    public static function afterOpenStoreSuccess(int $storeId)
    {
        return EellyClient::requestJson('im/teamMember', __FUNCTION__, [
            'storeId' => $storeId,
        ]);
    }

    /**
     * 分页取群成员
     *
     * @param array  $condition
     * @param int    $page
     * @param int    $limit
     * @param string $fieldScope
     * @return array
     * @throws \Throwable
     * @author zhangyangxun
     * @since 2019/5/23
     */
    public function getTeamMembersPage(array $condition, int $page = 1, int $limit = 20, string $fieldScope = 'base'): array
    {
        return EellyClient::request('im/teamMember', 'getTeamMembersPage', true, $condition, $page, $limit, $fieldScope);
    }

    /**
     * 分页取群成员
     *
     * @param array  $condition
     * @param int    $page
     * @param int    $limit
     * @param string $fieldScope
     * @return array
     * @throws \Throwable
     * @author zhangyangxun
     * @since 2019/5/23
     */
    public function getTeamMembersPageAsync(array $condition, int $page = 1, int $limit = 20, string $fieldScope = 'base')
    {
        return EellyClient::request('im/teamMember', 'getTeamMembersPage', false, $condition, $page, $limit, $fieldScope);
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