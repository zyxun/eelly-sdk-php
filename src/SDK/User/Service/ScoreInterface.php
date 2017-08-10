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

use Eelly\DTO\ScoreDTO;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface ScoreInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getScore(int $ScoreId): ScoreDTO;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addScore(array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateScore(int $ScoreId, array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteScore(int $ScoreId): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listScorePage(array $condition = [], int $limit = 10, int $currentPage = 1): array;
}
