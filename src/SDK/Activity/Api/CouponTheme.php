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

namespace Eelly\SDK\Activity\Api;

use Eelly\DTO\CouponThemeDTO;
use Eelly\SDK\Activity\Service\CouponThemeInterface;
use Eelly\SDK\EellyClient;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class CouponTheme implements CouponThemeInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getCouponTheme(int $couponThemeId): CouponThemeDTO
    {
        return EellyClient::request('activity/coupontheme', 'getCouponTheme', $couponThemeId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addCouponTheme(array $data): bool
    {
        return EellyClient::request('activity/coupontheme', 'addCouponTheme', $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateCouponTheme(int $couponThemeId, array $data): bool
    {
        return EellyClient::request('activity/coupontheme', 'updateCouponTheme', $couponThemeId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteCouponTheme(int $couponThemeId): bool
    {
        return EellyClient::request('activity/coupontheme', 'deleteCouponTheme', $couponThemeId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listCouponThemePage(array $condition = [], int $limit = 10, int $currentPage = 1): array
    {
        return EellyClient::request('activity/coupontheme', 'listCouponThemePage', $condition, $limit, $currentPage);
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
