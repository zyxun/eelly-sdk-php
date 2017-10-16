<?php
declare(strict_types=1);
/**
 * PHP version 5.5
 *
 * @copyright  Copyright (c) 2012-2015 EELLY Inc. (http://www.eelly.com)
 * @link       http://www.eelly.com
 * @license    衣联网版权所有
 */


namespace Eelly\SDK\Contact\DTO;


/**
 * 折扣DTO.
 *
 * @author 肖俊明<xiaojunming@eelly.net>
 * @since  2017年10月12日
 */
class ContactDiscountDTO
{
    /**
     * 联系人用户ID
     *
     * @var int
     */
    public $userId;

    /**
     * 联系人所有者用户ID
     *
     * @var int
     */
    public $ownerId;

    /**
     * 优惠折扣
     *
     * @var float
     */
    public $discount;

    /**
     * 联系人等级划分, 暂时分为0-4共5个等级
     *
     * @var int
     */
    public $degree;
}