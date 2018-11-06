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

namespace Eelly\SDK\User\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\User\Service\UserInfoInterface;

/**
 * Class UserInfo.
 *
 * @author hehui<runphp@dingtalk.com>
 */
class UserInfo implements UserInfoInterface
{
    /**
     * {@inheritdoc}
     */
    public function getOne(int $userId): array
    {
        return EellyClient::request('user/userInfo', __FUNCTION__, true, $userId);
    }

    /**
     * {@inheritdoc}
     */
    public function getList(array $userIds): array
    {
        return EellyClient::request('user/userInfo', __FUNCTION__, true, $userIds);
    }
}
