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