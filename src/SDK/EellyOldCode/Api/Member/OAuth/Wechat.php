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

namespace Eelly\SDK\EellyOldCode\Api\Member\OAuth;

use Eelly\SDK\EellyClient;

/**
 * Class Wechat.
 *
 * modules/Member/Service/OAuth/WechatService.php
 */
class Wechat
{
    public function getAppletInfoByShowFlag(int $showFlag): array
    {
        return EellyClient::request('eellyOldCode/member/oAuth/wechat', __FUNCTION__, true, $showFlag);
    }
}
