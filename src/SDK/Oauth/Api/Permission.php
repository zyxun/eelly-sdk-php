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
use Eelly\SDK\Oauth\Service\DTO\PermissionDTO;
use Eelly\SDK\Oauth\Service\PermissionInterface;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class Permission implements PermissionInterface
{
    /**
     * 获得权限接口列表.
     *
     * @return array
     *
     * @since   2017-7-17
     */
    public function listPermission(): array
    {
        return EellyClient::request('oauth/permissionserver', 'listPermission');
    }

    /**
     * 更新接口数据.
     *
     * @param int    $id                                 接口id
     * @param array  $permission                         接口基本信息
     * @param int    $permission['service_id']           服务ID
     * @param string $permission['hash_name']            用于查询的唯一hash值
     * @param string $permission['perm_name']            接口名
     * @param array  $permissionRequest                  接口请求数据
     * @param string $permissionRequest['type']          参数类型
     * @param string $permissionRequest['comment']       参数注释
     * @param array  $permissionReturn                   接口返回数据
     * @param string $permissionReturn['dto_name']       DTO类名
     * @param string $permissionReturn['return_example'] 返回示例值(json字符串)
     *
     * @return array
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since   2017-7-17
     */
    public function updatePermission(int $id, array $permission, array $permissionRequest, array $permissionReturn): array
    {
        return EellyClient::request('oauth/permissionserver', 'updatePermission', $id, $permission, $permissionRequest, $permissionReturn);
    }

    /**
     * 展示编辑接口的内容.
     *
     * @param int $id
     *
     * @return array
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     */
    public function getPermission(int $id): PermissionDTO
    {
        return EellyClient::request('oauth/permissionserver', 'getPermission', $id);
    }

    /**
     * 添加接口.
     *
     * @param int    $id                                 接口id
     * @param array  $permission                         接口基本信息
     * @param int    $permission['service_id']           服务ID
     * @param string $permission['hash_name']            用于查询的唯一hash值
     * @param string $permission['perm_name']            接口名
     * @param array  $permissionRequest                  接口请求数据
     * @param string $permissionRequest['type']          参数类型
     * @param string $permissionRequest['comment']       参数注释
     * @param array  $permissionReturn                   接口返回数据
     * @param string $permissionReturn['dto_name']       DTO类名
     * @param string $permissionReturn['return_example'] 返回示例值(json字符串)
     *
     * @return array
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since   2017-7-18
     */
    public function addPermission(array $permission, array $permissionRequest, array $permissionReturn): array
    {
        return EellyClient::request('oauth/permissionserver', 'addPermission', $permission, $permissionRequest, $permissionReturn);
    }

    /**
     * 更新接口状态.
     *
     * @param int $id
     * @param int $status 接口状态：审核状态/0:未审核,1:审核通过，4:已删除
     *
     * @return array
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     */
    public function updatePermissionStatus(int $id, int $status): array
    {
        return EellyClient::request('oauth/permissionserver', 'updatePermissionStatus', $id, $status);
    }

    /**
     * 删除单条记录.
     *
     * @param int $id
     *
     * @return array
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since   2017-7-18
     */
    public function deletePermission(int $id): array
    {
        return EellyClient::request('oauth/permissionserver', 'deletePermission', $id);
    }

    /**
     * 删除多条记录.
     *
     * @param array $ids id数组
     *
     * @return array
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since   2017-7-18
     */
    public function deletePermissions(array $ids): array
    {
        return EellyClient::request('oauth/permissionserver', 'deletePermissions', $ids);
    }
}
