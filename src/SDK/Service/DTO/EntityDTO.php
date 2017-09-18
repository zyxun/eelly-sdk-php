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

namespace Eelly\SDK\Service\DTO;

use Eelly\DTO\AbstractDTO;

class EntityDTO extends AbstractDTO
{

    /**
     * 店铺ID
     *
     * @var int
     */
    public $storeId;

    /**
     * 真实姓名
     *
     * @var string
     */
    public $name;

    /**
     * 身份证号码
     *
     * @var string
     */
    public $license;

    /**
     * 手机号
     *
     * @var string
     */
    public $mobile;

    /**
     * 地区编码
     *
     * @var int
     */
    public $gbCode;

    /**
     * 商圈ID
     *
     * @var string
     */
    public $districtId;

    /**
     * 市场ID
     *
     * @var string
     */
    public $marketId;

    /**
     * 楼层ID
     *
     * @var string
     */
    public $floorId;

    /**
     * 档口名称
     *
     * @var string
     */
    public $stallName;

    /**
     * 档口号：如 301、301A、301-A
     *
     * @var string
     */
    public $stallNumber;

    /**
     * 租赁合同或使用权凭证照片：JSON格式
     *
     * @var string
     */
    public $images;

    /**
     * 店铺实体自定义ID：0 非自定义
     *
     * @var int
     */
    public $secId;

    /**
     * 街道地址
     *
     * @var string
     */
    public $address;

    /**
     * 处理状态：0 未处理 1 审核通过 2 审核失败 3 认证过期
     *
     * @var int
     */
    public $status;

}
