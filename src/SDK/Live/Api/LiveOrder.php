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

use Eelly\DTO\UidDTO;
use Eelly\SDK\EellyClient;
use Eelly\SDK\Live\Service\LiveOrderInterface;

class LiveOrder implements LiveOrderInterface
{
    /**
     * {@inheritdoc}
     */
    public function myAppletLiveOrders(int $liveId, int $type, UidDTO $uidDTO = null): array
    {
        return EellyClient::request('live/liveOrder', __FUNCTION__, true, $liveId, $type);
    }

    /**
     * {@inheritdoc}
     */
    public function appletLiveOrders(int $liveId, int $type): array
    {
        return EellyClient::request('live/liveOrder', __FUNCTION__, true, $liveId, $type);
    }
}
