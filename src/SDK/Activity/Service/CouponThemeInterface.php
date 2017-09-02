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

use Eelly\DTO\CouponThemeDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface CouponThemeInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getCouponTheme(int $couponThemeId): CouponThemeDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addCouponTheme(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateCouponTheme(int $couponThemeId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteCouponTheme(int $couponThemeId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listCouponThemePage(array $condition = [], int $limit = 10, int $currentPage = 1): array;


}