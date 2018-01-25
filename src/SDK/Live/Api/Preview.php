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

namespace Eelly\SDK\Live\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Live\Service\PreviewInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Preview implements PreviewInterface
{
    /**
     * 设置直播时间.
     *
     * @param int $liveId 直播id
     * @param int $time   直播开始时间
     *
     * @return bool
     */
    public function setStartTime(int $liveId, int $time): bool
    {
        return EellyClient::request('live/preview', 'setStartTime', true, $liveId, $time);
    }

    /**
     * 设置直播时间.
     *
     * @param int $liveId 直播id
     * @param int $time   直播开始时间
     *
     * @return bool
     */
    public function setStartTimeAsync(int $liveId, int $time)
    {
        return EellyClient::request('live/preview', 'setStartTime', false, $liveId, $time);
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