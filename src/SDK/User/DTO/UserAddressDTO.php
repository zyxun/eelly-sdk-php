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

namespace Eelly\SDK\User\DTO;

use Eelly\DTO\AbstractDTO;

/**
 * UserAddressDTO.
 *
 * @author zhangzeqiang<zhangzeqiang@eelly.net>
 */
class UserAddressDTO extends AbstractDTO
{
    /**
     * 地址ID.
     *
     * @var int
     */
    public $uaId;

    /**
     * 用户ID.
     *
     * @var int
     */
    public $userId;

    /**
     * 联系人姓名.
     *
     * @var string
     */
    public $consignee;

    /**
     * 地区编码.
     *
     * @var int
     */
    public $gbCode;

    /**
     * 邮政编码.
     *
     * @var int
     */
    public $zipcode;

    /**
     * 详细地址.
     *
     * @var string
     */
    public $address;

    /**
     * 手机号.
     *
     * @var int
     */
    public $mobile;

    /**
     * 联系电话，多个电话用英文逗号分割.
     *
     * @var string
     */
    public $phone;

    /**
     * 送货类型：1 只工作日送货 2 只双休日、假日送货 3 工作日、双休日或假日均可送货.
     *
     * @var int
     */
    public $deliveryType;

    /**
     * 状态标志：0 有效地址 1 默认地址 4 删除.
     *
     * @var int
     */
    public $status;

    /**
     * 添加时间.
     *
     * @var int
     */
    public $createdTime;

    /**
     * 修改时间.
     *
     * @var datetime
     */
    public $updateTime;
}
