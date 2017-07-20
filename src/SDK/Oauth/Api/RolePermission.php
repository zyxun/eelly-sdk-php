<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Oauth\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Oauth\Service\RolePermissionInterface;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class RolePermission implements RolePermissionInterface
{

    /**
     * 新增角色权限操作
     * @param array $data
     * @return int
     */
    public function addRolePermission(array $data): int
    {
        return EellyClient::request('oauth/rolepermission', 'addRolePermission', $data);
    }

    /**
     * @param int $id 角色id
     * @param array $data 更新角色权限数组
     * @return int 数据库更新返回值
     */
    public function updateRolePermission(int $id,array $data): bool
    {
        return EellyClient::request('oauth/rolepermission', 'updateRolePermission', $id, $data);
    }


}