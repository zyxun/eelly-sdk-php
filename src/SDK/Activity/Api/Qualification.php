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

namespace Eelly\SDK\Activity\Api;

use Eelly\DTO\QualificationDTO;
use Eelly\SDK\Activity\Service\QualificationInterface;
use Eelly\SDK\EellyClient;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class Qualification implements QualificationInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getQualification(int $qualificationId): QualificationDTO
    {
        return EellyClient::request('activity/qualification', 'getQualification', $qualificationId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addQualification(array $data): bool
    {
        return EellyClient::request('activity/qualification', 'addQualification', $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateQualification(int $qualificationId, array $data): bool
    {
        return EellyClient::request('activity/qualification', 'updateQualification', $qualificationId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteQualification(int $qualificationId): bool
    {
        return EellyClient::request('activity/qualification', 'deleteQualification', $qualificationId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listQualificationPage(array $condition = [], int $limit = 10, int $currentPage = 1): array
    {
        return EellyClient::request('activity/qualification', 'listQualificationPage', $condition, $limit, $currentPage);
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
