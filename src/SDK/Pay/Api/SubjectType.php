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
use Eelly\SDK\Pay\Service\SubjectTypeInterface;
use Eelly\DTO\SubjectTypeDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class SubjectType implements SubjectTypeInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getSubjectType(int $subjectTypeId): SubjectTypeDTO
    {
        return EellyClient::request('pay/subjecttype', 'getSubjectType', $subjectTypeId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addSubjectType(array $data): bool
    {
        return EellyClient::request('pay/subjecttype', 'addSubjectType', $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateSubjectType(int $subjectTypeId, array $data): bool
    {
        return EellyClient::request('pay/subjecttype', 'updateSubjectType', $subjectTypeId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteSubjectType(int $subjectTypeId): bool
    {
        return EellyClient::request('pay/subjecttype', 'deleteSubjectType', $subjectTypeId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listSubjectTypePage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('pay/subjecttype', 'listSubjectTypePage', $condition, $currentPage, $limit);
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