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

use Eelly\DTO\CouponThemeDTO;

/**
 * 优惠券主题参数.
 * 
 * @author eellytools<localhost.shell@gmail.com>
 */
interface CouponThemeInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getCouponTheme(int $couponThemeId): CouponThemeDTO;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addCouponTheme(array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateCouponTheme(int $couponThemeId, array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteCouponTheme(int $couponThemeId): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listCouponThemePage(array $condition = [], int $limit = 10, int $currentPage = 1): array;
}
