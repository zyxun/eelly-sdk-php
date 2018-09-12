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

namespace Eelly\SDK\EellyOldCode\Api\Member\Address;

use Eelly\SDK\EellyClient;

/**
 * Class Receive.
 *
 * var/eelly-old-code/modules/Member/Service/Address/ReceiveService.php
 *
 */
class Receive
{
    /**
     * 获取小程序用户默认地址
     *
     * @param int $userId 用户id
     *
     * @return array
     */
    public function getMinDefaultAddressByUserId(int $userId)
    {
        return EellyClient::request('eellyOldCode/member/Address/Receive', __FUNCTION__, true, $userId);
    }
}
