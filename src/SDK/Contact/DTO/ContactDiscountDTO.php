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

namespace Eelly\SDK\Contact\DTO;

/**
 * 折扣DTO.
 *
 * @author 肖俊明<xiaojunming@eelly.net>
 *
 * @since  2017年10月12日
 */
class ContactDiscountDTO
{
    /**
     * 联系人用户ID.
     *
     * @var int
     */
    public $userId;

    /**
     * 联系人所有者用户ID.
     *
     * @var int
     */
    public $ownerId;

    /**
     * 优惠折扣.
     *
     * @var float
     */
    public $discount;

    /**
     * 联系人等级划分, 暂时分为0-4共5个等级.
     *
     * @var int
     */
    public $degree;
}
