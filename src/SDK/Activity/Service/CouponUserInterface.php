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

use Eelly\DTO\CouponUserDTO;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface CouponUserInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getCouponUser(int $couponUserId): CouponUserDTO;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addCouponUser(array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateCouponUser(int $couponUserId, array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteCouponUser(int $couponUserId): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listCouponUserPage(array $condition = [], int $limit = 10, int $currentPage = 1): array;
}
