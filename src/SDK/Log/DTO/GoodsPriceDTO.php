<?php

declare(strict_types=1);
/**
 * PHP version 7.1
 *
 * @copyright  Copyright (c) 2012-2015 EELLY Inc. (http://www.eelly.com)
 * @link       http://www.eelly.com
 * @license    衣联网版权所有
 */


namespace Eelly\SDK\Log\DTO;


use Eelly\DTO\AbstractDTO;

class GoodsPriceDTO extends AbstractDTO
{
    /**
     * 商品价格历史ID，自增主键
     *
     * @var int
     */
    public $lgpId;

    /**
     * 商品ID
     *
     * @var int
     */
    public $goodsId;

    /**
     * 区间起始数量
     *
     * @var int
     */
    public $quantity;

    /**
     * 商品价格，单位为分
     *
     * @var int
     */
    public $price;

    /**
     * 价格类型：1 散批 2 拿货 3 打包
     *
     * @var int
     */
    public $type;

    /**
     * 添加时间，可用于区分价格批次
     *
     * @var int
     */
    public $createdTime;
}