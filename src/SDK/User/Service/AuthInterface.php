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

use Eelly\DTO\AuthDTO;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface AuthInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getAuth(int $AuthId): AuthDTO;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addAuth(array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateAuth(int $AuthId, array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteAuth(int $AuthId): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listAuthPage(array $condition = [], int $limit = 10, int $currentPage = 1): array;
}
