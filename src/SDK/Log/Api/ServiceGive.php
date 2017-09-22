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

use Eelly\DTO\ServiceGiveDTO;
use Eelly\SDK\EellyClient;
use Eelly\SDK\Log\Service\ServiceGiveInterface;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class ServiceGive implements ServiceGiveInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getServiceGive(int $ServiceGiveId): ServiceGiveDTO
    {
        return EellyClient::request('log/servicegive', 'getServiceGive', $ServiceGiveId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addServiceGive(array $data): bool
    {
        return EellyClient::request('log/servicegive', 'addServiceGive', $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateServiceGive(int $ServiceGiveId, array $data): bool
    {
        return EellyClient::request('log/servicegive', 'updateServiceGive', $ServiceGiveId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteServiceGive(int $ServiceGiveId): bool
    {
        return EellyClient::request('log/servicegive', 'deleteServiceGive', $ServiceGiveId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listServiceGivePage(array $condition = [], int $limit = 10, int $currentPage = 1): array
    {
        return EellyClient::request('log/servicegive', 'listServiceGivePage', $condition, $limit, $currentPage);
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
