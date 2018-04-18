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
use Eelly\SDK\Oauth\Service\RolePermissionInterface;

/**
 * @author shadonTools<localhost.shell@gmail.com>
 */
class RolePermission implements RolePermissionInterface
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
    public function addRolePermissionBatch(int $roleId, array $permissionIds): bool
    {
        return EellyClient::request('oauth/rolePermission', __FUNCTION__, true, $roleId, $permissionIds);
    }

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
    public function addRolePermissionBatchAsync(int $roleId, array $permissionIds)
    {
        return EellyClient::request('oauth/rolePermission', __FUNCTION__, false, $roleId, $permissionIds);
    }

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
    public function editRolePermissionBatch(int $roleId, array $permissionIds): bool
    {
        return EellyClient::request('oauth/rolePermission', __FUNCTION__, true, $roleId, $permissionIds);
    }

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
    public function editRolePermissionBatchAsync(int $roleId, array $permissionIds)
    {
        return EellyClient::request('oauth/rolePermission', __FUNCTION__, false, $roleId, $permissionIds);
    }

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
    public function deleteRolePermission(int $rpId): bool
    {
        return EellyClient::request('oauth/rolePermission', __FUNCTION__, true, $rpId);
    }

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
    public function deleteRolePermissionAsync(int $rpId)
    {
        return EellyClient::request('oauth/rolePermission', __FUNCTION__, false, $rpId);
    }

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
    public function deleteRolePermissionBatch(array $rpIds): bool
    {
        return EellyClient::request('oauth/rolePermission', __FUNCTION__, true, $rpIds);
    }

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
    public function deleteRolePermissionBatchAsync(array $rpIds)
    {
        return EellyClient::request('oauth/rolePermission', __FUNCTION__, false, $rpIds);
    }

    /**
     * 角色与接口关系分页列表.
     *
     * @param int $roleId      角色id
     * @param int $limit       每页限制条数
     * @param int $currentPage 当前页
     *
     * @throws \Eelly\SDK\Oauth\Exception\OauthException
     *
     * @return array 返回分页列表
     * @requestExample({"roleId":1,"limit":10,"currentPage":1})
     * @returnExample({"items":[{"rpId":"23","roleId":"1","permissionId":"1","createdTime":"1500996810","updateTime":"0000-00-00 00:00:00","hashName":"user\/index\/cacheTime","permName":"\u7f13\u5b58\u6ce8\u89e3\u793a\u4f8b","isLogin":"0","status":"0","roleName":"\u7cfb\u7edf\u7ba1\u7406\u5458","defaultPermission":"*\/*\/*"}],"page":{"first":1,"before":1,"current":1,"last":1,"next":2,"totalPages":3,"totalItems":3,"limit":1}})
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-7-24
     */
    public function listRolePermissionPage(int $roleId, int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('oauth/rolePermission', __FUNCTION__, true, $roleId, $currentPage, $limit);
    }

    /**
     * 角色与接口关系分页列表.
     *
     * @param int $roleId      角色id
     * @param int $limit       每页限制条数
     * @param int $currentPage 当前页
     *
     * @throws \Eelly\SDK\Oauth\Exception\OauthException
     *
     * @return array 返回分页列表
     * @requestExample({"roleId":1,"limit":10,"currentPage":1})
     * @returnExample({"items":[{"rpId":"23","roleId":"1","permissionId":"1","createdTime":"1500996810","updateTime":"0000-00-00 00:00:00","hashName":"user\/index\/cacheTime","permName":"\u7f13\u5b58\u6ce8\u89e3\u793a\u4f8b","isLogin":"0","status":"0","roleName":"\u7cfb\u7edf\u7ba1\u7406\u5458","defaultPermission":"*\/*\/*"}],"page":{"first":1,"before":1,"current":1,"last":1,"next":2,"totalPages":3,"totalItems":3,"limit":1}})
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-7-24
     */
    public function listRolePermissionPageAsync(int $roleId, int $currentPage = 1, int $limit = 10)
    {
        return EellyClient::request('oauth/rolePermission', __FUNCTION__, false, $roleId, $currentPage, $limit);
    }

    /**
     * 获取角色没有关联的接口列表.
     * 可根据角色id获取角色没有关联的接口列表.
     *
     * @param int $roleId      角色id
     * @param int $limit       每页限制条数
     * @param int $currentPage 当前页
     *
     * @throws \Eelly\SDK\Oauth\Exception\OauthException
     *
     * @return array 返回角色客户端分页列表数组
     * @requestExample({"roleId":1,"currentPage":1,"limit":1})
     * @returnExample({"items":[{"permissionId":"778","hashName":"store\/operate\/addStoreOperator","permName":"\u6dfb\u52a0\u5e97\u94fa\u8fd0\u8425","status":"0"}],"page":{"totalPages":267,"totalItems":267,"limit":1}})
     * @badSql
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     * @badSql
     *
     * @since 2017-9-13
     */
    public function listNotRelationPermissionPage(int $roleId, array $where = null, int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('oauth/rolePermission', __FUNCTION__, true, $roleId, $where, $currentPage, $limit);
    }

    /**
     * 获取角色没有关联的接口列表.
     * 可根据角色id获取角色没有关联的接口列表.
     *
     * @param int $roleId      角色id
     * @param int $limit       每页限制条数
     * @param int $currentPage 当前页
     *
     * @throws \Eelly\SDK\Oauth\Exception\OauthException
     *
     * @return array 返回角色客户端分页列表数组
     * @requestExample({"roleId":1,"currentPage":1,"limit":1})
     * @returnExample({"items":[{"permissionId":"778","hashName":"store\/operate\/addStoreOperator","permName":"\u6dfb\u52a0\u5e97\u94fa\u8fd0\u8425","status":"0"}],"page":{"totalPages":267,"totalItems":267,"limit":1}})
     * @badSql
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     * @badSql
     *
     * @since 2017-9-13
     */
    public function listNotRelationPermissionPageAsync(int $roleId, array $where = null, int $currentPage = 1, int $limit = 10)
    {
        return EellyClient::request('oauth/rolePermission', __FUNCTION__, false, $roleId, $where, $currentPage, $limit);
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
