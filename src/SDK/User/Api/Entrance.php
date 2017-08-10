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

namespace Eelly\SDK\User\Api;

use Eelly\DTO\EntranceDTO;
use Eelly\SDK\EellyClient;
use Eelly\SDK\User\Service\EntranceInterface;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class Entrance implements EntranceInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getEntrance(int $EntranceId): EntranceDTO
    {
        return EellyClient::request('user/entrance', 'getEntrance', $EntranceId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addEntrance(array $data): bool
    {
        return EellyClient::request('user/entrance', 'addEntrance', $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateEntrance(int $EntranceId, array $data): bool
    {
        return EellyClient::request('user/entrance', 'updateEntrance', $EntranceId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteEntrance(int $EntranceId): bool
    {
        return EellyClient::request('user/entrance', 'deleteEntrance', $EntranceId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listEntrancePage(array $condition = [], int $limit = 10, int $currentPage = 1): array
    {
        return EellyClient::request('user/entrance', 'listEntrancePage', $condition, $limit, $currentPage);
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
