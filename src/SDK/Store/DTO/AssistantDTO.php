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

namespace Eelly\SDK\Store\DTO;

use Eelly\DTO\AbstractDTO;

/**
 * StoreDTO.
 *
 * @author zhangzeqiang<zhangzeqiang@eelly.net>
 */
class AssistantDTO extends AbstractDTO
{
    /**
     * 店铺助手ID，自增主键
     *
     * @var int
     */
    public $sas_id;

    /**
     * 店铺ID
     *
     * @var int
     */
    public $store_id;

    /**
     * 助手用户ID
     *
     * @var int
     */
    public $user_id;

    /**
     * 状态：0 禁用 1 正常
     *
     * @var int
     */
    public $status;

    /**
     * 添加时间
     *
     * @var int
     */
    public $created_time;

    /**
     * 修改时间
     *
     * @var timestamp
     */
    public $update_time;

}