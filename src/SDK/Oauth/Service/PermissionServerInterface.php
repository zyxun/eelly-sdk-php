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
interface PermissionServerInterface
{
    /**
     * 获得权限接口列表.
     *
     * @return array
     * @author liangxinyi<liangxinyi@eelly.net>
     * @since   2017-7-17
     */
    public function listPermission():array;

    /**
     * 获得分页权限接口列表.
     *
     * @return array
     * @author liangxinyi<liangxinyi@eelly.net>
     * @since   2017-7-17
     */
    public function listPermissionPage():array ;

    /**
     * 更新接口数据.
     *
     * @param int $id    接口id
     * @param array $permission   接口基本信息
     * @param int $permission['service_id']    服务ID
     * @param string $permission['hash_name']  用于查询的唯一hash值
     * @param string $permission['perm_name']  接口名
     * @param array $permissionRequest  接口请求数据
     * @param string $permissionRequest[0] ['type']    参数类型
     * @param string $permissionRequest[0] ['comment']  参数注释
     * @param array $permissionReturn   接口返回数据
     * @param string $permissionReturn['dto_name']  DTO类名
     * @param string $permissionReturn['return_example']  返回示例值(json字符串)
     * @return bool
     * @author liangxinyi<liangxinyi@eelly.net>
     * @since   2017-7-17
     */
    public function updatePermission(int $id,array $permission,array $permissionRequest,array $permissionReturn):bool ;

    /**
     * 展示编辑接口的内容.
     *
     * @param int $id
     * @return array
     * @author liangxinyi<liangxinyi@eelly.net>
     * @since   2017-7-17
     */
    public function getPermission(int $id):PermissionDTO ;

    /**
     * 添加接口.
     *
     * @param int $id    接口id
     * @param array $permission   接口基本信息
     * @param int $permission['service_id']    服务ID
     * @param string $permission['hash_name']  用于查询的唯一hash值
     * @param string $permission['perm_name']  接口名
     * @param array $permissionRequest  接口请求数据
     * @param string $permissionRequest[0] ['type']    参数类型
     * @param string $permissionRequest[0] ['comment']  参数注释=
     * @param array $permissionReturn   接口返回数据
     * @param string $permissionReturn['dto_name']  DTO类名
     * @param string $permissionReturn['return_example']  返回示例值(json字符串)
     * @return int
     * @returnExample(1)
     * @author liangxinyi<liangxinyi@eelly.net>
     * @since   2017-7-18
     */
    public function addPermission(array $permission,array $permissionRequest,array $permissionReturn):int ;

    /**
     * 更新接口状态.
     *
     * @param int $id
     * @param int $status  接口状态：审核状态/0:未审核,1:审核通过，4:已删除
     * @return bool
     * @author liangxinyi<liangxinyi@eelly.net>
     */
    public function updatePermissionStatus(int $id,int $status):bool ;

    /**
     * 删除单条记录.
     *
     * @param int $id
     * @return bool
     * @author liangxinyi<liangxinyi@eelly.net>
     * @since   2017-7-18
     * @version   1.0
     */
    public function deletePermission(int $id):bool ;

    /**
     * 删除多条记录.
     *
     * @param array $ids   id数组
     * @return bool
     * @author liangxinyi<liangxinyi@eelly.net>
     * @since   2017-7-18
     */
    public function deletePermissions(array $ids):bool ;

}
