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

class EntityCustomDTO extends AbstractDTO
{

    /**
     * 店铺实体自定义id
     *
     * @var int
     */
    public $secId;

    /**
     * 自定义商圈市场
     *
     * @var string
     */
    public $customMarket;

    /**
     * 自定义楼层
     *
     * @var string
     */
    public $customFloor;

    /**
     * 处理状态：0 未处理 1 已处理
     *
     * @var int
     */
    public $status;

}
