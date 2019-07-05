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

namespace Eelly\SDK\EellyOldCode\Api\Channel;

use Eelly\SDK\EellyClient;

/**
 * Class AppletService.
 *
 * modules/Channel/Service/AppletService.php
 *
 * @author zhangyangxun
 */
class Applet
{
    /**
     * 获取wap站点广告.
     *
     * @return mixed
     *
     * @author zhangyangxun
     *
     * @since 2018-12-26
     */
    public function getWapAd()
    {
        return EellyClient::request('eellyOldCode/Channel/Applet', __FUNCTION__, true);
    }
}
