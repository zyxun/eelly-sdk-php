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

use Eelly\DTO\SubjectDayDTO;
use Eelly\SDK\EellyClient;
use Eelly\SDK\Pay\Service\SubjectDayInterface;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class SubjectDay implements SubjectDayInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getSubjectDay(int $subjectDayId): SubjectDayDTO
    {
        return EellyClient::request('pay/subjectday', 'getSubjectDay', $subjectDayId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addSubjectDay(array $data): bool
    {
        return EellyClient::request('pay/subjectday', 'addSubjectDay', $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateSubjectDay(int $subjectDayId, array $data): bool
    {
        return EellyClient::request('pay/subjectday', 'updateSubjectDay', $subjectDayId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteSubjectDay(int $subjectDayId): bool
    {
        return EellyClient::request('pay/subjectday', 'deleteSubjectDay', $subjectDayId);
    }

    /**
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
