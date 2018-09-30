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
use Eelly\SDK\Order\Service\ArbitrateFollowInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class ArbitrateFollow implements ArbitrateFollowInterface
{
    /**
     * 新增跟进记录
     *
     * > data 数据说明
     * 
     * key | type | value
     * --- | ---- | ----
     * contactName | string | 联系人姓名
     * number | string | 联系人号码
     * content | string | 跟进内容
     * 
     * @param integer $orderId 订单id
     * @param array $data 新增的数据
     * @return boolean
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.9.30
     */
    public function addFollow(int $orderId, array $data): bool
    {
        return EellyClient::request('order/arbitrateFollow', 'addFollow', true, $orderId, $data);
    }

    /**
     * 新增跟进记录
     *
     * > data 数据说明
     * 
     * key | type | value
     * --- | ---- | ----
     * contactName | string | 联系人姓名
     * number | string | 联系人号码
     * content | string | 跟进内容
     * 
     * @param integer $orderId 订单id
     * @param array $data 新增的数据
     * @return boolean
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.9.30
     */
    public function addFollowAsync(int $orderId, array $data)
    {
        return EellyClient::request('order/arbitrateFollow', 'addFollow', false, $orderId, $data);
    }

    /**
     * 获取跟进记录 一条
     * 
     * > 返回数据说明 只列关键
     *
     * key | type | value
     * --- | ---- | ----
     * oafId | int | 跟进id
     * adminName | string | 跟进人员姓名
     * contactName | string | 联系人姓名
     * number | string | 联系号码
     * content | string | 内容
     * 
     * @param integer $oafId 跟进记录id
     * @return array
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.9.30
     */
    public function getFollow(int $oafId): array
    {
        return EellyClient::request('order/arbitrateFollow', 'getFollow', true, $oafId);
    }

    /**
     * 获取跟进记录 一条
     * 
     * > 返回数据说明 只列关键
     *
     * key | type | value
     * --- | ---- | ----
     * oafId | int | 跟进id
     * adminName | string | 跟进人员姓名
     * contactName | string | 联系人姓名
     * number | string | 联系号码
     * content | string | 内容
     * 
     * @param integer $oafId 跟进记录id
     * @return array
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.9.30
     */
    public function getFollowAsync(int $oafId)
    {
        return EellyClient::request('order/arbitrateFollow', 'getFollow', false, $oafId);
    }

    /**
     * 更新跟进记录
     * 
     * > data 数据说明
     * 
     * key | type | value
     * --- | ---- | ----
     * contactName | string | 联系人姓名
     * number | string | 联系人号码
     * content | string | 跟进内容
     * adminName | string | 当前修改的管理员姓名
     *
     * @param integer $oafId 跟进id
     * @param array $data 修改的数据
     * @return boolean
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.9.30
     */
    public function updateFollow(int $oafId, array $data): bool
    {
        return EellyClient::request('order/arbitrateFollow', 'updateFollow', true, $oafId, $data);
    }

    /**
     * 更新跟进记录
     * 
     * > data 数据说明
     * 
     * key | type | value
     * --- | ---- | ----
     * contactName | string | 联系人姓名
     * number | string | 联系人号码
     * content | string | 跟进内容
     * adminName | string | 当前修改的管理员姓名
     *
     * @param integer $oafId 跟进id
     * @param array $data 修改的数据
     * @return boolean
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.9.30
     */
    public function updateFollowAsync(int $oafId, array $data)
    {
        return EellyClient::request('order/arbitrateFollow', 'updateFollow', false, $oafId, $data);
    }

    /**
     * 跟进记录列表
     *
     * > 返回数据说明 只列关键
     *
     * key | type | value
     * --- | ---- | ----
     * oafId | int | 跟进id
     * adminName | string | 跟进人员姓名
     * contactName | string | 联系人姓名
     * number | string | 联系号码
     * content | string | 内容
     * editName | string | 编辑人员
     * createdTime | int | 记录时间戳
     * 
     * @param integer $orderId 订单id
     * @return array
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.9.30
     */
    public function followList(int $orderId): array
    {
        return EellyClient::request('order/arbitrateFollow', 'followList', true, $orderId);
    }

    /**
     * 跟进记录列表
     *
     * > 返回数据说明 只列关键
     *
     * key | type | value
     * --- | ---- | ----
     * oafId | int | 跟进id
     * adminName | string | 跟进人员姓名
     * contactName | string | 联系人姓名
     * number | string | 联系号码
     * content | string | 内容
     * editName | string | 编辑人员
     * createdTime | int | 记录时间戳
     * 
     * @param integer $orderId 订单id
     * @return array
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.9.30
     */
    public function followListAsync(int $orderId)
    {
        return EellyClient::request('order/arbitrateFollow', 'followList', false, $orderId);
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