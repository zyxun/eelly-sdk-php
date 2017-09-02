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
use Eelly\SDK\Activity\Service\CouponInterface;
use Eelly\DTO\CouponDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class Coupon implements CouponInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getCoupon(int $couponId): CouponDTO
    {
        return EellyClient::request('activity/coupon', 'getCoupon', $couponId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addCoupon(array $data): bool
    {
        return EellyClient::request('activity/coupon', 'addCoupon', $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateCoupon(int $couponId, array $data): bool
    {
        return EellyClient::request('activity/coupon', 'updateCoupon', $couponId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteCoupon(int $couponId): bool
    {
        return EellyClient::request('activity/coupon', 'deleteCoupon', $couponId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listCouponPage(array $condition = [], int $limit = 10, int $currentPage = 1): array
    {
        return EellyClient::request('activity/coupon', 'listCouponPage', $condition, $limit, $currentPage);
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