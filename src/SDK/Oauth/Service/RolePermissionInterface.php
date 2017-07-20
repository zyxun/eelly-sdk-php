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

namespace Eelly\SDK\Oauth\Service;

/**
 * @author liangxinyi<liangxinyi@eelly.net>
 */
interface RolePermissionInterface
{
    /**
     * 新增角色权限操作
     * @param array $data
     * @return int
     */
    public function addRolePermission(array $data):int;

    /**
     * @param int $id 角色id
     * @param array $data 更新角色权限数组
     * @return int 数据库更新返回值
     */
    public function updateRolePermission(int $id,array $data):bool ;


}
