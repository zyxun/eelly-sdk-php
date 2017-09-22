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

use Eelly\DTO\ServiceAuditDTO;
use Eelly\SDK\EellyClient;
use Eelly\SDK\Log\Service\ServiceAuditInterface;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class ServiceAudit implements ServiceAuditInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getServiceAudit(int $ServiceAuditId): ServiceAuditDTO
    {
        return EellyClient::request('log/serviceaudit', 'getServiceAudit', $ServiceAuditId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addServiceAudit(array $data): bool
    {
        return EellyClient::request('log/serviceaudit', 'addServiceAudit', $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateServiceAudit(int $ServiceAuditId, array $data): bool
    {
        return EellyClient::request('log/serviceaudit', 'updateServiceAudit', $ServiceAuditId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteServiceAudit(int $ServiceAuditId): bool
    {
        return EellyClient::request('log/serviceaudit', 'deleteServiceAudit', $ServiceAuditId);
    }

    /**
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
