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
 * 角色接口.
 *
 * @author liangxinyi<liangxinyi@eelly.net>
 */
interface RolePermissionInterface
{
    /**
     * 批量新增角色权限.
     *
     * @param int   $roleId        角色id
     * @param array $permissionIds 接口id数组
     *
     * @throws \Eelly\SDK\Oauth\Exception\OauthException
     *
     * @return bool 返回bool值
     * @requestExample({"roleId":1,"permissionIds":[1,2,3,4,5]})
     * @returnExample(true)
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-7-25
     */
    public function addRolePermissionBatch(int $roleId, array $permissionIds): bool;

    /**
     * 批量更新角色权限.
     *
     * @param int   $roleId        角色id
     * @param array $permissionIds 接口id数组
     *
     * @throws \Eelly\SDK\Oauth\Exception\OauthException
     *
     * @return bool 返回bool值
     * @requestExample({"roleId":1,"permissionIds":[1,2,3,4,5]})
     * @returnExample(true)
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-7-25
     */
    public function editRolePermissionBatch(int $roleId, array $permissionIds): bool;

    /**
     * 删除角色、接口关系.
     *
     * @param int $rpId 角色、接口关系id
     *
     * @throws \Eelly\SDK\Oauth\Exception\OauthException
     *
     * @return bool 返回bool值
     * @requestExample({"rpId":1})
     * @returnExample(true)
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-7-25
     */
    public function deleteRolePermission(int $rpId): bool;

    /**
     * 批量删除角色、接口关系.
     *
     * @param array $rpIds 角色、接口关系id数组
     *
     * @throws \Eelly\SDK\Oauth\Exception\OauthException
     *
     * @return bool 返回bool值
     * @requestExample({"rpIds":[1,2,3]})
     * @returnExample(true)
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-7-25
     */
    public function deleteRolePermissionBatch(array $rpIds): bool;

    /**
     * 角色与接口关系分页列表.
     *
     * @param int $roleId      角色id
     * @param int $limit       每页限制条数
     * @param int $currentPage 当前页
     *
     * @return array 返回分页列表
     * @requestExample({"roleId":1,"limit":10,"currentPage":1])
     * @returnExample({"items":[{"rpId":"23","roleId":"1","permissionId":"1","createdTime":"1500996810","updateTime":"0000-00-00 00:00:00","hashName":"user\/index\/cacheTime","permName":"\u7f13\u5b58\u6ce8\u89e3\u793a\u4f8b","isLogin":"0","status":"0","roleName":"\u7cfb\u7edf\u7ba1\u7406\u5458","defaultPermission":"*\/*\/*"}],"page":{"first":1,"before":1,"current":1,"last":1,"next":2,"totalPages":3,"totalItems":3,"limit":1}})
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-7-24
     */
    public function listRolePermissionPage(int $roleId = null, int $currentPage = 1, int $limit = 10): array;
}
