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
 * 视频直播活动获奖结果.
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
interface ActivityResultInterface
{
    /**
     * 更新直播活动获奖结果.
     *
     * @param int $laId 直播活动id
     *
     * @author hehui<hehui@eelly.net>
     */
    public function updateActivityResult(int $laId): array;
}
