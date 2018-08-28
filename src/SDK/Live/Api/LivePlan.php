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
use Eelly\SDK\Live\Service\LivePlanInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class LivePlan implements LivePlanInterface
{
    /**
     * 设置计划状态.
     *
     * @param int $planId
     * @param int $status
     *
     * @return bool
     */
    public function setStatus(int $planId, int $status): bool
    {
        return EellyClient::request('live/livePlan', 'setStatus', true, $planId, $status);
    }

    /**
     * 设置计划状态.
     *
     * @param int $planId
     * @param int $status
     *
     * @return bool
     */
    public function setStatusAsync(int $planId, int $status)
    {
        return EellyClient::request('live/livePlan', 'setStatus', false, $planId, $status);
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

    /**
     * {@inheritdoc}
     */
    public function updatePlan(int $planId, int $isPay, int $roomSize, int $liveType): bool
    {
        return EellyClient::request('live/livePlan', __FUNCTION__, true, $planId, $isPay, $roomSize, $liveType);
    }

    /**
     * 返回直播各个场次对应的时间文本内容
     *
     * @return string
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.08.22
     */
    public function getLivePlanContent(): string
    {
        return EellyClient::request('live/livePlan', __FUNCTION__, true);
    }

    /**
     * {@inheritdoc}
     */
    public function getLivePlanContentAsync(): string
    {
        return EellyClient::request('live/livePlan', __FUNCTION__, false);
    }
}