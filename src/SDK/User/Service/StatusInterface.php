<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\User\Service;

use Eelly\DTO\StatusDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface StatusInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getStatus(int $StatusId): StatusDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addStatus(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateStatus(int $StatusId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteStatus(int $StatusId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listStatusPage(array $condition = [], int $limit = 10, int $currentPage = 1): array;


}