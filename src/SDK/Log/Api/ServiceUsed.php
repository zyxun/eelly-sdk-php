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
use Eelly\SDK\Log\Service\ServiceUsedInterface;
use Eelly\DTO\ServiceUsedDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class ServiceUsed implements ServiceUsedInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getServiceUsed(int $ServiceUsedId): ServiceUsedDTO
    {
        return EellyClient::request('log/serviceused', 'getServiceUsed', $ServiceUsedId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addServiceUsed(array $data): bool
    {
        return EellyClient::request('log/serviceused', 'addServiceUsed', $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateServiceUsed(int $ServiceUsedId, array $data): bool
    {
        return EellyClient::request('log/serviceused', 'updateServiceUsed', $ServiceUsedId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteServiceUsed(int $ServiceUsedId): bool
    {
        return EellyClient::request('log/serviceused', 'deleteServiceUsed', $ServiceUsedId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listServiceUsedPage(array $condition = [], int $limit = 10, int $currentPage = 1): array
    {
        return EellyClient::request('log/serviceused', 'listServiceUsedPage', $condition, $limit, $currentPage);
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