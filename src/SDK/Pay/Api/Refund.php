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

use Eelly\SDK\EellyClient;
use Eelly\SDK\Pay\Service\RefundInterface;
use Eelly\DTO\UidDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Refund
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
    public function refundIntegrity(array $data, UidDTO $uidDTO = null): bool
    {
        return EellyClient::request('pay/refund', 'refundIntegrity', true, $data, $uidDTO);
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
    public function refundIntegrityAsync(array $data, UidDTO $uidDTO = null)
    {
        return EellyClient::request('pay/refund', 'refundIntegrity', false, $data, $uidDTO);
    }

    /**
     * 获取退款记录列表
     *
     * @param array  $condition
     * @param int    $page
     * @param int    $limit
     * @param string $fieldScope
     * @return array
     *
     * @author zhangyangxun
     * @since 2018-11-22
     */
    public function listRefundPage(array $condition, int $page = 1, int $limit = 10, string $fieldScope = ''): array
    {
        return EellyClient::request('pay/refund', 'listRefundPage', true, $condition, $page, $limit, $fieldScope);
    }

    /**
     * 获取退款记录列表
     *
     * @param array  $condition
     * @param int    $page
     * @param int    $limit
     * @param string $fieldScope
     * @return array
     *
     * @author zhangyangxun
     * @since 2018-11-22
     */
    public function listRefundPageAsync(array $condition, int $page = 1, int $limit = 10, string $fieldScope = '')
    {
        return EellyClient::request('pay/refund', 'listRefundPage', false, $condition, $page, $limit, $fieldScope);
    }

    /**
     * 诚信保障退款 退款到余额 针对厂+
     *
     * @param integer $integrityId 诚信保障id
     * @return array
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.11.30
     */
    public function refundIntegrityV2(int $integrityId): array
    {
        return EellyClient::request('pay/refund', 'refundIntegrityV2', true, $integrityId);
    }

    /**
     * 诚信保障退款 退款到余额 针对厂+
     *
     * @param integer $integrityId 诚信保障id
     * @return array
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.11.30
     */
    public function refundIntegrityV2Async(int $integrityId)
    {
        return EellyClient::request('pay/refund', 'refundIntegrityV2', false, $integrityId);
    }

    /**
     * 获取退款记录
     * 
     * > items 返回数据说明
     * 
     * key | type | value
     * --- | ---- | -----
     * prefId | int | 退款id
     * paId | int | 账号id
     * type | int | 退款类型：1 订单退款 2 服务退款 3 诚保解冻 4 一件代发保证金退款
     * style | int | 退款方式：0 未知 1 退款到余额 2 退款到支付宝 3 退款到微信',
     * storeName | string | 店铺名称
     * number | string | 交易号
     * serviceName | string | 退款类型号 例如：订单号： 、服务号：
     * money | float | 退款金额 单位元
     * remark | string | 备注
     * extend | string | 拓展
     * createdTime | int | 创建时间戳
     *
     * @param integer $userId 用户id
     * @param integer $storeId 店铺id
     * @param integer $page 页码 默认 1
     * @param integer $limit 每页限制数量 默认 20
     * @param array $conditions 查询条件
     * @return array
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.1.4
     */
    public function getRefundListForApp(int $userId, int $storeId, int $page = 1, int $limit = 20, array $conditions = []): array
    {
        return EellyClient::request('pay/refund', 'getRefundListForApp', true, $userId, $storeId, $page, $limit, $conditions);
    }

    /**
     * 获取退款记录
     * 
     * > items 返回数据说明
     * 
     * key | type | value
     * --- | ---- | -----
     * prefId | int | 退款id
     * paId | int | 账号id
     * type | int | 退款类型：1 订单退款 2 服务退款 3 诚保解冻 4 一件代发保证金退款
     * style | int | 退款方式：0 未知 1 退款到余额 2 退款到支付宝 3 退款到微信',
     * storeName | string | 店铺名称
     * number | string | 交易号
     * serviceName | string | 退款类型号 例如：订单号： 、服务号：
     * money | float | 退款金额 单位元
     * remark | string | 备注
     * extend | string | 拓展
     * createdTime | int | 创建时间戳
     *
     * @param integer $userId 用户id
     * @param integer $storeId 店铺id
     * @param integer $page 页码 默认 1
     * @param integer $limit 每页限制数量 默认 20
     * @param array $conditions 查询条件
     * @return array
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.1.4
     */
    public function getRefundListForAppAsync(int $userId, int $storeId, int $page = 1, int $limit = 20, array $conditions = [])
    {
        return EellyClient::request('pay/refund', 'getRefundListForApp', false, $userId, $storeId, $page, $limit, $conditions);
    }

    /**
     * 退款详情
     * 
     * > 返回数据说明
     * 
     * key | type | value
     * --- | ---- | -----
     * prefId | int | 退款id
     * paId | int | 账号id
     * type | int | 退款类型：1 订单退款 2 服务退款 3 诚保解冻 4 一件代发保证金退款
     * serviceName | string | 退款类型号 例如：订单号： 、服务号：
     * number | string | 交易号
     * storeName | string | 店铺名称
     * money | float | 退款金额 单位元
     * remark | string | 备注
     * extend | string | 拓展
     * createdTime | int | 创建时间戳
     *
     * @param integer $prefId 退款主键id
     * @return array
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.1.4
     */
    public function refundDetail(int $prefId): array
    {
        return EellyClient::request('pay/refund', 'refundDetail', true, $prefId);
    }

    /**
     * 退款详情
     * 
     * > 返回数据说明
     * 
     * key | type | value
     * --- | ---- | -----
     * prefId | int | 退款id
     * paId | int | 账号id
     * type | int | 退款类型：1 订单退款 2 服务退款 3 诚保解冻 4 一件代发保证金退款
     * serviceName | string | 退款类型号 例如：订单号： 、服务号：
     * number | string | 交易号
     * storeName | string | 店铺名称
     * money | float | 退款金额 单位元
     * remark | string | 备注
     * extend | string | 拓展
     * createdTime | int | 创建时间戳
     *
     * @param integer $prefId 退款主键id
     * @return array
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.1.4
     */
    public function refundDetailAsync(int $prefId)
    {
        return EellyClient::request('pay/refund', 'refundDetail', false, $prefId);
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