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

namespace Eelly\SDK\Pay\Api;

use Eelly\DTO\SubjectAdjustDTO;
use Eelly\SDK\EellyClient;
use Eelly\SDK\Pay\Service\SubjectAdjustInterface;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class SubjectAdjust implements SubjectAdjustInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getSubjectAdjust(int $subjectAdjustId): SubjectAdjustDTO
    {
        return EellyClient::request('pay/subjectadjust', 'getSubjectAdjust', $subjectAdjustId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addSubjectAdjust(array $data): bool
    {
        return EellyClient::request('pay/subjectadjust', 'addSubjectAdjust', $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateSubjectAdjust(int $subjectAdjustId, array $data): bool
    {
        return EellyClient::request('pay/subjectadjust', 'updateSubjectAdjust', $subjectAdjustId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteSubjectAdjust(int $subjectAdjustId): bool
    {
        return EellyClient::request('pay/subjectadjust', 'deleteSubjectAdjust', $subjectAdjustId);
    }

    /**
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
