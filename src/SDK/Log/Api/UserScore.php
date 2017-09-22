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

namespace Eelly\SDK\Log\Api;

use Eelly\DTO\UserScoreDTO;
use Eelly\SDK\EellyClient;
use Eelly\SDK\Log\Service\UserScoreInterface;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class UserScore implements UserScoreInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getUserScore(int $UserScoreId): UserScoreDTO
    {
        return EellyClient::request('log/userscore', 'getUserScore', $UserScoreId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addUserScore(array $data): bool
    {
        return EellyClient::request('log/userscore', 'addUserScore', $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateUserScore(int $UserScoreId, array $data): bool
    {
        return EellyClient::request('log/userscore', 'updateUserScore', $UserScoreId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteUserScore(int $UserScoreId): bool
    {
        return EellyClient::request('log/userscore', 'deleteUserScore', $UserScoreId);
    }

    /**
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
