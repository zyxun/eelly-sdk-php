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

namespace Eelly\SDK\EellyOldCode\Api\Common;

use Eelly\SDK\EellyClient;

/**
 * Class MallSetting
 * @package Eelly\SDK\EellyOldCode\Api\Member
 */
class MallSetting
{
    /**
     * 获取登录页广告
     *
     * @return mixed
     *
     * @author zhangyangxun
     * @since 2018-12-18
     */
    public function getLoginAd()
    {
        return EellyClient::request('eellyOldCode/Common/MallSetting', __FUNCTION__, true);
    }
}
