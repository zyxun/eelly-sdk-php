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


use Eelly\DTO\AbstractDTO;

/**
 * 等级DTO.
 *
 * @author 肖俊明<xiaojunming@eelly.net>
 * @since  2017年10月12日
 */
class GradeDTO extends AbstractDTO
{
    /**
     * 联系人等级ID，自增主键
     *
     * @var int
     */
    public $cgId;

    /**
     * 等级名称
     *
     * @var int
     */
    public $name;

    /**
     * 店铺ID.
     *
     * @var int
     */
    public $storeId;

    /**
     * 交易金额：单位为分.
     *
     * @var int
     */
    public $tradeMoney;

    /**
     * 是否为默认分组：0 默认分组 1 自定义分组.
     *
     * @var int
     */
    public $isDefault;
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
    /**
     * 是否开启浏览权限：0 关闭 1 开启.
     *
     * @var int
     */
    public $isView;
    /**
     * 是否开启新品浏览权限：0 关闭 1 开启.
     *
     * @var int
     */
    public $isViewNew;
}