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
use Eelly\SDK\Activity\Service\CouponUserInterface;
use Eelly\DTO\CouponUserDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class CouponUser implements CouponUserInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getCouponUser(int $couponUserId): CouponUserDTO
    {
        return EellyClient::request('activity/couponuser', 'getCouponUser', $couponUserId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addCouponUser(array $data): bool
    {
        return EellyClient::request('activity/couponuser', 'addCouponUser', $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateCouponUser(int $couponUserId, array $data): bool
    {
        return EellyClient::request('activity/couponuser', 'updateCouponUser', $couponUserId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteCouponUser(int $couponUserId): bool
    {
        return EellyClient::request('activity/couponuser', 'deleteCouponUser', $couponUserId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listCouponUserPage(array $condition = [], int $limit = 10, int $currentPage = 1): array
    {
        return EellyClient::request('activity/couponuser', 'listCouponUserPage', $condition, $limit, $currentPage);
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