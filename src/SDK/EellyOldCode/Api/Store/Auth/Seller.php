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

namespace Eelly\SDK\EellyOldCode\Api\Store\Auth;

use Eelly\SDK\EellyClient;

/**
 * Class Store.
 *
 *  modules/Store/Service/GeneralizeService.php
 *
 */
class Seller
{
    /**
     * 认证状态.
     *
     * 1 未申请认证：立即认证（点击进入资料提交页面）
     * 2 等待审核：审核中（点击进入资料提交成功页面）
     * 3 审核通过：查看认证（点击进入审核通过页面）
     * 4 审核不通过：修改认证申请（点击进入审核未通过页面）
     * 5 认证过期：立即认证（点击进入资料提交页面，且保留上次认证的信息）
     */
    public function apiAuthStatus(int $userId)
    {
        return EellyClient::request('eellyOldCode/store/Auth/Seller', __FUNCTION__, true, $userId);
    }
}
