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
use Eelly\SDK\Pay\Service\SubjectDayInterface;
use Eelly\DTO\SubjectDayDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class SubjectDay implements SubjectDayInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getSubjectDay(int $subjectDayId): SubjectDayDTO
    {
        return EellyClient::request('pay/subjectday', 'getSubjectDay', $subjectDayId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addSubjectDay(array $data): bool
    {
        return EellyClient::request('pay/subjectday', 'addSubjectDay', $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateSubjectDay(int $subjectDayId, array $data): bool
    {
        return EellyClient::request('pay/subjectday', 'updateSubjectDay', $subjectDayId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteSubjectDay(int $subjectDayId): bool
    {
        return EellyClient::request('pay/subjectday', 'deleteSubjectDay', $subjectDayId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listSubjectDayPage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('pay/subjectday', 'listSubjectDayPage', $condition, $currentPage, $limit);
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