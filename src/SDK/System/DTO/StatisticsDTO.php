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

namespace Eelly\SDK\System\DTO;

use Eelly\DTO\AbstractDTO;

/**
 * Class StatisticDTO.
 */
class StatisticsDTO extends AbstractDTO
{
    /**
     * 商圈ID.
     *
     * @var int
     */
    public $districtId;

    /**
     * 商圈店铺数.
     *
     * @var int
     */
    public $storeNum;

    /**
     * 商圈商品数.
     *
     * @var int
     */
    public $goodsNum;

    /**
     * 商圈生意圈动态数.
     *
     * @var int
     */
    public $wechatDynamicNum;

    /**
     * 商圈最近7天商品数.
     *
     * @var int
     */
    public $weekGoodsNum;

    /**
     * 商圈最近7天生意圈动态数.
     *
     * @var int
     */
    public $weekWechatDynamicNum;

    /**
     * 商圈店铺最近30天动态PV数.
     *
     * @var int
     */
    public $monthStorePv;

    /**
     * 商圈店铺最近30天访客头像.
     *
     * @var int
     */
    public $monthStorePvAvatars;
}
