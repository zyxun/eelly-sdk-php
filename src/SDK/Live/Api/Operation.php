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

class Operation implements OperationInterface
{
    /**
     * {@inheritdoc}
     */
    public function startingLive(int $liveId): array
    {
        return EellyClient::request('live/operation', __FUNCTION__, true, $liveId);
    }

    /**
     * {@inheritdoc}
     *
     * @param string $jsonString
     *
     * @return bool
     */
    public function eventNotify(string $jsonString): bool
    {
        return EellyClient::request('live/Operation', __FUNCTION__, true, $jsonString);
    }
}
