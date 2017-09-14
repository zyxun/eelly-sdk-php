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

class GoodsPriceDTO extends AbstractDTO
{
    /**
     * 商品价格历史ID，自增主键.
     *
     * @var int
     */
    public $lgpId;

    /**
     * 商品ID.
     *
     * @var int
     */
    public $goodsId;

    /**
     * 区间起始数量.
     *
     * @var int
     */
    public $quantity;

    /**
     * 商品价格，单位为分.
     *
     * @var int
     */
    public $price;

    /**
     * 价格类型：1 散批 2 拿货 3 打包.
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
