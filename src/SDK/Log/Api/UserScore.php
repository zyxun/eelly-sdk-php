<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Log\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Log\Service\UserScoreInterface;
use Eelly\DTO\UserScoreDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class UserScore implements UserScoreInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getUserScore(int $UserScoreId): UserScoreDTO
    {
        return EellyClient::request('log/userscore', 'getUserScore', $UserScoreId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addUserScore(array $data): bool
    {
        return EellyClient::request('log/userscore', 'addUserScore', $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateUserScore(int $UserScoreId, array $data): bool
    {
        return EellyClient::request('log/userscore', 'updateUserScore', $UserScoreId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteUserScore(int $UserScoreId): bool
    {
        return EellyClient::request('log/userscore', 'deleteUserScore', $UserScoreId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listUserScorePage(array $condition = [], int $limit = 10, int $currentPage = 1): array
    {
        return EellyClient::request('log/userscore', 'listUserScorePage', $condition, $limit, $currentPage);
    }

    /**
     * @return self
     */
    public static function getInstance(): self
    {
        static $instance;
        if (null === $instance) {
            $instance = new self();
        }

        return $instance;
    }
}