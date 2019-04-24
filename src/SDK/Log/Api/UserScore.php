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

use Eelly\SDK\EellyClient;
use Eelly\SDK\Log\Service\UserScoreInterface;
use Eelly\DTO\UserScoreDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class UserScore
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getUserScore(int $UserScoreId): UserScoreDTO
    {
        return EellyClient::request('log/userScore', __FUNCTION__, true, $UserScoreId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getUserScoreAsync(int $UserScoreId)
    {
        return EellyClient::request('log/userScore', __FUNCTION__, false, $UserScoreId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addUserScore(array $data): bool
    {
        return EellyClient::request('log/userScore', __FUNCTION__, true, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addUserScoreAsync(array $data)
    {
        return EellyClient::request('log/userScore', __FUNCTION__, false, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateUserScore(int $UserScoreId, array $data): bool
    {
        return EellyClient::request('log/userScore', __FUNCTION__, true, $UserScoreId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateUserScoreAsync(int $UserScoreId, array $data)
    {
        return EellyClient::request('log/userScore', __FUNCTION__, false, $UserScoreId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteUserScore(int $UserScoreId): bool
    {
        return EellyClient::request('log/userScore', __FUNCTION__, true, $UserScoreId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteUserScoreAsync(int $UserScoreId)
    {
        return EellyClient::request('log/userScore', __FUNCTION__, false, $UserScoreId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listUserScorePage(array $condition = [], int $limit = 10, int $currentPage = 1): array
    {
        return EellyClient::request('log/userScore', __FUNCTION__, true, $condition, $limit, $currentPage);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listUserScorePageAsync(array $condition = [], int $limit = 10, int $currentPage = 1)
    {
        return EellyClient::request('log/userScore', __FUNCTION__, false, $condition, $limit, $currentPage);
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