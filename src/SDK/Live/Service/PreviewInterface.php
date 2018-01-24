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

namespace Eelly\SDK\Live\Service;

/**
 * 直播预告.
 *
 * @author hehui<hehui@eelly.net>
 */
interface PreviewInterface
{
    /**
     * 设置直播时间.
     *
     * @param int $liveId 直播id
     * @param int $time   直播开始时间
     *
     * @return bool
     */
    public function setStartTime(int $liveId, int $time): bool;
}
