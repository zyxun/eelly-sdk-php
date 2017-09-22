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

use Eelly\DTO\QualificationRelDTO;
use Eelly\SDK\Activity\Service\QualificationRelInterface;
use Eelly\SDK\EellyClient;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class QualificationRel implements QualificationRelInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getQualificationRel(int $qualificationRelId): QualificationRelDTO
    {
        return EellyClient::request('activity/qualificationrel', 'getQualificationRel', $qualificationRelId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addQualificationRel(array $data): bool
    {
        return EellyClient::request('activity/qualificationrel', 'addQualificationRel', $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateQualificationRel(int $qualificationRelId, array $data): bool
    {
        return EellyClient::request('activity/qualificationrel', 'updateQualificationRel', $qualificationRelId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteQualificationRel(int $qualificationRelId): bool
    {
        return EellyClient::request('activity/qualificationrel', 'deleteQualificationRel', $qualificationRelId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listQualificationRelPage(array $condition = [], int $limit = 10, int $currentPage = 1): array
    {
        return EellyClient::request('activity/qualificationrel', 'listQualificationRelPage', $condition, $limit, $currentPage);
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
