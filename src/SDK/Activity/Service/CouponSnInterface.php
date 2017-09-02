<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Activity\Service;

use Eelly\DTO\CouponSnDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface CouponSnInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getCouponSn(int $couponSnId): CouponSnDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addCouponSn(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateCouponSn(int $couponSnId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteCouponSn(int $couponSnId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listCouponSnPage(array $condition = [], int $limit = 10, int $currentPage = 1): array;


}