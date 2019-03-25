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

namespace Eelly\SDK\EellyOldCode\Api;

use Eelly\SDK\EellyClient;

class UserInfo
{
    public function getCreditValue(int $uid): int
    {
        return EellyClient::request('eellyOldCode/userINfo', __FUNCTION__, true, $uid);
    }
}
