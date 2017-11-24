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
use Eelly\SDK\Oauth\Service\RoleInterface;
use Eelly\SDK\Oauth\DTO\RoleDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Role implements RoleInterface
{
    /**
     * 获得指定角色.
     *
     * @throws \Eelly\SDK\Oauth\Exception\OauthException
     *
     * @return RoleDTO 角色DTO
     * @requestExample({"roleId":1})
     * @returnExample({"roleId": "1","roleName": "系统管理员","defaultPermission": "**"})
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-9-18
     */
    public function getRole(int $roleId): RoleDTO
    {
        return EellyClient::request('oauth/role', __FUNCTION__, true, $roleId);
    }

    /**
     * 获得指定角色.
     *
     * @throws \Eelly\SDK\Oauth\Exception\OauthException
     *
     * @return RoleDTO 角色DTO
     * @requestExample({"roleId":1})
     * @returnExample({"roleId": "1","roleName": "系统管理员","defaultPermission": "**"})
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-9-18
     */
    public function getRoleAsync(int $roleId)
    {
        return EellyClient::request('oauth/role', __FUNCTION__, false, $roleId);
    }

    /**
     * 获得角色列表.
     *
     * @throws \Eelly\SDK\Oauth\Exception\OauthException
     *
     * @return array 返回角色列表
     * @requestExample()
     * @returnExample([{"roleId": "1","roleName": "系统管理员","defaultPermission": "**","createdTime": "0","updateTime": "2017-06-21 17:36:49"}])
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-7-25
     */
    public function listRole(): array
    {
        return EellyClient::request('oauth/role', __FUNCTION__, true);
    }

    /**
     * 获得角色列表.
     *
     * @throws \Eelly\SDK\Oauth\Exception\OauthException
     *
     * @return array 返回角色列表
     * @requestExample()
     * @returnExample([{"roleId": "1","roleName": "系统管理员","defaultPermission": "**","createdTime": "0","updateTime": "2017-06-21 17:36:49"}])
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-7-25
     */
    public function listRoleAsync()
    {
        return EellyClient::request('oauth/role', __FUNCTION__, false);
    }

    /**
     * 更新角色信息.
     *
     * @param int    $roleId            角色id
     * @param string $roleName          角色名
     * @param string $defaultPermission 角色权限
     *
     * @throws \Eelly\SDK\Oauth\Exception\OauthException
     *
     * @return bool 返回bool
     * @requestExample({"roleId":1,"roleName":"管理员","defaultPermission":"*"})
     * @returnExample(true)
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-7-25
     */
    public function updateRole(int $roleId, string $roleName, string $defaultPermission): bool
    {
        return EellyClient::request('oauth/role', __FUNCTION__, true, $roleId, $roleName, $defaultPermission);
    }

    /**
     * 更新角色信息.
     *
     * @param int    $roleId            角色id
     * @param string $roleName          角色名
     * @param string $defaultPermission 角色权限
     *
     * @throws \Eelly\SDK\Oauth\Exception\OauthException
     *
     * @return bool 返回bool
     * @requestExample({"roleId":1,"roleName":"管理员","defaultPermission":"*"})
     * @returnExample(true)
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-7-25
     */
    public function updateRoleAsync(int $roleId, string $roleName, string $defaultPermission)
    {
        return EellyClient::request('oauth/role', __FUNCTION__, false, $roleId, $roleName, $defaultPermission);
    }

    /**
     * 增加角色.
     *
     * @param string $roleName          角色名称
     * @param string $defaultPermission 默认权限
     *
     * @throws \Eelly\SDK\Oauth\Exception\OauthException
     *
     * @return RoleDTO 新增角色信息
     * @requestExample({"roleName":"goods","defaultPermission":"*"})
     * @returnExample({"roleId":"16","roleName":"ffff","defaultPermission":"***","createdTime":"1504779860","updateTime":"2017-09-07 10:20:07"})
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-7-25
     */
    public function addRole(string $roleName, string $defaultPermission): RoleDTO
    {
        return EellyClient::request('oauth/role', __FUNCTION__, true, $roleName, $defaultPermission);
    }

    /**
     * 增加角色.
     *
     * @param string $roleName          角色名称
     * @param string $defaultPermission 默认权限
     *
     * @throws \Eelly\SDK\Oauth\Exception\OauthException
     *
     * @return RoleDTO 新增角色信息
     * @requestExample({"roleName":"goods","defaultPermission":"*"})
     * @returnExample({"roleId":"16","roleName":"ffff","defaultPermission":"***","createdTime":"1504779860","updateTime":"2017-09-07 10:20:07"})
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-7-25
     */
    public function addRoleAsync(string $roleName, string $defaultPermission)
    {
        return EellyClient::request('oauth/role', __FUNCTION__, false, $roleName, $defaultPermission);
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