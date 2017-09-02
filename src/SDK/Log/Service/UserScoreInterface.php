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

use Eelly\DTO\UserScoreDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface UserScoreInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getUserScore(int $UserScoreId): UserScoreDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addUserScore(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateUserScore(int $UserScoreId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteUserScore(int $UserScoreId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listUserScorePage(array $condition = [], int $limit = 10, int $currentPage = 1): array;


}