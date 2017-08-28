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

namespace Eelly\SDK\System\Api;

use Eelly\DTO\DistrictDTO;
use Eelly\SDK\EellyClient;
use Eelly\SDK\System\Service\DistrictInterface;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class District implements DistrictInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getDistrict(int $DistrictId): DistrictDTO
    {
        return EellyClient::request('system/district', 'getDistrict', $DistrictId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addDistrict(array $data): bool
    {
        return EellyClient::request('system/district', 'addDistrict', $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateDistrict(int $DistrictId, array $data): bool
    {
        return EellyClient::request('system/district', 'updateDistrict', $DistrictId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteDistrict(int $DistrictId): bool
    {
        return EellyClient::request('system/district', 'deleteDistrict', $DistrictId);
    }

    /**
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
