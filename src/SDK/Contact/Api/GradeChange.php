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
use Eelly\SDK\Contact\Service\GradeChangeInterface;
use Eelly\DTO\GradeChangeDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class GradeChange implements GradeChangeInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getGradeChange(int $gradeChangeId): GradeChangeDTO
    {
        return EellyClient::request('contact/gradechange', 'getGradeChange', $gradeChangeId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addGradeChange(array $data): bool
    {
        return EellyClient::request('contact/gradechange', 'addGradeChange', $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateGradeChange(int $gradeChangeId, array $data): bool
    {
        return EellyClient::request('contact/gradechange', 'updateGradeChange', $gradeChangeId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteGradeChange(int $gradeChangeId): bool
    {
        return EellyClient::request('contact/gradechange', 'deleteGradeChange', $gradeChangeId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listGradeChangePage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('contact/gradechange', 'listGradeChangePage', $condition, $currentPage, $limit);
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