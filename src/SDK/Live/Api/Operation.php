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
use Eelly\DTO\UidDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Operation
{
    /**
     * 启动直播.
     *
     * @param int $liveId
     * @param bool $isOpenLive
     * @param UidDTO|null $uidDTO
     *
     * @return array
     */
    public function startingLive(int $liveId, bool $isOpenLive = false, UidDTO $uidDTO = null): array
    {
        return EellyClient::request('live/operation', 'startingLive', true, $liveId, $isOpenLive, $uidDTO);
    }

    /**
     * 启动直播.
     *
     * @param int $liveId
     * @param bool $isOpenLive
     * @param UidDTO|null $uidDTO
     *
     * @return array
     */
    public function startingLiveAsync(int $liveId, bool $isOpenLive = false, UidDTO $uidDTO = null)
    {
        return EellyClient::request('live/operation', 'startingLive', false, $liveId, $isOpenLive, $uidDTO);
    }

    /**
     * 启动直播.
     *
     * @param int $liveId
     * @param bool $isOpenLive
     *
     * @return array
     *
     * @internal
     */
    public function startingLiveNoLogin(int $liveId, bool $isOpenLive = false): array
    {
        return EellyClient::request('live/operation', 'startingLiveNoLogin', true, $liveId, $isOpenLive);
    }

    /**
     * 启动直播.
     *
     * @param int $liveId
     * @param bool $isOpenLive
     *
     * @return array
     *
     * @internal
     */
    public function startingLiveNoLoginAsync(int $liveId, bool $isOpenLive = false)
    {
        return EellyClient::request('live/operation', 'startingLiveNoLogin', false, $liveId, $isOpenLive);
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
     * 直播推流状态处理
     *
     * @param int     $liveId      直播id
     * @param int     $status      禁播开关
     * @param string  $adminer     操作人
     * @param int     $forbidTime  禁播时间戳
     *
     * @return bool
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2019.05.28
     */
    public function channelManagerLive(int $liveId, int $status, string $adminer = '', int $forbidTime = 300):bool
    {
        return EellyClient::request('live/operation', __FUNCTION__, true, $liveId, $status, $adminer, $forbidTime);
    }

    /**
     * @inheritdoc
     */
    public function channelManagerLiveAsync(int $liveId, int $status, string $adminer = '', int $forbidTime = 300):bool
    {
        return EellyClient::request('live/operation', __FUNCTION__, false, $liveId, $status, $adminer, $forbidTime);
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