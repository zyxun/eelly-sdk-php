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

namespace Eelly\SDK\EellyOldCode\Api\Member\Address;

use Eelly\SDK\EellyClient;

/**
 * Class Receive.
 *
 * var/eelly-old-code/modules/Member/Service/Address/ReceiveService.php
 */
class Receive
{
    /**
     * 获取小程序用户默认地址
     *
     * @param int $userId 用户id
     *
     * @return array
     */
    public function getMinDefaultAddressByUserId(int $userId)
    {
        return EellyClient::request('eellyOldCode/member/Address/Receive', __FUNCTION__, true, $userId);
    }

    /**
     * 小程序用户删除收货地址
     *
     * @param int $userId 用户id
     * @param int $addrId 收货地址id
     *
     * @return array
     */
    public function deleteUserAddress(int $userId, int $addrId)
    {
        return EellyClient::request('eellyOldCode/member/Address/Receive', __FUNCTION__, true, $userId, $addrId);
    }

    /**
     * 设置默认收货地址
     *
     * @param int $userId 用户id
     * @param int $addrId 收货地址id
     *
     * @return array
     */
    public function setUserDefaultAddress(int $userId, int $addrId)
    {
        return EellyClient::request('eellyOldCode/member/Address/Receive', __FUNCTION__, true, $userId, $addrId);
    }

    /**
     * 添加/编辑收货地址 (编辑的时候传addrId).
     *
     * @param array $data   添加的数据
     * @param mixed $userId
     *
     * @return array
     */
    public function saveUserAddress($data, $userId)
    {
        return EellyClient::request('eellyOldCode/member/Address/Receive', __FUNCTION__, true, $data, $userId);
    }

    /**
     * 获取小程序用户收货地址列表.
     *
     * @param int $userId 用户id
     *
     * @return array
     */
    public function getUserAddressList($userId)
    {
        return EellyClient::request('eellyOldCode/member/Address/Receive', __FUNCTION__, true, $userId);
    }

    /**
     * 通过地址ID和用户ID获得收货地址
     *
     * > 注意：这里参数顺序是地址id，用户id
     *
     * ###使用示例
     *
     * ####一般使用方式
     * <code>
     * ReceiveService::getInstance()->getAddrByAddrId(456, 123);
     * </code>
     *
     * @param int $addrId 地址id
     * @param int $userId 用户id
     *
     * @return array 地址数组
     *               > 未找到数据返回null
     *
     * > 数组说明
     *   key | value
     *   ------------ | -------------
     *   addr_id      | 收货地址id
     *   user_id      | 用户id
     *   consignee    | 收货人姓名
     *   region_id    | 地区id
     *   region_name  | 地区名
     *   address      | 详细地址
     *   zipcode      | 邮编
     *   phone_tel    | 电话
     *   phone_mob    | 手机
     *   default      | 是否设置为默认地址(1:是，0:否)
     */
    public function getAddrByAddrId($addrId, $userId)
    {
        return EellyClient::request('eellyOldCode/member/Address/Receive', __FUNCTION__, true, $addrId, $userId);
    }

    /**
     * 通过地址ID和用户ID获得收货地址
     *
     * @param int $addressId
     * @param int $userId
     *
     * @return array
     */
    public function getAddressByAddressId($addressId, $userId)
    {
        return EellyClient::request('eellyOldCode/member/Address/Receive', __FUNCTION__, true, $addressId, $userId);
    }

    /**
     * 获取用户默认收获地址
     *
     * @param integer $userId
     * @return array
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.2.15
     */
    public function getDefaultAddrByUserId(int $userId)
    {
        return EellyClient::request('eellyOldCode/member/Address/Receive', __FUNCTION__, true, $userId);
    }
}
