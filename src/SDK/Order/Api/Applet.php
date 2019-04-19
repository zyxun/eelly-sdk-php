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

namespace Eelly\SDK\Order\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Order\Service\AppletInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Applet
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
    public function getOrderNumData(array $storeIds): array
    {
        return EellyClient::request('order/applet', 'getOrderNumData', true, $storeIds);
    }

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
    public function getOrderNumDataAsync(array $storeIds)
    {
        return EellyClient::request('order/applet', 'getOrderNumData', false, $storeIds);
    }

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
    public function getOrderOneyuanData(array $orderIds): array
    {
        return EellyClient::request('order/applet', 'getOrderOneyuanData', true, $orderIds);
    }

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
    public function getOrderOneyuanDataAsync(array $orderIds)
    {
        return EellyClient::request('order/applet', 'getOrderOneyuanData', false, $orderIds);
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