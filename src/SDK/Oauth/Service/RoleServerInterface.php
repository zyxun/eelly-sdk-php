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
interface RoleServerInterface
{
    /**
     * 获得角色列表.
     * @return array
     */
    public function getRoleList():array;

    /**
     * @param int $id 角色id
     * @param array $data 更新数组
     * @return int 数据库更新返回值
     */
    public function updateRole(int $id,array $data):int ;

    /**
     * 新增角色
     * @param array $data 数组
     * @return int 数据库新增返回id
     */
    public function addRole(array $data):int ;
}
