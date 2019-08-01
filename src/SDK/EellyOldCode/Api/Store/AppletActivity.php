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

namespace Eelly\SDK\EellyOldCode\Api\Store;

use Eelly\SDK\EellyClient;

/**
 * Class AppletActivity.
 */
class AppletActivity
{
    /**
     * 获取店铺开通小程序活动的店铺.
     *
     * @return array
     */
    public function getAppletActivity(): array
    {
        return EellyClient::request('eellyOldCode/store/appletActivity', __FUNCTION__, true);
    }
}
