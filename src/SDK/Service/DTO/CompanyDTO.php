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

class CompanyDTO extends AbstractDTO
{
    /**
     * 店铺id.
     *
     * @var int
     */
    public $storeId;

    /**
     * 服务购买记录ID.
     *
     * @var int
     */
    public $sbId;

    /**
     * 真实姓名.
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
     * 手机号.
     *
     * @var string
     */
    public $mobile;

    /**
     * 企业名称.
     *
     * @var string
     */
    public $company;

    /**
     * 工商注册号.
     *
     * @var string
     */
    public $number;

    /**
     * 营业执照图片地址，最多5张.
     *
     * @var string
     */
    public $businessLicense;

    /**
     * 企业实拍图片地址，最多5张.
     *
     * @var string
     */
    public $companyPhoto;

    /**
     * 处理状态：0 未处理 1 审核通过 2 审核失败 3 认证过期
     *
     * @var int
     */
    public $status;

    /**
     * 创建时间.
     *
     * @var int
     */
    public $createdTime;
}
