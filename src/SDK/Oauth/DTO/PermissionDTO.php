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

class PermissionDTO extends AbstractDTO
{
    /**
     * id.
     *
     * @var int
     */
    public $permissionId;

    /**
     * @var int 服务ID
     */
    public $serviceId;

    /**
     * @var string 用于查询的唯一hash值
     */
    public $hashName;

    /**
     * @var string 接口名
     */
    public $permName;

    /**
     * @var int 审核状态/0:未审核,1:审核通过，4:已删除
     */
    public $status;

    /**
     * @var string 模块名(namespace)
     */
    public $serviceName;

    /**
     * @var string 服务名(classname)
     */
    public $moduleName;

    /**
     * @var int 创建时间
     */
    public $createdTime;
}
