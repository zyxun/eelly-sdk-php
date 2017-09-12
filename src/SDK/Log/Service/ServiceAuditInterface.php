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

namespace Eelly\SDK\Log\Service;

use Eelly\DTO\ServiceAuditDTO;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface ServiceAuditInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getServiceAudit(int $ServiceAuditId): ServiceAuditDTO;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addServiceAudit(array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateServiceAudit(int $ServiceAuditId, array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteServiceAudit(int $ServiceAuditId): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listServiceAuditPage(array $condition = [], int $limit = 10, int $currentPage = 1): array;
}
