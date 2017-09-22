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

namespace Eelly\SDK\Service\DTO;

use Eelly\DTO\AbstractDTO;

class ServiceDTO extends AbstractDTO
{

    /**
     * 服务ID
     *
     * @var int
     */
    public $serviceId;

    /**
     * 服务名称
     *
     * @var string
     */
    public $name;

    /**
     * 认证标志值
     *
     * @var int
     */
    public $value;

    /**
     * 服务对象：1 店+(下游买家) 2 厂+(上游卖家)
     *
     * @var int
     */
    public $type;

    /**
     * 计数模式：1 合同期内 2 每月 4 每日，全部模式：1+2+4=7
     *
     * @var int
     */
    public $model;

    /**
     * 服务对应的主体表
     *
     * @var string
     */
    public $table;

    /**
     * 服务状态：1 启用 2 停用 4 删除
     *
     * @var int
     */
    public $status;

}
