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
use Eelly\SDK\Pay\Service\AppletPayRecordInterface;
use Eelly\DTO\UidDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class AppletPayRecord implements AppletPayRecordInterface
{
    /**
     * 获取卖家账户收支明细列表.
     *
     * > 返回数据说明
     * 
     * key | type | value
     * --- | ---- | ----
     * data | array | 收支明细数据
     * item | array | 分页所需数据 app暂时使用不到
     *
     * > data 数据说明
     * 
     * key | type |  value
     * --- | ---- | -------
     * billNo        | string | 交易流水号
     * prId          | int    | 交易ID
     * type          | int    | 明细类型:0.支出 1.收入
     * payType       | string | 付款类型
     * money         | int    | 金额
     * time          | int    | 时间戳
     * remark        | string | 说明
     * handleStatus  | int    | 处理状态 0.未完成 1.已完成
     * 
     * > item 数据说明
     * 
     * itemCount     | int    | 总数量
     * totalPage     | int    | 总页数
     * page          | int    | 当前页面
     *
     * @param int $storeId 店铺id
     * @param int $type 1.今日收入列表 2.累计收入列表 3.累计支出列表 4.累计收入支出列表(全部)
     * @param int $page 分页
     * @return array
     *
     * @author wechan
     * @since  2018年05月19日
     */
    public function getSellerPayRecordsList(int $storeId, int $type, int $page = 1, UidDTO $user = null): array
    {
        return EellyClient::request('pay/appletPayRecord', 'getSellerPayRecordsList', true, $storeId, $type, $page, $user);
    }

    /**
     * 获取卖家账户收支明细列表.
     *
     * > 返回数据说明
     * 
     * key | type | value
     * --- | ---- | ----
     * data | array | 收支明细数据
     * item | array | 分页所需数据 app暂时使用不到
     *
     * > data 数据说明
     * 
     * key | type |  value
     * --- | ---- | -------
     * billNo        | string | 交易流水号
     * prId          | int    | 交易ID
     * type          | int    | 明细类型:0.支出 1.收入
     * payType       | string | 付款类型
     * money         | int    | 金额
     * time          | int    | 时间戳
     * remark        | string | 说明
     * handleStatus  | int    | 处理状态 0.未完成 1.已完成
     * 
     * > item 数据说明
     * 
     * itemCount     | int    | 总数量
     * totalPage     | int    | 总页数
     * page          | int    | 当前页面
     *
     * @param int $storeId 店铺id
     * @param int $type 1.今日收入列表 2.累计收入列表 3.累计支出列表 4.累计收入支出列表(全部)
     * @param int $page 分页
     * @return array
     *
     * @author wechan
     * @since  2018年05月19日
     */
    public function getSellerPayRecordsListAsync(int $storeId, int $type, int $page = 1, UidDTO $user = null)
    {
        return EellyClient::request('pay/appletPayRecord', 'getSellerPayRecordsList', false, $storeId, $type, $page, $user);
    }

    /**
     * 获取卖家账户收支明细详情.
     *
     * > 返回数据说明
     *
     * key | type |  value
     * --- | ---- | -------
     * billNo          | string    | 流水号
     * payType         | string    | 支付类型
     * payMoney        | int       | 支付金额
     * payStyle        | string    | 支付方式
     * payTime         | int       | 支付时间
     * handleStatus    | int       | 资金情况:0.未完成 1.已完成
     * remark          | string    | 备注
     *
     * @param int $payRecordId 交易id
     * @return array
     *
     * @author wechan
     * @since  2018年05月19日
     */
    public function getSellerPayRecordsDetails(int $payRecordId): array
    {
        return EellyClient::request('pay/appletPayRecord', 'getSellerPayRecordsDetails', true, $payRecordId);
    }

    /**
     * 获取卖家账户收支明细详情.
     *
     * > 返回数据说明
     *
     * key | type |  value
     * --- | ---- | -------
     * billNo          | string    | 流水号
     * payType         | string    | 支付类型
     * payMoney        | int       | 支付金额
     * payStyle        | string    | 支付方式
     * payTime         | int       | 支付时间
     * handleStatus    | int       | 资金情况:0.未完成 1.已完成
     * remark          | string    | 备注
     *
     * @param int $payRecordId 交易id
     * @return array
     *
     * @author wechan
     * @since  2018年05月19日
     */
    public function getSellerPayRecordsDetailsAsync(int $payRecordId)
    {
        return EellyClient::request('pay/appletPayRecord', 'getSellerPayRecordsDetails', false, $payRecordId);
    }

    /**
     * 获取交易的记录 针对pc
     * 
     * > params 筛选条件说明
     * 
     * type | value | desc
     * ---- | ----- | ----
     * oneMonth | mixed | 近一个月数据筛选条件，没有任何筛选条件默认
     * threeMonth | mixed | 近三个月的筛选条件
     * halfAYear | mixed | 近半年
     * all | mixed | 全部
     * startTime | int | 开始时间戳
     * endTime | int | 结束时间戳
     * orderSn | string | 订单号
     * BillNo | string | 交易流水号
     * type | int | 筛选类型 1:收入 2:支出
     *
     * @param integer $storeId 店铺id
     * @param array $params 参数数组 筛选条件
     * @param integer $page 当前页
     * @param integer $limit 每页限制数量
     * @param UidDTO $user 当前登录的用户
     * @return array
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.11.26
     */
    public function getRecordList(int $storeId, array $params = [], int $page = 1, int $limit = 10, UidDTO $user = null): array
    {
        return EellyClient::request('pay/appletPayRecord', 'getRecordList', true, $storeId, $params, $page, $limit, $user);
    }

    /**
     * 获取交易的记录 针对pc
     * 
     * > params 筛选条件说明
     * 
     * type | value | desc
     * ---- | ----- | ----
     * oneMonth | mixed | 近一个月数据筛选条件，没有任何筛选条件默认
     * threeMonth | mixed | 近三个月的筛选条件
     * halfAYear | mixed | 近半年
     * all | mixed | 全部
     * startTime | int | 开始时间戳
     * endTime | int | 结束时间戳
     * orderSn | string | 订单号
     * BillNo | string | 交易流水号
     * type | int | 筛选类型 1:收入 2:支出
     *
     * @param integer $storeId 店铺id
     * @param array $params 参数数组 筛选条件
     * @param integer $page 当前页
     * @param integer $limit 每页限制数量
     * @param UidDTO $user 当前登录的用户
     * @return array
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.11.26
     */
    public function getRecordListAsync(int $storeId, array $params = [], int $page = 1, int $limit = 10, UidDTO $user = null)
    {
        return EellyClient::request('pay/appletPayRecord', 'getRecordList', false, $storeId, $params, $page, $limit, $user);
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