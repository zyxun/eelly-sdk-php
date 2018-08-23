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

namespace Eelly\SDK\EellyOldCode\Api\Active;

use Eelly\SDK\EellyClient;

/**
 * Class CouponService.
 *
 * var/eelly-old-code/modules/Active/Service/CouponService.php
 *
 */
class Coupon
{
    /**
     * 根据传过来的订单id，返回对应可以使用的优惠卷列表 (小程序)
     *
     * @param float $money  订单金额
     * @param int $storeId 店铺id
     * @param int $userId 登录的用户ID
     * @return array
     *
     * @since 2018.04.13
     */
    public function getOrderCouponList(float $money, int $storeId, int $userId = 0)
    {
        return EellyClient::request('eellyOldCode/Active/Coupon/Coupon', __FUNCTION__, true, $money, $storeId, $userId);
    }
}
