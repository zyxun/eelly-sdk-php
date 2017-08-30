<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\System\Service;

use Eelly\DTO\DistrictDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface DistrictInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getDistrict(int $DistrictId): DistrictDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addDistrict(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateDistrict(int $DistrictId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteDistrict(int $DistrictId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listDistrictPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;


}