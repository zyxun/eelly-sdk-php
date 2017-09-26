<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Contact\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Contact\Service\GradeInterface;
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
    public function getGrade(int $gradeId): GradeDTO
    {
        return EellyClient::request('contact/grade', 'getGrade', $gradeId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addGrade(array $data): bool
    {
        return EellyClient::request('contact/grade', 'addGrade', $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateGrade(int $gradeId, array $data): bool
    {
        return EellyClient::request('contact/grade', 'updateGrade', $gradeId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteGrade(int $gradeId): bool
    {
        return EellyClient::request('contact/grade', 'deleteGrade', $gradeId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listGradePage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('contact/grade', 'listGradePage', $condition, $currentPage, $limit);
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