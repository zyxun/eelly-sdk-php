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

use Eelly\DTO\ScoreDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface ScoreInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getScore(int $ScoreId): ScoreDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addScore(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateScore(int $ScoreId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteScore(int $ScoreId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listScorePage(array $condition = [], int $limit = 10, int $currentPage = 1): array;


}