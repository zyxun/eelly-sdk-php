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

use Eelly\DTO\CouponUserDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface CouponUserInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getCouponUser(int $couponUserId): CouponUserDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addCouponUser(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateCouponUser(int $couponUserId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteCouponUser(int $couponUserId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listCouponUserPage(array $condition = [], int $limit = 10, int $currentPage = 1): array;


}