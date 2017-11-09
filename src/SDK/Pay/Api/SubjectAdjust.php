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
use Eelly\SDK\Pay\Service\SubjectAdjustInterface;
use Eelly\DTO\SubjectAdjustDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class SubjectAdjust implements SubjectAdjustInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getSubjectAdjust(int $subjectAdjustId): SubjectAdjustDTO
    {
        return EellyClient::request('pay/subjectadjust', 'getSubjectAdjust', $subjectAdjustId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addSubjectAdjust(array $data): bool
    {
        return EellyClient::request('pay/subjectadjust', 'addSubjectAdjust', $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateSubjectAdjust(int $subjectAdjustId, array $data): bool
    {
        return EellyClient::request('pay/subjectadjust', 'updateSubjectAdjust', $subjectAdjustId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteSubjectAdjust(int $subjectAdjustId): bool
    {
        return EellyClient::request('pay/subjectadjust', 'deleteSubjectAdjust', $subjectAdjustId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listSubjectAdjustPage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('pay/subjectadjust', 'listSubjectAdjustPage', $condition, $currentPage, $limit);
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