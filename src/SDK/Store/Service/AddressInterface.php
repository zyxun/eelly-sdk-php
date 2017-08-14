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

namespace Eelly\SDK\Store\Service;

use Eelly\DTO\UserDTO;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface AddressInterface
{
    /**
     * 新增店铺地址
     * 新增店铺的店铺地址和退货地址
     *
     * @param array   $addrData                 地址数据
     * @param int     $addrData['storeId']      店铺id
     * @param string  $addrData['consignee']    联系人姓名
     * @param string  $addrData['gbCode']       地区编码
     * @param string  $addrData['zipCode']      邮政编码
     * @param string  $addrData['address']      详细地址
     * @param string  $addrData['mobile']       手机号
     * @param string  $addrData['deliveryType'] 送货类型1只送工作日2只双休日、假日3工作日、双休日或假日均可
     * @param int     $addrData['addressType']  地址类型 1店铺地址 2退货地址
     * @param int     $addrData['isDefault']    是否为默认地址 0非默认 1默认
     * @param UserDTO $user                     登录用户信息
     *
     * @throws \Eelly\SDK\Store\Exception\StoreException
     *
     * @return bool 新增结果
     * @requestExample({"addrData":{"storeId":1, "consignee":"联系人姓名","gdCode":"123","zipCode":"123","address":"详细地址","mobile":"123456789","deliveryType":1,"type":1,"isDefault":1}})
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017-08-10
     */
    public function addStoreAddress(array $addrData, UserDTO $user = null): bool;

    /**
     * 修改店铺地址
     * 修改店铺的店铺地址和退货地址
     *
     * @param array   $addrData                 地址数据
     * @param int     $addrData['addrId']       地址id
     * @param string  $addrData['consignee']    联系人姓名
     * @param string  $addrData['gbCode']       地区编码
     * @param string  $addrData['zipCode']      邮政编码
     * @param string  $addrData['address']      详细地址
     * @param string  $addrData['mobile']       手机号
     * @param string  $addrData['deliveryType'] 送货类型1只送工作日2只双休日、假日3工作日、双休日或假日均可
     * @param int     $addrData['isDefault']    是否为默认地址 0非默认 1默认
     * @param UserDTO $user                     登录用户信息
     *
     * @throws \Eelly\SDK\Store\Exception\StoreException
     *
     * @return bool 修改结果
     * @requestExample({"addrData":{"addrId":1, "consignee":"联系人姓名","gdCode":"123","zipCode":"123","address":"详细地址","mobile":"123456789","deliveryType":1,"isDefault":1}})
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017-08-10
     */
    public function updateStoreAddress(array $addrData, UserDTO $user = null): bool;

    /**
     * 删除店铺地址
     * 删除店铺的店铺地址和退货地址
     *
     * @param int     $addrId 店铺地址
     * @param UserDTO $user   登录用户信息
     *
     * @throws \Eelly\SDK\Store\Exception\StoreException
     *
     * @return bool 删除结果
     * @requestExample({"addrId":1})
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017-08-10
     */
    public function deleteStoreAddress(int $addrId, UserDTO $user = null): bool;
}
