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

namespace Eelly\SDK\Oauth\Service\Index\DTO;

use Eelly\SDK\AbstractDTO;

class PermissionDTO extends AbstractDTO
{
    /**
     * id.
     *
     * @var int
     */
    public $permission_id;

    /**
     * @var int 服务ID
     */
    public $service_id;

    /**
     * @var string 用于查询的唯一hash值
     */
    public $hash_name;

    /**
     * @var string 接口名
     */
    public $perm_name;

    /**
     * @var int 审核状态/0:未审核,1:审核通过，4:已删除
     */
    public $status;

    /**
     * @var string 模块名(namespace)
     */
    public $service_name;

    /**
     * @var string 服务名(classname)
     */
    public $module_name;

    /**
     * @var int 创建时间
     */
    public $created_time;

    /**
     * @var string 更新时间
     */
    public $update_time;
}
