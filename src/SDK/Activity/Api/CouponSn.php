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

use Eelly\DTO\CouponSnDTO;
use Eelly\SDK\Activity\Service\CouponSnInterface;
use Eelly\SDK\EellyClient;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class CouponSn implements CouponSnInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getCouponSn(int $couponSnId): CouponSnDTO
    {
        return EellyClient::request('activity/couponsn', 'getCouponSn', $couponSnId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addCouponSn(array $data): bool
    {
        return EellyClient::request('activity/couponsn', 'addCouponSn', $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateCouponSn(int $couponSnId, array $data): bool
    {
        return EellyClient::request('activity/couponsn', 'updateCouponSn', $couponSnId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteCouponSn(int $couponSnId): bool
    {
        return EellyClient::request('activity/couponsn', 'deleteCouponSn', $couponSnId);
    }

    /**
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
