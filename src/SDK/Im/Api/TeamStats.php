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
use Eelly\SDK\Im\Service\TeamStatsInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class TeamStats implements TeamStatsInterface
{
    /**
     * 后台统计店主群
     *
     * @param array $condition
     * @return array
     * @author zhangyangxun
     * @since 2019/5/23
     */
    public function getBuyerTeamStat(array $condition = []): array
    {
        return EellyClient::request('im/teamStats', 'getBuyerTeamStat', true, $condition);
    }

    /**
     * 后台统计店主群
     *
     * @param array $condition
     * @return array
     * @author zhangyangxun
     * @since 2019/5/23
     */
    public function getBuyerTeamStatAsync(array $condition = [])
    {
        return EellyClient::request('im/teamStats', 'getBuyerTeamStat', false, $condition);
    }

    /**
     * @return self
     */
    public static function getInstance(): self
    {
        static $instance;
        if (null === $instance) {
            $instance = new self();
        }

        return $instance;
    }
}