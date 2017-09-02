<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Activity\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Activity\Service\QualificationRelInterface;
use Eelly\DTO\QualificationRelDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class QualificationRel implements QualificationRelInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getQualificationRel(int $qualificationRelId): QualificationRelDTO
    {
        return EellyClient::request('activity/qualificationrel', 'getQualificationRel', $qualificationRelId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addQualificationRel(array $data): bool
    {
        return EellyClient::request('activity/qualificationrel', 'addQualificationRel', $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateQualificationRel(int $qualificationRelId, array $data): bool
    {
        return EellyClient::request('activity/qualificationrel', 'updateQualificationRel', $qualificationRelId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteQualificationRel(int $qualificationRelId): bool
    {
        return EellyClient::request('activity/qualificationrel', 'deleteQualificationRel', $qualificationRelId);
    }

    /**
     *
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