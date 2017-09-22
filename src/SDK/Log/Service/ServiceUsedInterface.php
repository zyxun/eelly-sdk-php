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

use Eelly\DTO\ServiceUsedDTO;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface ServiceUsedInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getServiceUsed(int $ServiceUsedId): ServiceUsedDTO;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addServiceUsed(array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateServiceUsed(int $ServiceUsedId, array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteServiceUsed(int $ServiceUsedId): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listServiceUsedPage(array $condition = [], int $limit = 10, int $currentPage = 1): array;
}
