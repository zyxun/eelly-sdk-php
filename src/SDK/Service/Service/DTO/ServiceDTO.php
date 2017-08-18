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

namespace Eelly\SDK\Service\Service\DTO;

use Eelly\SDK\AbstractDTO;

class ServiceDTO extends AbstractDTO
{
    /**
     * id.
     *
     * @var int
     */
    public $serviceId;

    /**
     * @var string 服务名称
     */
    public $name;
    
    /**
     * @var int 认证标志值
     */
    public $value;

    /**
     * @var int 服务对象：1 店+(下游买家) 2 厂+(上游卖家)
     */
    public $type;
    
    /**
     * @var int 计数模式：1 合同期内 2 每月 4 每日，全部模式：1+2+4=7
     */
    public $model;
    
    /**
     * @var string 服务对应的主体表
     */
    public $table;
    
    /**
     * @var int 服务状态：1 启用 2 停用 4 删除
     */
    public $status;
    
    /**
     * @var int 创建时间
     */
    public $createdTime;
}
