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

use Eelly\DTO\SecurityDTO;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface SecurityInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getSecurity(int $SecurityId): SecurityDTO;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addSecurity(array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateSecurity(int $SecurityId, array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteSecurity(int $SecurityId): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listSecurityPage(array $condition = [], int $limit = 10, int $currentPage = 1): array;
}
