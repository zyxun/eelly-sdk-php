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

use Eelly\DTO\StatusDTO;
use Eelly\SDK\EellyClient;
use Eelly\SDK\User\Service\StatusInterface;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class Status implements StatusInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getStatus(int $StatusId): StatusDTO
    {
        return EellyClient::request('user/status', 'getStatus', $StatusId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addStatus(array $data): bool
    {
        return EellyClient::request('user/status', 'addStatus', $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateStatus(int $StatusId, array $data): bool
    {
        return EellyClient::request('user/status', 'updateStatus', $StatusId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteStatus(int $StatusId): bool
    {
        return EellyClient::request('user/status', 'deleteStatus', $StatusId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listStatusPage(array $condition = [], int $limit = 10, int $currentPage = 1): array
    {
        return EellyClient::request('user/status', 'listStatusPage', $condition, $limit, $currentPage);
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
