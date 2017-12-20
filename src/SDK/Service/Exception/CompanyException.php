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

namespace Eelly\SDK\Service\Exception;

use Eelly\Exception\LogicException;

class CompanyException extends LogicException
{
    public const OVER_BUSINESS_LICENSE = '营业执照图片不能超过5张';

    public const OVER_COMPANY_PHOTO = '企业实拍图片不能超过5张';

    public const NOT_BUY = '认证服务未购买';

    public const BRAND_COMMIT_FAIL = '申请资料提交失败，请稍候再试';
}
