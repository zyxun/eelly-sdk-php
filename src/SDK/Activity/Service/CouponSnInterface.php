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

use Eelly\SDK\Activity\DTO\CouponSnDTO;

/**
 * 优惠券.
 * 
 * @author wechan<liweiquan@eelly.com>
 * @since 2017年09月06日
 */
interface CouponSnInterface
{
    /**
     *
     * 根据优惠券信息id获取优惠券编号
     * 
     * @param int $couponId 优惠券信息id
     *
     * @return array 优惠券编号结果集
     * 
     * @requestExample({"couponId":2})
     * @returnExample()
     * 
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     * 
     * @author wechan<liweiquan@eelly.com>
     * @since 2017年09月06日
     */
    public function getCouponSn(int $couponId): array;

    /**
     *
     * 插入优惠券编号信息
     * 
     *
     * @param array $data 优惠券编号数据
     * @param int $data["acoId"] 优惠券信息ID
     * @param int $data["couponSn"] 优惠券编号
     * @param int $data["status"] 优惠券状态：0 未发放 1 已发放 2 冻结
     *
     *
     * @return bool 插入结果
     * 
     * @requestExample({"data":{"acoId":1,"couponSn":123456,"status":0}})
     * @returnExample()
     * 
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     * 
     * @author wechan<liweiquan@eelly.com>
     * @since 2017年09月06日
     */
    public function addCouponSn(array $data): bool;

    /**
     *
     * 更新优惠券编号信息
     * 
     * @param int $couponSnId 优惠券编号id
     * @param array $data 优惠券编号数据
     * @param int $data["acoId"] 优惠券信息ID
     * @param int $data["couponSn"] 优惠券编号
     * @param int $data["status"] 优惠券状态：0 未发放 1 已发放 2 冻结
     *
     *
     * @return bool 更新结果
     * 
     * @requestExample({"data":{"acoId":1,"couponSn":123456,"status":0}})
     * @returnExample()
     * 
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     * 
     * @author wechan<liweiquan@eelly.com>
     * @since 2017年09月06日
     */
    public function updateCouponSn(int $couponSnId, array $data): bool;

    /**
     *
     * 根据优惠券信息id获取优惠券编号
     * 
     * @param int $couponSnId 优惠券信息id
     *
     * @return bool 删除结果
     * 
     * @requestExample({"couponSnId":2})
     * @returnExample()
     * 
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     * 
     * @author wechan<liweiquan@eelly.com>
     * @since 2017年09月06日
     */
    public function deleteCouponSn(int $couponSnId): bool;
}
