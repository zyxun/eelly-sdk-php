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
class StoreDTO extends AbstractDTO
{

    /**
     * 店铺id
     * @var int
     */
    public $storeId;

    /**
     * 用户id
     * @var int
     */
    public $userId;

    /**
     * 店铺名
     * @var string
     */
    public $storeName;

    /**
     * 域名：默认domain-店铺ID
     * @var string
     */
    public $domain;

    /**
     * 状态
     * @var int
     */
    public $status;

    /**
     * 店铺logo
     * @var int
     */
    public $logo;

    /**
     * 店铺权重
     * @var int
     */
    public $weight;

    /**
     * 服务认证标志
     * @var int
     */
    public $creditMark;

    /**
     * 添加时间
     * @var int
     */
    public $createdTime;

    /**
     * 更新时间
     * @var int
     */
    public $updateTime;

}