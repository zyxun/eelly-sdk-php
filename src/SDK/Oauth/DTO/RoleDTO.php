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

namespace Eelly\SDK\Oauth\DTO;

use Eelly\DTO\AbstractDTO;

class RoleDTO extends AbstractDTO
{
    /**
     * 客户端ID.
     *
     * @var int
     */
    public $roleId;

    /**
     * 角色名称.
     *
     * @var string
     */
    public $roleName;

    /**
     * 默认权限.
     *
     * @var string
     */
    public $defaultPermission;
}
