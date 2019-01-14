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

namespace Eelly\SDK\Log\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Log\Service\HandlelogInterface;

/**
 *
 * @author zhangyingdi<zhangyingdi@eelly.net>
 */
class Handlelog implements HandlelogInterface
{
    /**
     * 根据传过来的直播id，返回该直播id的记录总数
     *
     * @param int $liveId  直播id
     * @param int $startTime 开始时间
     * @return int
     *
     * @requestExample({"liveId":426, "startTime":1563552000})
     * @returnExample(16)
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2019.01.10
     */
    public function getLiveNum(int $liveId, int $startTime = 0):int
    {
        return EellyClient::request('log/handlelog', __FUNCTION__, true, $liveId, $startTime);
    }

    /**
     * @inheritdoc
     */
    public function getLiveNumAsync(int $liveId, int $startTime = 0):int
    {
        return EellyClient::request('log/handlelog', __FUNCTION__, false, $liveId, $startTime);
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