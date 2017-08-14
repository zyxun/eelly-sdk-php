<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */
namespace Eelly\SDK\Store\Service\DTO;

use Eelly\DTO\AbstractDTO;

/**
 * AddressDTO
 *
 * @author wangjiang<wangjiang@eelly.net>
 */
class AddressDTO extends AbstractDTO
{
    /**
     * 店铺地址id
     *
     * @var int
     */
    public $addressId;

    /**
     * 店铺名称.
     *
     * @var string
     */
    public $storeName;

    /**
     * 地址类型 1店铺地址 2退货地址.
     *
     * @var integer
     */
    public $addressType;

    /**
     * 联系人姓名
     *
     * @var string
     */
    public $consignee;

    /**
     * 邮政编码
     *
     * @var string
     */
    public $zipcode;

    /**
     * 详细地址
     *
     * @var string
     */
    public $address;

    /**
     * 手机号
     *
     * @var string
     */
    public $mobile;

    /**
     * 送货类型 1只工作日送货 2只双休日、假日送货 3工作日、双休日或假日均可送货
     *
     * @var integer
     */
    public $deliveryType;
}