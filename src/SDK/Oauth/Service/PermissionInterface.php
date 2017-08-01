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

use Eelly\SDK\Oauth\Service\Index\DTO\PermissionDTO;

/**
 * @author liangxinyi<liangxinyi@eelly.net>
 */
interface PermissionInterface
{
    /**
     * 获得权限接口列表.
     *
     * 返回全部接口列表，不分页.
     *
     * @param array $where 接口检索条件
     * @param string $where['perm_name']  接口名
     * @param int $where['status'] 接口状态
     * @param string $where['module_name'] 接口所属模块
     * @param int $where['is_login'] 是否要登录：0 否 1 是
     * @requestExample([{"status":"1","is_login","0"}])
     * @return array  返回接口列表结果
     * @returnExample([
    {
    "module_name": "user",
    "service_name": "User\\Logic\\IndexLogic",
    "permission_id": "1",
    "service_id": "1",
    "hash_name": "user/index/cacheTime",
    "perm_name": "缓存注解示例",
    "is_login": "0",
    "request_example": "",
    "remark": "",
    "status": "0",
    "created_time": "1498042155",
    "update_time": "2017-06-21 10:52:15"
    }
    ])
     * @throws Eelly\SDK\Oauth\Exception\OauthException
     * @since   2017-7-22
     */
    public function listPermission():array;

    /**
     * 获得权限接口分页列表.
     *
     * 返回分页接口列表.
     *
     * @param array $where 接口检索条件
     * @param string $where ['perm_name']  接口名
     * @param int $where ['status'] 接口状态
     * @param string $where ['module_name'] 接口所属模块
     * @param int $where ['is_login'] 是否要登录：0 否 1 是
     * @param int $limit 分页页数
     * @param int $currentPage 当前页数
     * @requestExample([{"status":"1","is_login","0"}])
     * @return array  返回分页接口列表结果
     * @returnExample({"items":[{"module_name":"user","service_name":"User\\Logic\\IndexLogic","permission_id":"1","service_id":"1","hash_name":"user\/index\/cacheTime","perm_name":"\u7f13\u5b58\u6ce8\u89e3\u793a\u4f8b","is_login":"0","request_example":"","remark":"","status":"0","created_time":"1498042155","update_time":"2017-06-21 10:52:15"}],"page":{"first":1,"before":1,"current":0,"last":1,"next":1,"total_pages":3,"total_items":3,"limit":1}})
     * @throws Eelly\SDK\Oauth\Exception\OauthException
     * @since   2017-7-22
     */
    public function listPermissionPage():array;


    /**
     * 获取指定id接口的内容.
     *
     * @param int $permissionId  接口id
     * @return PermissionDTO 返回接口PermissionDTO类型
     * @requestExample(1)
     * @returnExample({"permission_id":"1","service_id":"1","hash_name":"user\/index\/cacheTime","perm_name":"\u7f13\u5b58\u6ce8\u89e3\u793a\u4f8b","status":"0",
    "service_name":"User\\Logic\\IndexLogic","module_name":"user","request_example":"","remark":"","is_login":"0","permission_parameter":[{"preq_id":"1",
    "permission_id":"1","data_type":"2","param_id":"0","param_type":"int","param_example":"[{\"1\":\"2\"}]","comment":"id\u7c7b\u578b","is_must":"1",
    "created_time":"1500712048","update_time":"2017-07-22 16:24:37"}],"permission_return":[{"pret_id":"1","permission_id":"1","return_type":"int",
    "data_type":"1","comment":"\u63d2\u5165id","return_example":"[{\"id\":\"1\"}]","created_time":"1500712048","update_time":"2017-07-22 16:26:55"}],
    "created_time":"1498042155","update_time":"2017-06-21 10:52:15"})
     * @author liangxinyi<liangxinyi@eelly.net>
     * @throws Eelly\SDK\Oauth\Exception\OauthException
     * @since 2017-7-22
     */
    public function getPermission(int $permissionId):PermissionDTO;


    /**
     * 更新指定id接口状态.
     *
     * @param int $permissionId 接口id
     * @param int $status 接口状态：审核状态/0:未审核,1:审核通过，4:已删除
     * @return bool
     * @requestExample([[1,2,3],4])
     * @returnExample(true)
     * @throws Eelly\SDK\Oauth\Exception\OauthException
     * @author liangxinyi<liangxinyi@eelly.net>
     * @since 2017-7-25
     */
    public function updatePermissionStatus(int $permissionId, int $status):bool;

    /**
     * 批量更新接口状态.
     *
     * @param array $permissionIds 接口id数组
     * @param int $status 接口状态：审核状态/0:未审核,1:审核通过，4:已删除
     * @return bool
     * @requestExample([{1,2,3}])
     * @returnExample(true)
     * @throws Eelly\SDK\Oauth\Exception\OauthException
     * @author liangxinyi<liangxinyi@eelly.net>
     * @since 2017-7-25
     */
    public function updatePermissionStatusBatch(array $permissionIds, int $status): bool;

    /**
     * 删除单条记录.
     *
     * @param int $permissionId
     * @return bool
     * @requestExample(1)
     * @returnExample(true)
     * @throws Eelly\SDK\Oauth\Exception\OauthException
     * @author liangxinyi<liangxinyi@eelly.net>
     * @since   2017-7-18
     * @version   1.0
     */
    public function deletePermission(int $permissionId):bool;

    /**
     * 删除多条记录.
     *
     * @param array $permissionIds id数组
     * @return bool
     * @requestExample([1,2,3,4])
     * @returnExample(true)
     * @throws Eelly\SDK\Oauth\Exception\OauthException
     * @author liangxinyi<liangxinyi@eelly.net>
     * @since   2017-7-18
     */
    public function deletePermissionBatch(array $permissionIds):bool;

}
