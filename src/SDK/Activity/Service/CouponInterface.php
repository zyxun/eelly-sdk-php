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

use Eelly\DTO\CouponDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface CouponInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getCoupon(int $couponId): CouponDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addCoupon(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateCoupon(int $couponId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteCoupon(int $couponId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listCouponPage(array $condition = [], int $limit = 10, int $currentPage = 1): array;


}