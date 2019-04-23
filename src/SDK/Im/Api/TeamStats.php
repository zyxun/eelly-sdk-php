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
     * 更新群组统计数据
     *
     * @param array $data
     * @param array $extend
     * @return bool
     *
     * @author zhangyangxun
     * @since 2019-04-19
     */
    public function updateStats(array $data, array $extend = []): bool
    {
        return EellyClient::request('im/teamStats', 'updateStats', true, $data, $extend);
    }

    /**
     * 更新群组统计数据
     *
     * @param array $data
     * @param array $extend
     * @return bool
     *
     * @author zhangyangxun
     * @since 2019-04-19
     */
    public function updateStatsAsync(array $data, array $extend = [])
    {
        return EellyClient::request('im/teamStats', 'updateStats', false, $data, $extend);
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