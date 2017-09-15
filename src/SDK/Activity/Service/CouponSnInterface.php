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

use Eelly\DTO\CouponSnDTO;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface CouponSnInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getCouponSn(int $couponSnId): CouponSnDTO;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addCouponSn(array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateCouponSn(int $couponSnId, array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteCouponSn(int $couponSnId): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listCouponSnPage(array $condition = [], int $limit = 10, int $currentPage = 1): array;
}
