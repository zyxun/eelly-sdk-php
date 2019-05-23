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

namespace Eelly\SDK\Im\Service;

/**
 * Interface TeamStatsInterface.
 *
 * @author zhangyangxun
 */
interface TeamStatsInterface
{
    /**
     * 后台统计店主群
     *
     * @param array $condition
     * @return array
     * @author zhangyangxun
     * @since 2019/5/23
     */
    public function getBuyerTeamStat(array $condition = []): array ;
}
