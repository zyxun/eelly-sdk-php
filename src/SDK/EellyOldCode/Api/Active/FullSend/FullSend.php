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

namespace Eelly\SDK\EellyOldCode\Api\Active\FullSend;

use Eelly\SDK\EellyClient;

/**
 * Class FullSendService.
 *
 * var/eelly-old-code/modules/Active/Service/FullSend/FullSendService.php
 */
class FullSend
{
    /**
     * 批量获取满就送信息，用于进货车.
     *
     * ###使用示例
     *
     * ####一般使用方式
     * <code>
     * FullSendService::getInstance()->getActInfoByStoreIds([158252,148086]);
     * </code>
     *
     * @param array $storeIds 店铺ID数组
     *
     * @service
     * > 数据说明
     *   key | value
     *   --------------------|--------------------
     *   status              |    状态码:200 | 700
     *   info                |    提示信息
     *                       |    200: 成功
     *                       |    700: 参数错误
     *   retval              |    $retval
     *
     * > 数据说明
     *   key | value
     *   --------------------|--------------------
     *   user_id             |    string 店铺ID
     *   id                  |    string 活动ID
     *   begin_time          |    string 活动开始时间
     *   end_time            |    string 活动结束时间
     *   order_total_money   |    string 优惠条件
     *   money               |    string 减现金
     *   gift                |    string 送礼品
     *   content             |    string 优惠备注
     *   goods_range         |    string 活动范围
     *   goods_ids           |    string 参加活动商品id
     *   goods_list          |    array $goods_list 参加活动商品id数组
     *   coupon              |    array $coupon 送优惠券
     *
     * > $goods_list 数组说明
     *   key | value
     *   --------------------|--------------------
     *   0                   |    string 商品ID
     *
     * > $coupon 数组说明
     *   key | value
     *   --------------------|--------------------
     *   fullsend_id         |    string 活动ID，对应id
     *   coupons_id          |    string 优惠券ID
     *   coupon_title        |    string 优惠券标题
     *   coupon_usetimes     |    string 优惠券使用次数
     *
     * @return array
     */
    public function getActInfoByStoreIds(array $storeIds)
    {
        return EellyClient::request('eellyOldCode/Active/FullSend/FullSend', __FUNCTION__, true, $storeIds);
    }
}
