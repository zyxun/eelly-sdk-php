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

use Eelly\SDK\EellyClient;
use Eelly\SDK\Activity\Service\CouponSnInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class CouponSn
{
    /**
     * 根据优惠券信息id获取优惠券编号.
     *
     * @param int $couponId 优惠券信息id
     *
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     *
     * @return array 优惠券编号结果集
     *
     * @requestExample({"couponId":2})
     * @returnExample()
     *
     * @author wechan<liweiquan@eelly.com>
     *
     * @since 2017年09月06日
     */
    public function getCouponSn(int $couponId): array
    {
        return EellyClient::request('activity/couponSn', __FUNCTION__, true, $couponId);
    }

    /**
     * 根据优惠券信息id获取优惠券编号.
     *
     * @param int $couponId 优惠券信息id
     *
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     *
     * @return array 优惠券编号结果集
     *
     * @requestExample({"couponId":2})
     * @returnExample()
     *
     * @author wechan<liweiquan@eelly.com>
     *
     * @since 2017年09月06日
     */
    public function getCouponSnAsync(int $couponId)
    {
        return EellyClient::request('activity/couponSn', __FUNCTION__, false, $couponId);
    }

    /**
     * 插入优惠券编号信息.
     *
     *
     * @param array $data             优惠券编号数据
     * @param int   $data["acoId"]    优惠券信息ID
     * @param int   $data["couponSn"] 优惠券编号
     * @param int   $data["status"]   优惠券状态：0 未发放 1 已发放 2 冻结
     *
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     *
     * @return bool 插入结果
     *
     * @requestExample({"data":{"acoId":1,"couponSn":123456,"status":0}})
     * @returnExample()
     *
     * @author wechan<liweiquan@eelly.com>
     *
     * @since 2017年09月06日
     */
    public function addCouponSn(array $data): bool
    {
        return EellyClient::request('activity/couponSn', __FUNCTION__, true, $data);
    }

    /**
     * 插入优惠券编号信息.
     *
     *
     * @param array $data             优惠券编号数据
     * @param int   $data["acoId"]    优惠券信息ID
     * @param int   $data["couponSn"] 优惠券编号
     * @param int   $data["status"]   优惠券状态：0 未发放 1 已发放 2 冻结
     *
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     *
     * @return bool 插入结果
     *
     * @requestExample({"data":{"acoId":1,"couponSn":123456,"status":0}})
     * @returnExample()
     *
     * @author wechan<liweiquan@eelly.com>
     *
     * @since 2017年09月06日
     */
    public function addCouponSnAsync(array $data)
    {
        return EellyClient::request('activity/couponSn', __FUNCTION__, false, $data);
    }

    /**
     * 更新优惠券编号信息.
     *
     * @param int   $couponSnId       优惠券编号id
     * @param array $data             优惠券编号数据
     * @param int   $data["acoId"]    优惠券信息ID
     * @param int   $data["couponSn"] 优惠券编号
     * @param int   $data["status"]   优惠券状态：0 未发放 1 已发放 2 冻结
     *
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     *
     * @return bool 更新结果
     *
     * @requestExample({"data":{"acoId":1,"couponSn":123456,"status":0}})
     * @returnExample()
     *
     * @author wechan<liweiquan@eelly.com>
     *
     * @since 2017年09月06日
     */
    public function updateCouponSn(int $couponSnId, array $data): bool
    {
        return EellyClient::request('activity/couponSn', __FUNCTION__, true, $couponSnId, $data);
    }

    /**
     * 更新优惠券编号信息.
     *
     * @param int   $couponSnId       优惠券编号id
     * @param array $data             优惠券编号数据
     * @param int   $data["acoId"]    优惠券信息ID
     * @param int   $data["couponSn"] 优惠券编号
     * @param int   $data["status"]   优惠券状态：0 未发放 1 已发放 2 冻结
     *
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     *
     * @return bool 更新结果
     *
     * @requestExample({"data":{"acoId":1,"couponSn":123456,"status":0}})
     * @returnExample()
     *
     * @author wechan<liweiquan@eelly.com>
     *
     * @since 2017年09月06日
     */
    public function updateCouponSnAsync(int $couponSnId, array $data)
    {
        return EellyClient::request('activity/couponSn', __FUNCTION__, false, $couponSnId, $data);
    }

    /**
     * 根据优惠券信息id获取优惠券编号.
     *
     * @param int $couponSnId 优惠券信息id
     *
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     *
     * @return bool 删除结果
     *
     * @requestExample({"couponSnId":2})
     * @returnExample()
     *
     * @author wechan<liweiquan@eelly.com>
     *
     * @since 2017年09月06日
     */
    public function deleteCouponSn(int $couponSnId): bool
    {
        return EellyClient::request('activity/couponSn', __FUNCTION__, true, $couponSnId);
    }

    /**
     * 根据优惠券信息id获取优惠券编号.
     *
     * @param int $couponSnId 优惠券信息id
     *
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     *
     * @return bool 删除结果
     *
     * @requestExample({"couponSnId":2})
     * @returnExample()
     *
     * @author wechan<liweiquan@eelly.com>
     *
     * @since 2017年09月06日
     */
    public function deleteCouponSnAsync(int $couponSnId)
    {
        return EellyClient::request('activity/couponSn', __FUNCTION__, false, $couponSnId);
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