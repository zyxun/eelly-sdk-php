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

class BrandException extends LogicException
{
    public const OVER_TRADEMARK = '商标图片不能超过5张';

    public const OVER_CERTIFICATE = '商标证书或使用权证明图片不能超过5张';

    public const HAS_BRANDED = '店铺已通过品牌认证,请勿重复申请';

    public const BEING_BRAND = '资料正在审核中';

    public const BRAND_COMMIT_FAIL = '申请资料提交失败，请稍候再试';

    public const NOT_BUY = '认证服务未购买';
}
