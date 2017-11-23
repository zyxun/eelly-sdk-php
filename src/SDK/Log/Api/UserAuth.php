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
use Eelly\SDK\Log\Service\UserAuthInterface;

class UserAuth implements UserAuthInterface
{
    /**
     * {@inheritdoc}
     */
    public function getUserAuthCount(int $userId, int $startTime, int $endTime = 0): int
    {
        return EellyClient::request('log/userAuth', 'getUserAuthCount', true, $userId, $startTime, $endTime);
    }

    /**
     * {@inheritdoc}
     */
    public function addUserAuth(array $data, int $userId): bool
    {
        return EellyClient::request('log/userAuth', 'addUserAuth', true, $data, $userId);
    }
}
