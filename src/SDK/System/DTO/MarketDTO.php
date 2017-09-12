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
class MarketDTO extends AbstractDTO
{
    /**
     * 市场ID
     *
     * @var int
     */
    public $marketId;
    
    /**
     * 商圈ID
     *
     * @var int
     */
    public $districtId;
    
    /**
     * 市场名称
     *
     * @var int
     */
    public $marketName;
    
    /**
     * 自定义简称
     *
     * @var string
     */
    public $shortName;
    
    /**
     * 营业开始时间
     *
     * @var string
     */
    public $startTime;
    
    /**
     * 营业结束时间
     *
     * @var string
     */
    public $endTime;
    
    /**
     * 楼层总数
     *
     * @var int
     */
    public $floorTotal;
    
    /**
     * 纬度
     *
     * @var float
     */
    public $latitude;
    
    /**
     * 经度
     *
     * @var float
     */
    public $longitude;
    
    /**
     * 区域ID
     *
     * @var int
     */
    public $gbCode;
    
    /**
     * 详细地址
     *
     * @var string
     */
    public $address;
    
    /**
     * 图片路径
     *
     * @var string
     */
    public $image;
    
    /**
     * 是否开通批发市场网页：0、未开通 1、开通
     *
     * @var int
     */
    public $isOpen;
    
    /**
     * 显示排序
     *
     * @var int
     */
    public $sort;
    
    /**
     * 市场排序
     *
     * @var string
     */
    public $remark;
    
    /**
     * 添加时间
     *
     * @var int
     */
    public $createdTime;
    
}
