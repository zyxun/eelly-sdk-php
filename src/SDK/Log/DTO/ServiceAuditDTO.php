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

namespace Eelly\SDK\Log\DTO;

use Eelly\DTO\AbstractDTO;

class ServiceAuditDTO extends AbstractDTO
{
    /**
     * 服务审核ID，自增主键.
     *
     * @var int
     */
    public $lsaId;

    /**
     * 服务ID.
     *
     * @var int
     */
    public $serviceId;

    /**
     * 店铺ID.
     *
     * @var int
     */
    public $storeId;

    /**
     * 操作类型：1 审核通过 2 审核失败 3 认证过期
     *
     * @var int
     */
    public $action;

    /**
     * 管理员ID.
     *
     * @var int
     */
    public $adminId;

    /**
     * 管理员名称.
     *
     * @var string
     */
    public $adminName;

    /**
     * 备注：具体操作内容.
     *
     * @var string
     */
    public $remark;

    /**
     * 添加时间.
     *
     * @var int
     */
    public $createdTime;
}
