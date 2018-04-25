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

class LivePlan implements LivePlanInterface
{
    /**
     * {@inheritdoc}
     */
    public function setStatus(int $planId, int $status): bool
    {
        return EellyClient::request('live/livePlan', __FUNCTION__, true, $planId, $status);
    }

    /**
     * {@inheritdoc}
     */
    public function updatePlan(int $planId, int $isPay, int $roomSize): bool
    {
        return EellyClient::request('live/livePlan', __FUNCTION__, true, $planId, $isPay, $roomSize);
    }
}
