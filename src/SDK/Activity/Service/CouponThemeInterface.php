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
 * 优惠券主题参数.
 * 
 * @author wechan<liweiquan@eelly.net>
 */
interface CouponThemeInterface
{
    /**
     * 获取生意圈主题信息
     * 
     * @param int $couponThemeId 优惠券主题ID
     *
     * @return array 优惠券主题结果集
     * 
     * @requestExample({"couponThemeId": 1})
     * @returnExample()
     * 
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年10月17日
     */
    public function getCouponTheme(int $couponThemeId): array;

    /**
     * 
     * 新增优惠券主题信息
     * 
     *
     * @param array $data 优惠券主题数据集
     * @param string $data["name"] 主题名称
     * @param string $data["image"] 主题背景图
     * @param string $data["css"] 主题样式
     *
     *
     * @return array 活动商品结果集
     * 
     * @requestExample({"data":{"name":"21313","image":"hahahaha","css":"{\"hahahah\"}"}})
     * @returnExample()
     * 
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年10月17日
     */
    public function addCouponTheme(array $data): bool;

    /**
     * 
     * 更新优惠券主题信息
     * 
     *
     * @param int $couponThemeId 优惠券主题ID
     * @param array $data 优惠券主题数据集
     * @param string $data["name"] 参数名称
     * @param string $data["image"] 主题背景图
     * @param string $data["css"] 主题样式
     *
     *
     * @return array 活动商品结果集
     * 
     * @requestExample({"couponThemeId":1,"data":{"name":"21313","image":"hahahaha","css":"{\"hahahah\"}"}})
     * @returnExample()
     * 
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年10月17日
     */
    public function updateCouponTheme(int $couponThemeId, array $data): bool;

    /**
     * 删除优惠券主题信息
     * 
     * @param int $couponThemeId 优惠券主题ID
     *
     * @return array 优惠券主题结果集
     * 
     * @requestExample({"couponThemeId": 1})
     * @returnExample()
     * 
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年10月17日
     */
    public function deleteCouponTheme(int $couponThemeId): bool;
}
