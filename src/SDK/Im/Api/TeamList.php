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

namespace Eelly\SDK\Im\Api;

use Eelly\SDK\EellyClient;

/**
 * @author shadonTools<localhost.shell@gmail.com>
 */
class TeamList
{
    public static function getCreateTeams(): array
    {
        return EellyClient::requestJson('im/teamList', __FUNCTION__);
    }

    /**
     * 后台分页取店主群.
     *
     * @param array $condition
     * @param int   $page
     * @param int   $limit
     *
     * @throws \ErrorException
     *
     * @return array
     *
     * @author zhangyangxun
     *
     * @since 2019/5/23
     */
    public static function getBuyerTeams(array $condition = [], int $page = 1, int $limit = 20): array
    {
        return EellyClient::requestJson('im/teamList', __FUNCTION__, [
            'condition' => $condition,
            'page'      => $page,
            'limit'     => $limit,
        ]);
    }
}
