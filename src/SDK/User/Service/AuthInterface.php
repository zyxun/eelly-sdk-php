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

use Eelly\DTO\AuthDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface AuthInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getAuth(int $AuthId): AuthDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addAuth(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateAuth(int $AuthId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteAuth(int $AuthId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listAuthPage(array $condition = [], int $limit = 10, int $currentPage = 1): array;


}