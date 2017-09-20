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

class SellerDTO extends AbstractDTO
{
    /**
     * 店铺ID.
     *
     * @var int
     */
    public $storeId;

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
     * 处理状态：0 未处理 1 审核通过 2 审核失败 3 认证过期
     *
     * @var int
     */
    public $status;
}
