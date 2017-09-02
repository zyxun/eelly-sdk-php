<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Activity\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Activity\Service\CouponThemeInterface;
use Eelly\DTO\CouponThemeDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class CouponTheme implements CouponThemeInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getCouponTheme(int $couponThemeId): CouponThemeDTO
    {
        return EellyClient::request('activity/coupontheme', 'getCouponTheme', $couponThemeId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addCouponTheme(array $data): bool
    {
        return EellyClient::request('activity/coupontheme', 'addCouponTheme', $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateCouponTheme(int $couponThemeId, array $data): bool
    {
        return EellyClient::request('activity/coupontheme', 'updateCouponTheme', $couponThemeId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteCouponTheme(int $couponThemeId): bool
    {
        return EellyClient::request('activity/coupontheme', 'deleteCouponTheme', $couponThemeId);
    }

    /**
     *
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