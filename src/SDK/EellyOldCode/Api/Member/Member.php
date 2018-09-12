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

namespace Eelly\SDK\EellyOldCode\Api\Member;

use Eelly\SDK\EellyClient;

/**
 * Class Member.
 *
 *  modules/Member/Service/MemberService.php
 *
 * @author zhangyangxun
 */
class Member
{
    /**
     * 获取用户绑定的手机.
     *
     * @param array $userIds
     * @return mixed
     */
    public function getUserBoundMobile(array $userIds)
    {
        return EellyClient::request('eellyOldCode/member/member', __FUNCTION__, true, $userIds);
    }

    /**
     * 根据用户Id获取用户信息.
     *
     * @param number $userId 用户Id
     *
     * @return array
     *
     * @author  何砚文<heyanwen@eelly.net>
     * @author  zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2018.08.23
     */
    public function getInfoById($userId)
    {
        return EellyClient::request('eellyOldCode/member/member', __FUNCTION__, true, $userId);
    }
}
