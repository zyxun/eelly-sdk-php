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
interface RoleClientServerInterface
{
    /**
     * 新增角色与客户端对应关系
     * @param array $data
     * @return int
     */
    public function addRoleClient($data):int;

}
