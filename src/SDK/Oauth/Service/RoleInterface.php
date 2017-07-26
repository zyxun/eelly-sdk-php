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
interface RoleInterface
{
    /**
     * 获得角色列表.
     *
     * @return array  返回角色列表
     * @requestExample()
     * @returnExample([{"role_id":"1","role_name":"\u7cfb\u7edf\u7ba1\u7406\u5458","default_permission":"*\/*\/*","created_time":"0","update_time":"2017-06-21 17:36:49"}])
     * @author liangxinyi<liangxinyi@eelly.net>
     * @since 2017-7-25
     */
    public function listRole(): array;

    /**
     * 更新角色信息.
     *
     * @param int $roleId 角色id
     * @param string $roleName 角色名
     * @param string $defaultPermission 角色权限
     * @return bool 返回bool
     * @requestExample([1,"管理员","*"])
     * @returnExample(true)
     * @author liangxinyi<liangxinyi@eelly.net>
     * @since 2017-5-25
     */
    public function updateRole(int $roleId, string $roleName, string $defaultPermission): bool;

    /**
     * 增加角色接口.
     *
     * 新增角色.
     *
     * @param string $roleName
     * @return int 新增角色id
     * @requestExample(['测试示例'])
     * @returnExample([1])
     * @author liangxinyi<liangxinyi@eelly.net>
     * @since 2017-7-25
     *
     */
    public function addRole(string $roleName,string $defaultPermission): int;

    /**
     * 批量新增|更新角色客户端.
     *
     * @param int $roleId 角色id
     * @param array $clientIds 客户端id数组
     * @return bool
     * @requestExample([1,[1,2,3,4]])
     * @returnExample(true)
     * @author liangxinyi<liangxinyi@eelly.net>
     * @since 2017-7-25
     */
    public function addRoleClient(int $roleId, array $clientIds): bool;

    /**
     * 批量新增|更新角色权限.
     *
     * @param int $roleId 角色id
     * @param array $permissionIds 接口id数组
     * @return bool
     * @requestExample([1,[1,2,3,4,5]])
     * @returnExample(true)
     * @author liangxinyi<liangxinyi@eelly.net>
     * @since 2017-7-25
     */
    public function addRolePermissionBatch(int $roleId, array $permissionIds): bool;

    /**
     * 角色客户端分页列表.
     *
     * @param int $roleId 角色id
     * @param int $clientId 客户端id
     * @param int $limit 每页限制条数
     * @param int $currentPage 当前页
     * @return array 返回角色客户端分页列表数组
     * @requestExample([1])
     * @returnExample({"items":[{"rc_id":"1","client_id":"3","role_id":"1","created_time":"1498042082","update_time":"2017-06-21 10:51:02","client_key":"usermodule","org_name":"eellyapi","app_name":"user","redirect_uri":"","auth_type":"4","is_encrypt":"\u0001","role_name":"\u7cfb\u7edf\u7ba1\u7406\u5458","default_permission":"*\/*\/*"}],"page":{"first":1,"before":1,"current":1,"last":1,"next":1,"total_pages":1,"total_items":1,"limit":10}})
     * @author liangxinyi<liangxinyi@eelly.net>
     * @since 2017-7-24
     */
    public function listRoleClientPage(int $roleId = null, int $clientId = null, int $limit = 10, int $currentPage = 1): array;

    /**
     * 角色与接口关系分页列表.
     *
     * @param int $roleId 角色id
     * @param int $limit 每页限制条数
     * @param int $currentPage 当前页
     * @return array 返回角色客户端分页列表数组
     * @requestExample()
     * @returnExample()
     * @author liangxinyi<liangxinyi@eelly.net>
     * @since 2017-7-24
     */
    public function listRolePermissionPage(int $roleId = null, int $limit = 10, int $currentPage = 1): array;

    /**
     * 删除角色、客户端关系.
     *
     * @param int $rcId 角色、客户端关系id
     * @return bool  返回bool值
     * @requestExample(1)
     * @returnExample(true)
     * @author liangxinyi<liangxinyi@eelly.net>
     * @since 2017-7-25
     */
    public function deleteRoleClient(int $rcId): bool;

    /**
     * 批量删除角色、客户端关系.
     *
     * @param array $rcIds 角色、客户端关系id数组
     * @return bool  返回bool值
     * @requestExample(1)
     * @returnExample(true)
     * @author liangxinyi<liangxinyi@eelly.net>
     * @since 2017-7-25
     */
    public function deleteRoleClientBatch(array $rcIds): bool;

    /**
     * 删除角色、接口关系.
     *
     * @param int $rpId 角色、接口关系id
     * @return bool  返回bool值
     * @requestExample(1)
     * @returnExample(true)
     * @author liangxinyi<liangxinyi@eelly.net>
     * @since 2017-7-25
     */
    public function deleteRolePermission(int $rpId): bool;


    /**
     * 批量删除角色、接口关系.
     *
     * @param array $rpIds 角色、接口关系id数组
     * @return bool  返回bool值
     * @requestExample(1)
     * @returnExample(true)
     * @author liangxinyi<liangxinyi@eelly.net>
     * @since 2017-7-25
     */
    public function deleteRolePermissionBatch(array $rpIds): bool;


}
