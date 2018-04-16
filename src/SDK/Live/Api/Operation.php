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
use Eelly\SDK\Live\Service\OperationInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Operation implements OperationInterface
{
    /**
     * 启动直播.
     *
     * @param int $liveId
     * @param bool $isOpenLive
     *
     * @return array
     */
    public function startingLive(int $liveId, bool $isOpenLive = false): array
    {
        return EellyClient::request('live/operation', 'startingLive', true, $liveId, $isOpenLive);
    }

    /**
     * 启动直播.
     *
     * @param int $liveId
     * @param bool $isOpenLive
     *
     * @return array
     */
    public function startingLiveAsync(int $liveId, bool $isOpenLive = false)
    {
        return EellyClient::request('live/operation', 'startingLive', false, $liveId, $isOpenLive);
    }

    /**
     *  事件消息通知.
     *
     * @see https://cloud.tencent.com/document/product/267/5957
     *
     * @param string $jsonString
     *
     * @return bool
     */
    public function eventNotify(string $jsonString): bool
    {
        return EellyClient::request('live/operation', 'eventNotify', true, $jsonString);
    }

    /**
     *  事件消息通知.
     *
     * @see https://cloud.tencent.com/document/product/267/5957
     *
     * @param string $jsonString
     *
     * @return bool
     */
    public function eventNotifyAsync(string $jsonString)
    {
        return EellyClient::request('live/operation', 'eventNotify', false, $jsonString);
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