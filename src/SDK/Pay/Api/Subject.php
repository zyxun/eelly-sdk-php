<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Pay\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Pay\Service\SubjectInterface;
use Eelly\DTO\SubjectDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class Subject implements SubjectInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getSubject(int $subjectId): SubjectDTO
    {
        return EellyClient::request('pay/subject', 'getSubject', $subjectId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addSubject(array $data): bool
    {
        return EellyClient::request('pay/subject', 'addSubject', $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateSubject(int $subjectId, array $data): bool
    {
        return EellyClient::request('pay/subject', 'updateSubject', $subjectId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteSubject(int $subjectId): bool
    {
        return EellyClient::request('pay/subject', 'deleteSubject', $subjectId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listSubjectPage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('pay/subject', 'listSubjectPage', $condition, $currentPage, $limit);
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