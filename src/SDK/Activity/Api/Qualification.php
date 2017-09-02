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
use Eelly\SDK\Activity\Service\QualificationInterface;
use Eelly\DTO\QualificationDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class Qualification implements QualificationInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getQualification(int $qualificationId): QualificationDTO
    {
        return EellyClient::request('activity/qualification', 'getQualification', $qualificationId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addQualification(array $data): bool
    {
        return EellyClient::request('activity/qualification', 'addQualification', $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateQualification(int $qualificationId, array $data): bool
    {
        return EellyClient::request('activity/qualification', 'updateQualification', $qualificationId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteQualification(int $qualificationId): bool
    {
        return EellyClient::request('activity/qualification', 'deleteQualification', $qualificationId);
    }

    /**
     *
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