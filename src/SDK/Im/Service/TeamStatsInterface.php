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

use Eelly\DTO\UidDTO;

/**
 * Interface TeamStatsInterface.
 *
 * @author zhangyangxun
 */
interface TeamStatsInterface
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
    public function updateStats(array $data, array $extend = []): bool ;
}
