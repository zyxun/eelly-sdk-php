<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Oauth\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Oauth\Service\RoleServerInterface;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class RoleServer implements RoleServerInterface
{

    /**
     * 获得角色列表.
     * @return array
     */
    public function getRoleList(): array
    {
        return EellyClient::request('oauth/roleserver', 'getRoleList');
    }

    /**
     * @param int $id 角色id
     * @param array $data 更新数组
     * @return int 数据库更新返回值
     */
    public function updateRole(int $id,array $data): int
    {
        return EellyClient::request('oauth/roleserver', 'updateRole', $id, $data);
    }

    /**
     * 新增角色
     * @param array $data 数组
     * @return int 数据库新增返回id
     */
    public function addRole(array $data): int
    {
        return EellyClient::request('oauth/roleserver', 'addRole', $data);
    }


}