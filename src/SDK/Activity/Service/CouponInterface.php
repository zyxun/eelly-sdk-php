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

namespace Eelly\SDK\Activity\Service;

use Eelly\DTO\CouponDTO;

/**
 * 优惠券信息.
 * 
 * @author eellytools<localhost.shell@gmail.com>
 */
interface CouponInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getCoupon(int $couponId): CouponDTO;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addCoupon(array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateCoupon(int $couponId, array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteCoupon(int $couponId): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listCouponPage(array $condition = [], int $limit = 10, int $currentPage = 1): array;
}
