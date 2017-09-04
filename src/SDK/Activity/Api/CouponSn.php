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
use Eelly\SDK\Activity\Service\CouponSnInterface;
use Eelly\DTO\CouponSnDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class CouponSn implements CouponSnInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getCouponSn(int $couponSnId): CouponSnDTO
    {
        return EellyClient::request('activity/couponsn', 'getCouponSn', $couponSnId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addCouponSn(array $data): bool
    {
        return EellyClient::request('activity/couponsn', 'addCouponSn', $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateCouponSn(int $couponSnId, array $data): bool
    {
        return EellyClient::request('activity/couponsn', 'updateCouponSn', $couponSnId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteCouponSn(int $couponSnId): bool
    {
        return EellyClient::request('activity/couponsn', 'deleteCouponSn', $couponSnId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listCouponSnPage(array $condition = [], int $limit = 10, int $currentPage = 1): array
    {
        return EellyClient::request('activity/couponsn', 'listCouponSnPage', $condition, $limit, $currentPage);
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