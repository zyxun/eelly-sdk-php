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

use Eelly\DTO\AbstractDTO;

class ModuleDTO extends AbstractDTO
{
    /**
     * id.
     *
     * @var int
     */
    public $module_id;

    /**
     * @var string 模块名(namespace)
     */
    public $module_name;

    /**
     * @var int 是否启用/0:未启用,1:启用,2:关闭
     */
    public $status;

    /**
     * @var string 模块域名
     */
    public $domain;

    /**
     * @var int 添加时间
     */
    public $created_time;

    /**
     * @var string 修改时间
     */
    public $update_time;
}
