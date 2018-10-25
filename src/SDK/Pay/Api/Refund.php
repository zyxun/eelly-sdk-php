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

namespace Eelly\SDK\Pay\Api;

use Eelly\DTO\UidDTO;
use Eelly\SDK\EellyClient;
use Eelly\SDK\Pay\Service\RefundInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Refund implements RefundInterface
{
    /**
     * 退款数据.
     *
     * @param array $data 新增的退款数据
     * @return int
     * @requestExample({"paId":"1","type":1,"itemId":10001,"billNo":"1804234444706cvAds","money":1})
     * @returnExample(1)
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2018年04月23日
     */
    public function addRefund(array $data): int
    {
        return EellyClient::request('pay/refund', 'addRefund', true, $data);
    }

    /**
     * 退款数据.
     *
     * @param array $data 新增的退款数据
     * @return int
     * @requestExample({"paId":"1","type":1,"itemId":10001,"billNo":"1804234444706cvAds","money":1})
     * @returnExample(1)
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2018年04月23日
     */
    public function addRefundAsync(array $data)
    {
        return EellyClient::request('pay/refund', 'addRefund', false, $data);
    }

    /**
     * 去退款.
     *
     * @param array $data 退款数据
     * @return bool
     * @requestExample({"userId":148086,"money":1,"itemId":10001,"type":1})
     * @returnExample(true)
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2018年04月23日
     */
    public function goRefundPay(array $data): bool
    {
        return EellyClient::request('pay/refund', 'goRefundPay', true, $data);
    }

    /**
     * 去退款.
     *
     * @param array $data 退款数据
     * @return bool
     * @requestExample({"userId":148086,"money":1,"itemId":10001,"type":1})
     * @returnExample(true)
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2018年04月23日
     */
    public function goRefundPayAsync(array $data)
    {
        return EellyClient::request('pay/refund', 'goRefundPay', false, $data);
    }

    /**
     * 支付宝退款
     *
     * > data 请求数据说明
     * 
     * key | type | value
     * --- | ---- | ----
     * userId       | int   | 用户id
     * itemId       | int   | 关联id 订单id
     * type         | int   | 退款类型 1:订单退款 2:服务退款
     * money        | int   | 退款金额 单位:分
     * reason       | string | 退款原因
     * 
     * @param array $data 请求的数据
     * @return boolean
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.9.20
     */
    public function alipayRefund(array $data): bool
    {
        return EellyClient::request('pay/refund', 'alipayRefund', true, $data);
    }

    /**
     * 支付宝退款
     *
     * > data 请求数据说明
     * 
     * key | type | value
     * --- | ---- | ----
     * userId       | int   | 用户id
     * itemId       | int   | 关联id 订单id
     * type         | int   | 退款类型 1:订单退款 2:服务退款
     * money        | int   | 退款金额 单位:分
     * reason       | string | 退款原因
     * 
     * @param array $data 请求的数据
     * @return boolean
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.9.20
     */
    public function alipayRefundAsync(array $data)
    {
        return EellyClient::request('pay/refund', 'alipayRefund', false, $data);
    }

    /**
     * 退款操作
     *
     * > data 请求数据说明
     * 
     * key | type | value
     * --- | ---- | ----
     * userId       | int   | 用户id
     * itemId       | int   | 关联id 订单id
     * type         | int   | 退款类型 1:订单退款 2:服务退款
     * money        | int   | 退款金额 单位:分
     * reason       | string | 退款原因
     * 
     * @param array $data 退款请求的数据
     * @return boolean
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.9.21
     */
    public function goRefund(array $data): bool
    {
        return EellyClient::request('pay/refund', 'goRefund', true, $data);
    }

    /**
     * 退款操作
     *
     * > data 请求数据说明
     * 
     * key | type | value
     * --- | ---- | ----
     * userId       | int   | 用户id
     * itemId       | int   | 关联id 订单id
     * type         | int   | 退款类型 1:订单退款 2:服务退款
     * money        | int   | 退款金额 单位:分
     * reason       | string | 退款原因
     * 
     * @param array $data 退款请求的数据
     * @return boolean
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.9.21
     */
    public function goRefundAsync(array $data)
    {
        return EellyClient::request('pay/refund', 'goRefund', false, $data);
    }

    /**
     * 其他方式退款/退款到余额
     *
     * > data 请求数据说明
     * 
     * key | type | value
     * --- | ---- | ----
     * userId       | int   | 用户id
     * itemId       | int   | 关联id 订单id
     * type         | int   | 退款类型 1:订单退款 2:服务退款
     * money        | int   | 退款金额 单位:分
     * reason       | string | 退款原因
     * 
     * @param array $data
     * @return boolean
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.9.21
     */
    public function otherRefund(array $data): bool
    {
        return EellyClient::request('pay/refund', 'otherRefund', true, $data);
    }

    /**
     * 其他方式退款/退款到余额
     *
     * > data 请求数据说明
     * 
     * key | type | value
     * --- | ---- | ----
     * userId       | int   | 用户id
     * itemId       | int   | 关联id 订单id
     * type         | int   | 退款类型 1:订单退款 2:服务退款
     * money        | int   | 退款金额 单位:分
     * reason       | string | 退款原因
     * 
     * @param array $data
     * @return boolean
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.9.21
     */
    public function otherRefundAsync(array $data)
    {
        return EellyClient::request('pay/refund', 'otherRefund', false, $data);
    }

    /**
     * 诚信保障解冻退款
     *
     * @param array $data  诚信保障相关数据
     * @param UidDTO|null $uidDTO
     * @return bool
     *
     * @requestExample({"data":{"itemId":148086, "money":100}})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.10.24
     */
    public function refundIntegrity(array $data, UidDTO $uidDTO = null):bool
    {
        return EellyClient::request('pay/refund', __FUNCTION__, true, $data, $uidDTO);
    }

    /**
     * @inheritdoc
     */
    public function refundIntegrityAsync(array $data, UidDTO $uidDTO = null):bool
    {
        return EellyClient::request('pay/refund', __FUNCTION__, false, $data, $uidDTO);
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