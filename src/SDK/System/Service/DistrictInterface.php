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

namespace Eelly\SDK\System\Service;

use Eelly\DTO\DistrictDTO;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface DistrictInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getDistrict(int $DistrictId): DistrictDTO;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addDistrict(array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateDistrict(int $DistrictId, array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteDistrict(int $DistrictId): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listDistrictPage(array $condition = [], int $limit = 10, int $currentPage = 1): array;
}
