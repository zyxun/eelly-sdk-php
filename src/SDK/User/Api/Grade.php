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

use Eelly\DTO\GradeDTO;
use Eelly\SDK\EellyClient;
use Eelly\SDK\User\Service\GradeInterface;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class Grade implements GradeInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getGrade(int $GradeId): GradeDTO
    {
        return EellyClient::request('user/grade', 'getGrade', $GradeId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addGrade(array $data): bool
    {
        return EellyClient::request('user/grade', 'addGrade', $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateGrade(int $GradeId, array $data): bool
    {
        return EellyClient::request('user/grade', 'updateGrade', $GradeId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteGrade(int $GradeId): bool
    {
        return EellyClient::request('user/grade', 'deleteGrade', $GradeId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listGradePage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('user/grade', 'listGradePage', $condition, $limit, $currentPage);
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
