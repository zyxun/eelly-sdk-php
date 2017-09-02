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

use Eelly\DTO\ServiceHandleDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface ServiceHandleInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getServiceHandle(int $ServiceHandleId): ServiceHandleDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addServiceHandle(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateServiceHandle(int $ServiceHandleId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteServiceHandle(int $ServiceHandleId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listServiceHandlePage(array $condition = [], int $limit = 10, int $currentPage = 1): array;


}