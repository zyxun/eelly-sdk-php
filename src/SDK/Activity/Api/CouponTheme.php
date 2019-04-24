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
use Eelly\SDK\Activity\Service\CouponThemeInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class CouponTheme
{
    /**
     * 获取生意圈主题信息.
     *
     * @param int $couponThemeId 优惠券主题ID
     *
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     *
     * @return array 优惠券主题结果集
     *
     * @requestExample({"couponThemeId": 1})
     * @returnExample()
     *
     * @author wechan<liweiquan@eelly.net>
     *
     * @since 2017年10月17日
     */
    public function getCouponTheme(int $couponThemeId): array
    {
        return EellyClient::request('activity/couponTheme', __FUNCTION__, true, $couponThemeId);
    }

    /**
     * 获取生意圈主题信息.
     *
     * @param int $couponThemeId 优惠券主题ID
     *
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     *
     * @return array 优惠券主题结果集
     *
     * @requestExample({"couponThemeId": 1})
     * @returnExample()
     *
     * @author wechan<liweiquan@eelly.net>
     *
     * @since 2017年10月17日
     */
    public function getCouponThemeAsync(int $couponThemeId)
    {
        return EellyClient::request('activity/couponTheme', __FUNCTION__, false, $couponThemeId);
    }

    /**
     * 新增优惠券主题信息.
     *
     *
     * @param array  $data          优惠券主题数据集
     * @param string $data["name"]  主题名称
     * @param string $data["image"] 主题背景图
     * @param string $data["css"]   主题样式
     *
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     *
     * @return array 活动商品结果集
     *
     * @requestExample({"data":{"name":"21313","image":"hahahaha","css":"{\"hahahah\"}"}})
     * @returnExample()
     *
     * @author wechan<liweiquan@eelly.net>
     *
     * @since 2017年10月17日
     */
    public function addCouponTheme(array $data): bool
    {
        return EellyClient::request('activity/couponTheme', __FUNCTION__, true, $data);
    }

    /**
     * 新增优惠券主题信息.
     *
     *
     * @param array  $data          优惠券主题数据集
     * @param string $data["name"]  主题名称
     * @param string $data["image"] 主题背景图
     * @param string $data["css"]   主题样式
     *
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     *
     * @return array 活动商品结果集
     *
     * @requestExample({"data":{"name":"21313","image":"hahahaha","css":"{\"hahahah\"}"}})
     * @returnExample()
     *
     * @author wechan<liweiquan@eelly.net>
     *
     * @since 2017年10月17日
     */
    public function addCouponThemeAsync(array $data)
    {
        return EellyClient::request('activity/couponTheme', __FUNCTION__, false, $data);
    }

    /**
     * 更新优惠券主题信息.
     *
     *
     * @param int    $couponThemeId 优惠券主题ID
     * @param array  $data          优惠券主题数据集
     * @param string $data["name"]  参数名称
     * @param string $data["image"] 主题背景图
     * @param string $data["css"]   主题样式
     *
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     *
     * @return array 活动商品结果集
     *
     * @requestExample({"couponThemeId":1,"data":{"name":"21313","image":"hahahaha","css":"{\"hahahah\"}"}})
     * @returnExample()
     *
     * @author wechan<liweiquan@eelly.net>
     *
     * @since 2017年10月17日
     */
    public function updateCouponTheme(int $couponThemeId, array $data): bool
    {
        return EellyClient::request('activity/couponTheme', __FUNCTION__, true, $couponThemeId, $data);
    }

    /**
     * 更新优惠券主题信息.
     *
     *
     * @param int    $couponThemeId 优惠券主题ID
     * @param array  $data          优惠券主题数据集
     * @param string $data["name"]  参数名称
     * @param string $data["image"] 主题背景图
     * @param string $data["css"]   主题样式
     *
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     *
     * @return array 活动商品结果集
     *
     * @requestExample({"couponThemeId":1,"data":{"name":"21313","image":"hahahaha","css":"{\"hahahah\"}"}})
     * @returnExample()
     *
     * @author wechan<liweiquan@eelly.net>
     *
     * @since 2017年10月17日
     */
    public function updateCouponThemeAsync(int $couponThemeId, array $data)
    {
        return EellyClient::request('activity/couponTheme', __FUNCTION__, false, $couponThemeId, $data);
    }

    /**
     * 删除优惠券主题信息.
     *
     * @param int $couponThemeId 优惠券主题ID
     *
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     *
     * @return array 优惠券主题结果集
     *
     * @requestExample({"couponThemeId": 1})
     * @returnExample()
     *
     * @author wechan<liweiquan@eelly.net>
     *
     * @since 2017年10月17日
     */
    public function deleteCouponTheme(int $couponThemeId): bool
    {
        return EellyClient::request('activity/couponTheme', __FUNCTION__, true, $couponThemeId);
    }

    /**
     * 删除优惠券主题信息.
     *
     * @param int $couponThemeId 优惠券主题ID
     *
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     *
     * @return array 优惠券主题结果集
     *
     * @requestExample({"couponThemeId": 1})
     * @returnExample()
     *
     * @author wechan<liweiquan@eelly.net>
     *
     * @since 2017年10月17日
     */
    public function deleteCouponThemeAsync(int $couponThemeId)
    {
        return EellyClient::request('activity/couponTheme', __FUNCTION__, false, $couponThemeId);
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