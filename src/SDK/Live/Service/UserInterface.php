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

namespace Eelly\SDK\Live\Service;

use \SDK\Live\DTO\UserDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
interface UserInterface
{
    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getUser(int $userId): UserDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addUser(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateUser(int $userId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteUser(int $userId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listUserPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;


}