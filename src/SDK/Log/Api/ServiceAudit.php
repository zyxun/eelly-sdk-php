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
use Eelly\SDK\Log\Service\ServiceAuditInterface;
use Eelly\DTO\ServiceAuditDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class ServiceAudit implements ServiceAuditInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getServiceAudit(int $ServiceAuditId): ServiceAuditDTO
    {
        return EellyClient::request('log/serviceaudit', 'getServiceAudit', $ServiceAuditId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addServiceAudit(array $data): bool
    {
        return EellyClient::request('log/serviceaudit', 'addServiceAudit', $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateServiceAudit(int $ServiceAuditId, array $data): bool
    {
        return EellyClient::request('log/serviceaudit', 'updateServiceAudit', $ServiceAuditId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteServiceAudit(int $ServiceAuditId): bool
    {
        return EellyClient::request('log/serviceaudit', 'deleteServiceAudit', $ServiceAuditId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listServiceAuditPage(array $condition = [], int $limit = 10, int $currentPage = 1): array
    {
        return EellyClient::request('log/serviceaudit', 'listServiceAuditPage', $condition, $limit, $currentPage);
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