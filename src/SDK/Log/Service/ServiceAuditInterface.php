<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Log\Service;

use Eelly\DTO\ServiceAuditDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface ServiceAuditInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getServiceAudit(int $ServiceAuditId): ServiceAuditDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addServiceAudit(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateServiceAudit(int $ServiceAuditId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteServiceAudit(int $ServiceAuditId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listServiceAuditPage(array $condition = [], int $limit = 10, int $currentPage = 1): array;


}