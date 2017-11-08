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

use Eelly\DTO\CouponDTO;
use Eelly\SDK\Activity\Service\CouponInterface;
use Eelly\SDK\EellyClient;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class Coupon implements CouponInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getCoupon(int $couponId): CouponDTO
    {
        return EellyClient::request('activity/coupon', 'getCoupon', true, $couponId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addCoupon(array $data): bool
    {
        return EellyClient::request('activity/coupon', 'addCoupon', true, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateCoupon(int $couponId, array $data): bool
    {
        return EellyClient::request('activity/coupon', 'updateCoupon', true, $couponId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteCoupon(int $couponId): bool
    {
        return EellyClient::request('activity/coupon', 'deleteCoupon', true, $couponId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listCouponPage(array $condition = [], int $limit = 10, int $currentPage = 1): array
    {
        return EellyClient::request('activity/coupon', 'listCouponPage', true, $condition, $limit, $currentPage);
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
