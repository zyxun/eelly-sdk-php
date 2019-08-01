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

namespace Eelly\SDK\EellyOldCode\Api\Store;

use Eelly\SDK\EellyClient;

/**
 * Class Store.
 *
 *  modules/Goods/Service/GoodsService.php
 *
 * @author sunanzhi <sunanzhi@hotmail.com>
 */
class ReturnAddress
{
    /**
     * 通过店铺id获取店铺地址
     *
     * @param array $sellerId
     *
     * @return array
     *
     * @author sunanzhi <sunanzhi@hotmail.com>
     *
     * @since  2018.09.17
     */
    public function getDefaultAddressByUserId(int $sellerId)
    {
        return EellyClient::request('eellyOldCode/store/returnAddress', __FUNCTION__, true, $sellerId);
    }

    /**
     * 添加退货地址并设置为默认退货地址
     *
     * @param int   $userId 用户id
     * @param array $data   添加退货地址
     *
     * > $data数据说明
     *   key | value
     *   --------------------|--------------------
     *   consignee           |    string 收货人姓名
     *   region_id           |    string 收货地区编号
     *   address             |    string 收货地址
     *   zipcode             |    string 邮政编码
     *   phone_tel           |    string 固话
     *   phone_mob           |    string 移动电话
     *   default             |    string 是否为默认地址（该值必须为1）
     *
     * > 数据说明
     *   key | value
     *   --------------------|--------------------
     *   status              |    状态码:200|701|704|409
     *   info                |    提示信息
     *                       |    200: 成功
     *                       |    701: 方法参数错误
     *                       |    704: 退货地址最多只能有10条记录，请返回PC设置默认退货地址
     *                       |    409: 默认退货地址只能一个，请不要重复添加
     *   retval              |    $retval 是否添加成功
     *
     * @return bool 是否添加成功
     *
     * @internal
     *
     * @author 郭凯<guokai@eelly.net>
     * @author sunanzhi <sunanzhi@hotmail.com>
     *
     * @since  2015年6月8日
     */
    public function addDefaultAddr(int $userId, array $data)
    {
        return EellyClient::request('eellyOldCode/store/returnAddress', __FUNCTION__, true, $userId, $data);
    }

    /**
     * 编辑默认退货地址
     *
     * @param int   $userId 用户id
     * @param array $data   退货地址数据
     *
     * > $data数据说明
     *   key | value
     *   --------------------|--------------------
     *   addr_id             |    string 退货地址ID
     *   consignee           |    string 收货人姓名
     *   region_id           |    string 收货地区编号
     *   address             |    string 收货地址
     *   zipcode             |    string 邮政编码
     *   phone_tel           |    string 固话
     *   phone_mob           |    string 移动电话
     *   default             |    string 是否为默认地址（该值必须为1）
     *
     * > 数据说明
     *   key | value
     *   --------------------|--------------------
     *   status              |    状态码:200|701
     *   info                |    提示信息
     *                       |    200: 成功
     *                       |    701: 方法参数错误
     *   retval              |    $retval 是否编辑成功
     *
     * @return bool 是否编辑成功
     *
     * @internal
     *
     * @author 郭凯<guokai@eelly.net>
     * @author sunanzhi <sunanzhi@hotmail.com>
     *
     * @since  2015年6月8日
     */
    public function editDefaultAddr(int $userId, array $data)
    {
        return EellyClient::request('eellyOldCode/store/returnAddress', __FUNCTION__, true, $userId, $data);
    }
}
