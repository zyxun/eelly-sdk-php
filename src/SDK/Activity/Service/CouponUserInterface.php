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

namespace Eelly\SDK\Activity\Service;

/**
 * 优惠券发放领取.
 *
 *
 * @author wechan<localhost.shell@gmail.com>
 *
 * @since 2017年09月08日
 */
interface CouponUserInterface
{
    /**
     * 获取用户领取的优惠券信息.
     *
     *
     * @param int $userId 用户id
     *
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     *
     * @return array 优惠券发放领取结果集
     *
     * @requestExample({"userId":1})
     * @returnExample()
     *
     * @author wechan<liweiquan@eelly.net>
     *
     * @since 2017年09月08日
     */
    public function getCouponUser(int $userId): array;

    /**
     * 新增领取优惠券.
     *
     * @param array $data               新增优惠券数据
     * @param int   $data["userId"]     用户id
     * @param int   $data["couponSn"]   优惠券编号
     * @param int   $data["issue_flag"] 发放方式：1 买家主动领取 2 卖家手动发放 4 系统自动发放
     *
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     *
     * @return array 优惠券发放领取结果集
     *
     * @requestExample({"data":{"userId":1,"couponSn":123456,"issue_flag":1}})
     * @returnExample()
     *
     * @author wechan<liweiquan@eelly.net>
     *
     * @since 2017年09月08日
     */
    public function addCouponUser(array $data): bool;

    /**
     * 更新领取优惠券状态
     *
     *
     * @param int   $couponUserId   优惠券发放ID
     * @param array $data           更新优惠券数据
     * @param int   $data["status"]
     *
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     *
     * @return array 用户优惠券更新结果集
     *
     * @requestExample({"couponUserId":1,"data":{"status":1}})
     * @returnExample()
     *
     * @author wechan<liweiquan@eelly.net>
     *
     * @since 2017年09月08日
     */
    public function updateCouponUser(int $couponUserId, array $data): bool;
}
