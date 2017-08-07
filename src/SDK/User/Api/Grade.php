<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\User\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\User\Service\GradeInterface;
use Eelly\DTO\GradeDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class Grade implements GradeInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getGrade(int $GradeId): GradeDTO
    {
        return EellyClient::request('user/grade', 'getGrade', $GradeId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addGrade(array $data): bool
    {
        return EellyClient::request('user/grade', 'addGrade', $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateGrade(int $GradeId,array $data): bool
    {
        return EellyClient::request('user/grade', 'updateGrade', $GradeId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteGrade(int $GradeId): bool
    {
        return EellyClient::request('user/grade', 'deleteGrade', $GradeId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listGradePage(array $condition = [],int $limit = 10,int $currentPage = 1): array
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