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
use Eelly\SDK\Oauth\Service\RoleClientServerInterface;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class RoleClientServer implements RoleClientServerInterface
{

    /**
     * 新增角色与客户端对应关系
     * @param array $data
     * @return int
     */
    public function addRoleClient($data): int
    {
        return EellyClient::request('oauth/roleclientserver', 'addRoleClient', $data);
    }


}