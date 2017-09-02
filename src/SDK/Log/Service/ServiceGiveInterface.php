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

use Eelly\DTO\ServiceGiveDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface ServiceGiveInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getServiceGive(int $ServiceGiveId): ServiceGiveDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addServiceGive(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateServiceGive(int $ServiceGiveId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteServiceGive(int $ServiceGiveId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listServiceGivePage(array $condition = [], int $limit = 10, int $currentPage = 1): array;


}