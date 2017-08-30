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

use Eelly\SDK\Oauth\DTO\PermissionDTO;

/**
 * 权限接口
 * @author liangxinyi<liangxinyi@eelly.net>
 */
interface PermissionInterface
{
    /**
     * 获得权限接口分页列表.
     *
     * 返回分页接口列表.
     *
     * @param array  $where                 接口检索条件
     * @param string $where['permName']     接口名
     * @param int    $where['status']       接口状态
     * @param string $where['moduleName']   接口所属模块
     * @param int    $where['isLogin']      是否要登录：0 否 1 是
     * @param int    $currentPage           当前页数
     * @param int    $limit                 分页条数
     * @requestExample({"where":{"status":"1","isLogin","0"},"currentPage":1,"limit":10})
     *
     * @throws \Eelly\SDK\Oauth\Exception\OauthException
     *
     * @return array 返回分页接口列表结果
     * @returnExample({"items":[{"moduleName":"user","serviceName":"User\\Logic\\IndexLogic","permissionId":"1","serviceId":"1","hashName":"user\/index\/cacheTime","permName":"\u7f13\u5b58\u6ce8\u89e3\u793a\u4f8b","isLogin":"0","requestExample":"","remark":"","status":"0","createdTime":"1498042155","updateTime":"2017-06-21 10:52:15"}],"page":{"first":1,"before":1,"current":0,"last":1,"next":1,"totalPages":3,"totalItems":3,"limit":1}})
     *
     * @since   2017-7-22
     */
    public function listPermissionPage(array $where = [], int $currentPage = 1, int $limit = 10): array;

    /**
     * 获得权限接口列表.
     *
     * 返回全部接口列表，不分页.
     *
     * @param array|null $where                接口检索条件
     * @param string     $where['permName']    接口名
     * @param int        $where['status']      接口状态
     * @param string     $where['moduleName']  接口所属模块
     * @param int        $where['isLogin']     是否要登录：0 否 1 是
     * @requestExample({"where":{"status":"1","isLogin","0"}})
     *
     * @throws \Eelly\SDK\Oauth\Exception\OauthException
     *
     * @return array 返回接口列表结果
     * @returnExample([{"module_name": "user","service_name": "User\\Logic\\IndexLogic","permission_id": "1","service_id": "1","hash_name": "user/index/cacheTime","perm_name": "缓存注解示例","is_login": "0","request_example": "","remark": "","status": "0","created_time": "1498042155","update_time": "2017-06-21 10:52:15"}])
     *
     * @since   2017-7-22
     */
    public function listPermission(array $where = []): array;

    /**
     * 更新指定id接口状态.
     *
     * @param int $permissionId 接口id
     * @param int $status       接口状态：审核状态/0:未审核,1:审核通过，4:已删除
     *
     * @throws \Eelly\SDK\Oauth\Exception\OauthException
     *
     * @return bool 返回结果集
     * @requestExample({"permissionId":1,"status":1})
     * @returnExample(true)
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-7-25
     */
    public function updatePermissionStatus(int $permissionId, int $status): bool;

    /**
     * 批量更新接口状态.
     *
     * @param array $permissionIds 接口id数组
     * @param int   $status        接口状态：审核状态/0:未审核,1:审核通过，4:已删除
     *
     * @throws \Eelly\SDK\Oauth\Exception\OauthException
     *
     * @return bool 返回结果集
     * @requestExample({"permissionIds":[1,2,3],"status":1})
     * @returnExample(true)
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-7-25
     */
    public function updatePermissionStatusBatch(array $permissionIds, int $status): bool;

    /**
     * 删除单条接口.
     *
     * @param int $permissionId 接口id
     *
     * @throws \Eelly\SDK\Oauth\Exception\OauthException
     *
     * @return bool
     * @requestExample({"permissionId":1})
     * @returnExample(true)
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since   2017-7-18
     *
     * @version   1.0
     */
    public function deletePermission(int $permissionId): bool;

    /**
     * 批量删除接口.
     *
     * @param array $permissionIds 接口permissionIds数组
     *
     * @throws \Eelly\SDK\Oauth\Exception\OauthException
     *
     * @return bool 返回接口集
     * @requestExample({"permissionIds":[1,2,3,4]})
     * @returnExample(true)
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since   2017-7-18
     */
    public function deletePermissionBatch(array $permissionIds): bool;

    /**
     * 获取指定permissionId接口的内容.
     *
     * @param int $permissionId 接口id
     *
     * @throws \Eelly\SDK\Oauth\Exception\OauthException
     *
     * @return PermissionDTO 返回接口PermissionDTO类型
     * @requestExample({"permissionId":1})
     * @returnExample({"permissionId":"1","serviceId":"1","hashName":"user\/index\/cacheTime","permName":"\u7f13\u5b58\u6ce8\u89e3\u793a\u4f8b","status":"0",
    "created_time":"1498042155","update_time":"2017-06-21 10:52:15"})
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-7-22
     */
    public function getPermission(int $permissionId): PermissionDTO;
}
