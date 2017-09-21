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

namespace Eelly\SDK\Service\Api;

use Eelly\DTO\UidDTO;
use Eelly\SDK\EellyClient;
use Eelly\SDK\Service\DTO\ServiceDTO;
use Eelly\SDK\Service\Service\ServiceInterface;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class Service implements ServiceInterface
{

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getService(int $serviceId): ServiceDTO
    {
        return EellyClient::request('service/Service', 'getService', $serviceId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addService(array $data, UidDTO $user = null): bool
    {
        return EellyClient::request('service/Service', 'addService', $data, $user);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateService(int $serviceId, array $data, UidDTO $user = null): bool
    {
        return EellyClient::request('service/Service', 'updateService', $serviceId, $data, $user);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listServicePage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('service/Service', 'listServicePage', $condition, $currentPage, $limit);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listBuyerServicePage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('service/Service', 'listServicePage', $condition, $currentPage, $limit);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listSellerServicePage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('service/Service', 'listServicePage', $condition, $currentPage, $limit);
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
