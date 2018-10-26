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
}
