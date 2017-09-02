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

use Eelly\DTO\ServiceUsedDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface ServiceUsedInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getServiceUsed(int $ServiceUsedId): ServiceUsedDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addServiceUsed(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateServiceUsed(int $ServiceUsedId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteServiceUsed(int $ServiceUsedId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listServiceUsedPage(array $condition = [], int $limit = 10, int $currentPage = 1): array;


}