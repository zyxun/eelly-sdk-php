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

namespace Eelly\SDK\User\Api;

use Eelly\DTO\ScoreDTO;
use Eelly\SDK\EellyClient;
use Eelly\SDK\User\Service\ScoreInterface;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class Score implements ScoreInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getScore(int $ScoreId): ScoreDTO
    {
        return EellyClient::request('user/score', 'getScore', $ScoreId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addScore(array $data): bool
    {
        return EellyClient::request('user/score', 'addScore', $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateScore(int $ScoreId, array $data): bool
    {
        return EellyClient::request('user/score', 'updateScore', $ScoreId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteScore(int $ScoreId): bool
    {
        return EellyClient::request('user/score', 'deleteScore', $ScoreId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listScorePage(array $condition = [], int $limit = 10, int $currentPage = 1): array
    {
        return EellyClient::request('user/score', 'listScorePage', $condition, $limit, $currentPage);
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
