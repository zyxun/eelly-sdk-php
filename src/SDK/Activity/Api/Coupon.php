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
use Eelly\SDK\Activity\Service\CouponInterface;
use Eelly\SDK\Activity\DTO\CouponDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Coupon implements CouponInterface
{
    /**
     * 获取优惠券信息.
     *
     * @param int $couponId 优惠券id
     *
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     *
     * @return CouponDTO 优惠券结果集
     *                   s
     * @requestExample({"couponId": 1})
     * @returnExample({"data":{"couponId":2,"storeId":148086,"name":"优惠券名称","amount":"100","limitAmount":1000,"limitTimes":1,"issued_quantity":"1","startTime":1444444444,"endTime":1555555555,"actId":1,"status":"1","issueFlag":1},"returnType":"Eelly\\SDK\\Activity\\DTO\\CouponDTO"})
     *
     * @author wechan<liweiquan@eelly.com>
     *
     * @since 2017年09月05日
     */
    public function getCoupon(int $couponId): CouponDTO
    {
        return EellyClient::request('activity/coupon', __FUNCTION__, true, $couponId);
    }

    /**
     * 获取优惠券信息.
     *
     * @param int $couponId 优惠券id
     *
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     *
     * @return CouponDTO 优惠券结果集
     *                   s
     * @requestExample({"couponId": 1})
     * @returnExample({"data":{"couponId":2,"storeId":148086,"name":"优惠券名称","amount":"100","limitAmount":1000,"limitTimes":1,"issued_quantity":"1","startTime":1444444444,"endTime":1555555555,"actId":1,"status":"1","issueFlag":1},"returnType":"Eelly\\SDK\\Activity\\DTO\\CouponDTO"})
     *
     * @author wechan<liweiquan@eelly.com>
     *
     * @since 2017年09月05日
     */
    public function getCouponAsync(int $couponId)
    {
        return EellyClient::request('activity/coupon', __FUNCTION__, false, $couponId);
    }

    /**
     * 添加优惠券信息.
     *
     * @param array  $data                    优惠券数据
     * @param string $data['storeId']         店铺id
     * @param string $data['name']            优惠券名称
     * @param int    $data['amount']          优惠券金额
     * @param int    $data['limit_amount']    最小使用金额
     * @param int    $data['limit_times']     单人限领次数：-1 无限制
     * @param int    $data['issued_quantity'] 发放数量限制：-1 无限制
     * @param int    $data['start_time']      使用开始时间
     * @param int    $data['end_time']        使用结束时间
     * @param int    $data['act_id']          优惠券主题ID
     * @param int    $data['status']          有效状态：0 无效 1 有效
     * @param int    $data['issue_flag']      发放方式：1 买家主动领取 2 卖家手动发放 4 系统自动发放
     * @param int    $data['created_time']    添加时间
     *
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     *
     * @return bool 添加优惠券结果
     * @requestExample({"storeId":"148086","name":"优惠券名称","amount":100,"limitAmount":"1000","limitTimes":1,"issuedQuantity":1,"startTime":1444444444,"endTime":1555555555,"actId":1,"status":1,"issueFlag":1})
     * @returnExample({"data":true,"returnType":"boolean"})
     *
     * @author wechan<liweiquan@eelly.com>
     *
     * @since 2017年09月05日
     */
    public function addCoupon(array $data): bool
    {
        return EellyClient::request('activity/coupon', __FUNCTION__, true, $data);
    }

    /**
     * 添加优惠券信息.
     *
     * @param array  $data                    优惠券数据
     * @param string $data['storeId']         店铺id
     * @param string $data['name']            优惠券名称
     * @param int    $data['amount']          优惠券金额
     * @param int    $data['limit_amount']    最小使用金额
     * @param int    $data['limit_times']     单人限领次数：-1 无限制
     * @param int    $data['issued_quantity'] 发放数量限制：-1 无限制
     * @param int    $data['start_time']      使用开始时间
     * @param int    $data['end_time']        使用结束时间
     * @param int    $data['act_id']          优惠券主题ID
     * @param int    $data['status']          有效状态：0 无效 1 有效
     * @param int    $data['issue_flag']      发放方式：1 买家主动领取 2 卖家手动发放 4 系统自动发放
     * @param int    $data['created_time']    添加时间
     *
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     *
     * @return bool 添加优惠券结果
     * @requestExample({"storeId":"148086","name":"优惠券名称","amount":100,"limitAmount":"1000","limitTimes":1,"issuedQuantity":1,"startTime":1444444444,"endTime":1555555555,"actId":1,"status":1,"issueFlag":1})
     * @returnExample({"data":true,"returnType":"boolean"})
     *
     * @author wechan<liweiquan@eelly.com>
     *
     * @since 2017年09月05日
     */
    public function addCouponAsync(array $data)
    {
        return EellyClient::request('activity/coupon', __FUNCTION__, false, $data);
    }

    /**
     * 更新优惠券信息.
     *
     * @param int    $couponId                优惠券id
     * @param array  $data                    优惠券数据
     * @param string $data['name']            优惠券名称
     * @param int    $data['amount']          优惠券金额
     * @param int    $data['limit_amount']    最小使用金额
     * @param int    $data['limit_times']     单人限领次数：-1 无限制
     * @param int    $data['issued_quantity'] 发放数量限制：-1 无限制
     * @param int    $data['start_time']      使用开始时间
     * @param int    $data['end_time']        使用结束时间
     * @param int    $data['act_id']          优惠券主题ID
     * @param int    $data['status']          有效状态：0 无效 1 有效
     * @param int    $data['issue_flag']      发放方式：1 买家主动领取 2 卖家手动发放 4 系统自动发放
     * @param int    $data['created_time']    添加时间
     *
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     *
     * @return bool 更新优惠券结果
     * @requestExample({"couponId":1,"data":{"storeId":"148086","name":"优惠券名称","amount":100,"limitAmount":"1000","limitTimes":1,"issuedQuantity":1,"startTime":1444444444,"endTime":1555555555,"actId":1,"status":1,"issueFlag":1}})
     * @returnExample({"data":true,"returnType":"boolean"})
     *
     * @author wechan<liweiquan@eelly.com>
     *
     * @since 2017年09月05日
     */
    public function updateCoupon(int $couponId, array $data): bool
    {
        return EellyClient::request('activity/coupon', __FUNCTION__, true, $couponId, $data);
    }

    /**
     * 更新优惠券信息.
     *
     * @param int    $couponId                优惠券id
     * @param array  $data                    优惠券数据
     * @param string $data['name']            优惠券名称
     * @param int    $data['amount']          优惠券金额
     * @param int    $data['limit_amount']    最小使用金额
     * @param int    $data['limit_times']     单人限领次数：-1 无限制
     * @param int    $data['issued_quantity'] 发放数量限制：-1 无限制
     * @param int    $data['start_time']      使用开始时间
     * @param int    $data['end_time']        使用结束时间
     * @param int    $data['act_id']          优惠券主题ID
     * @param int    $data['status']          有效状态：0 无效 1 有效
     * @param int    $data['issue_flag']      发放方式：1 买家主动领取 2 卖家手动发放 4 系统自动发放
     * @param int    $data['created_time']    添加时间
     *
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     *
     * @return bool 更新优惠券结果
     * @requestExample({"couponId":1,"data":{"storeId":"148086","name":"优惠券名称","amount":100,"limitAmount":"1000","limitTimes":1,"issuedQuantity":1,"startTime":1444444444,"endTime":1555555555,"actId":1,"status":1,"issueFlag":1}})
     * @returnExample({"data":true,"returnType":"boolean"})
     *
     * @author wechan<liweiquan@eelly.com>
     *
     * @since 2017年09月05日
     */
    public function updateCouponAsync(int $couponId, array $data)
    {
        return EellyClient::request('activity/coupon', __FUNCTION__, false, $couponId, $data);
    }

    /**
     * 删除优惠券信息.
     *
     * @param int $couponId 优惠券id
     *
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     *
     * @return bool 删除优惠券结果
     * @requestExample({"couponId": 1})
     * @returnExample({"data":true,"returnType":"boolean"})
     *
     * @author wechan<liweiquan@eelly.com>
     *
     * @since 2017年09月05日
     */
    public function deleteCoupon(int $couponId): bool
    {
        return EellyClient::request('activity/coupon', __FUNCTION__, true, $couponId);
    }

    /**
     * 删除优惠券信息.
     *
     * @param int $couponId 优惠券id
     *
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     *
     * @return bool 删除优惠券结果
     * @requestExample({"couponId": 1})
     * @returnExample({"data":true,"returnType":"boolean"})
     *
     * @author wechan<liweiquan@eelly.com>
     *
     * @since 2017年09月05日
     */
    public function deleteCouponAsync(int $couponId)
    {
        return EellyClient::request('activity/coupon', __FUNCTION__, false, $couponId);
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