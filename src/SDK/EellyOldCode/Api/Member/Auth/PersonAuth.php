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

namespace Eelly\SDK\EellyOldCode\Api\Member\Auth;

use Eelly\SDK\EellyClient;

/**
 * Class EnterpriseAuth.
 *
 * var/eelly-old-code/modules/Member/Service/MemberService.php
 *
 * @author sunanzhi <sunanzhi@hotmail.com>
 */
class PersonAuth
{
    /**
     * 获取个人认证信息.
     *
     * @param int $userId 用户id
     *
     * @return array
     *
     * @author sunanzhi <sunanzhi@hotmail.com>
     *
     * @since 2018.9.10
     */
    public function getInfoByUserId(int $userId)
    {
        return EellyClient::request('eellyOldCode/member/Auth/PersonAuth', __FUNCTION__, true, $userId);
    }
}
