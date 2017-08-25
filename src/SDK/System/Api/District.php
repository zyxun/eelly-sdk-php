<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\System\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\System\Service\DistrictInterface;
use Eelly\DTO\DistrictDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class District implements DistrictInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getDistrict(int $DistrictId): DistrictDTO
    {
        return EellyClient::request('system/district', 'getDistrict', $DistrictId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addDistrict(array $data): bool
    {
        return EellyClient::request('system/district', 'addDistrict', $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateDistrict(int $DistrictId, array $data): bool
    {
        return EellyClient::request('system/district', 'updateDistrict', $DistrictId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteDistrict(int $DistrictId): bool
    {
        return EellyClient::request('system/district', 'deleteDistrict', $DistrictId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listDistrictPage(array $condition = [], int $limit = 10, int $currentPage = 1): array
    {
        return EellyClient::request('system/district', 'listDistrictPage', $condition, $limit, $currentPage);
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