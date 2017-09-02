<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Log\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Log\Service\ServiceGiveInterface;
use Eelly\DTO\ServiceGiveDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class ServiceGive implements ServiceGiveInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getServiceGive(int $ServiceGiveId): ServiceGiveDTO
    {
        return EellyClient::request('log/servicegive', 'getServiceGive', $ServiceGiveId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addServiceGive(array $data): bool
    {
        return EellyClient::request('log/servicegive', 'addServiceGive', $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateServiceGive(int $ServiceGiveId, array $data): bool
    {
        return EellyClient::request('log/servicegive', 'updateServiceGive', $ServiceGiveId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteServiceGive(int $ServiceGiveId): bool
    {
        return EellyClient::request('log/servicegive', 'deleteServiceGive', $ServiceGiveId);
    }

    /**
     *
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