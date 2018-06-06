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
    public function updatePlan(int $planId, int $isPay, int $roomSize): bool
    {
        return EellyClient::request('live/livePlan', __FUNCTION__, true, $planId, $isPay, $roomSize);
    }
}