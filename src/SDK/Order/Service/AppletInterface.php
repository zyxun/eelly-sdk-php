<?php
declare(strict_types=1);
/**
 * PHP version 5.5
 *
 * @copyright  Copyright (c) 2012-2015 EELLY Inc. (http://www.eelly.com)
 * @link       http://www.eelly.com
 * @license    衣联网版权所有
 */


namespace Eelly\SDK\Order\Service;


/**
 * 小程序订单.
 *
 * @author  肖俊明<xiaojunming@eelly.net>
 * @since 2018年08月09日
 */
interface AppletInterface
{
    /**
     * 通过店铺ID获取订单数量和支付数量和支付金额.
     *
     * @param array $storeIds
     *
     * @return array
     *
     * @requestExample({
     *     "storeIds":[148086,1762483]
     * })
     *
     * @returnExample({
     *    "148086": {
     *        "total": "245",
     *        "totalAmount": "34569",
     *        "payTotal": "80",
     *        "sellerId": "148086"
     *    },
     *    "1762483": {
     *        "total": "26",
     *        "totalAmount": "1202",
     *        "payTotal": "3",
     *        "sellerId": "1762483"
     *    }
     * })
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2018年08月09日
     */
    public function getOrderNumData(array $storeIds): array;


    /**
     * 获取一元订单列表数据.
     *
     * @param array $orderIds 订单ID
     *
     * @requestExample({
     *     "orderIds":[117,116]
     * })
     *
     * @returnExample([
     *   {
     *       "orderId": "117",
     *       "orderSn": "1810805377",
     *       "createdTime": "1524119511"
     *   },
     *   {
     *       "orderId": "116",
     *       "orderSn": "1810837219",
     *       "createdTime": "1524119510"
     *   }
     * ])
     *
     * @return array
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2018年08月28日
     */
    public function getOrderOneyuanData(array $orderIds): array;
}