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
 * Class Adminpriv.
 *
 *  modules/Member/Service/AdminprivService.php
 *
 * @author zhangyangxun
 */
class Adminpriv
{
    /**
     * 检查是否是管理员.
     *
     * @param  $userId
     *
     * @return mixed
     *
     * @author zhangyangxun
     *
     * @since 2018-12-11
     */
    public function checkIsAdmin($userId)
    {
        return EellyClient::request('eellyOldCode/Member/Adminpriv', __FUNCTION__, true, $userId);
    }
}
