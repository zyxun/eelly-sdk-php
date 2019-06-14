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

namespace Eelly\SDK\Store\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Store\Service\AddressInterface;
use Eelly\DTO\UidDTO;
use Eelly\SDK\Store\DTO\AddressDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Address
{
    /**
     * 新增店铺地址
     * 新增店铺的店铺地址和退货地址
     *
     * @param array  $addrData                 地址数据
     * @param int    $addrData['storeId']      店铺id
     * @param string $addrData['consignee']    联系人姓名
     * @param string $addrData['gbCode']       地区编码
     * @param string $addrData['zipcode']      邮政编码
     * @param string $addrData['address']      详细地址
     * @param string $addrData['mobile']       手机号
     * @param string $addrData['deliveryType'] 送货类型1只送工作日2只双休日、假日3工作日、双休日或假日均可
     * @param int    $addrData['addressType']  地址类型 1店铺地址 2退货地址
     * @param int    $addrData['isDefault']    是否为默认地址 0非默认 1默认
     * @param UidDTO $user                     登录用户信息
     *
     * @throws \Eelly\SDK\Store\Exception\StoreException
     *
     * @return bool 新增结果
     * @requestExample({"addrData":{"storeId":1, "consignee":"联系人姓名","gdCode":"123","zipcode":"123","address":"详细地址","mobile":"123456789","deliveryType":1,"type":1,"isDefault":1}})
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017-08-10
     */
    public function addStoreAddress(array $addrData, UidDTO $user = null): bool
    {
        return EellyClient::request('store/address', 'addStoreAddress', true, $addrData, $user);
    }

    /**
     * 新增店铺地址
     * 新增店铺的店铺地址和退货地址
     *
     * @param array  $addrData                 地址数据
     * @param int    $addrData['storeId']      店铺id
     * @param string $addrData['consignee']    联系人姓名
     * @param string $addrData['gbCode']       地区编码
     * @param string $addrData['zipcode']      邮政编码
     * @param string $addrData['address']      详细地址
     * @param string $addrData['mobile']       手机号
     * @param string $addrData['deliveryType'] 送货类型1只送工作日2只双休日、假日3工作日、双休日或假日均可
     * @param int    $addrData['addressType']  地址类型 1店铺地址 2退货地址
     * @param int    $addrData['isDefault']    是否为默认地址 0非默认 1默认
     * @param UidDTO $user                     登录用户信息
     *
     * @throws \Eelly\SDK\Store\Exception\StoreException
     *
     * @return bool 新增结果
     * @requestExample({"addrData":{"storeId":1, "consignee":"联系人姓名","gdCode":"123","zipcode":"123","address":"详细地址","mobile":"123456789","deliveryType":1,"type":1,"isDefault":1}})
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017-08-10
     */
    public function addStoreAddressAsync(array $addrData, UidDTO $user = null)
    {
        return EellyClient::request('store/address', 'addStoreAddress', false, $addrData, $user);
    }

    /**
     * 修改店铺地址
     * 修改店铺的店铺地址和退货地址
     *
     * @param array  $addrData                 地址数据
     * @param int    $addrData['storeId']      店铺id
     * @param int    $addrData['addrId']       地址id
     * @param string $addrData['consignee']    联系人姓名
     * @param string $addrData['gbCode']       地区编码
     * @param string $addrData['zipcode']      邮政编码
     * @param string $addrData['address']      详细地址
     * @param string $addrData['mobile']       手机号
     * @param string $addrData['deliveryType'] 送货类型1只送工作日2只双休日、假日3工作日、双休日或假日均可
     * @param int    $addrData['isDefault']    是否为默认地址 0非默认 1默认
     * @param UidDTO $user                     登录用户信息
     *
     * @throws \Eelly\SDK\Store\Exception\StoreException
     *
     * @return bool 修改结果
     * @requestExample({"addrData":{"storeId":1,"addrId":1,"consignee":"联系人姓名","gdCode":"123","zipcode":"123","address":"详细地址","mobile":"123456789","deliveryType":1,"isDefault":1}})
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017-08-10
     */
    public function updateStoreAddress(array $addrData, UidDTO $user = null): bool
    {
        return EellyClient::request('store/address', 'updateStoreAddress', true, $addrData, $user);
    }

    /**
     * 修改店铺地址
     * 修改店铺的店铺地址和退货地址
     *
     * @param array  $addrData                 地址数据
     * @param int    $addrData['storeId']      店铺id
     * @param int    $addrData['addrId']       地址id
     * @param string $addrData['consignee']    联系人姓名
     * @param string $addrData['gbCode']       地区编码
     * @param string $addrData['zipcode']      邮政编码
     * @param string $addrData['address']      详细地址
     * @param string $addrData['mobile']       手机号
     * @param string $addrData['deliveryType'] 送货类型1只送工作日2只双休日、假日3工作日、双休日或假日均可
     * @param int    $addrData['isDefault']    是否为默认地址 0非默认 1默认
     * @param UidDTO $user                     登录用户信息
     *
     * @throws \Eelly\SDK\Store\Exception\StoreException
     *
     * @return bool 修改结果
     * @requestExample({"addrData":{"storeId":1,"addrId":1,"consignee":"联系人姓名","gdCode":"123","zipcode":"123","address":"详细地址","mobile":"123456789","deliveryType":1,"isDefault":1}})
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017-08-10
     */
    public function updateStoreAddressAsync(array $addrData, UidDTO $user = null)
    {
        return EellyClient::request('store/address', 'updateStoreAddress', false, $addrData, $user);
    }

    /**
     * 删除店铺地址
     * 删除店铺的店铺地址和退货地址
     *
     * @param int    $storeId 店铺id
     * @param int    $addrId  店铺地址
     * @param UidDTO $user    登录用户信息
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
    public function deleteStoreAddress(int $storeId, int $addrId, UidDTO $user = null): bool
    {
        return EellyClient::request('store/address', 'deleteStoreAddress', true, $storeId, $addrId, $user);
    }

    /**
     * 删除店铺地址
     * 删除店铺的店铺地址和退货地址
     *
     * @param int    $storeId 店铺id
     * @param int    $addrId  店铺地址
     * @param UidDTO $user    登录用户信息
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
    public function deleteStoreAddressAsync(int $storeId, int $addrId, UidDTO $user = null)
    {
        return EellyClient::request('store/address', 'deleteStoreAddress', false, $storeId, $addrId, $user);
    }

    /**
     * 获取店铺地址
     * 获取店铺的店铺地址和退货地址
     *
     * @param int $storeId     店铺地址
     * @param int $addressType 店铺地址类型 1店铺地址 2退货地址
     *
     * @throws \Eelly\SDK\Store\Exception\StoreException
     *
     * @return AddressDTO
     * @requestExample({"storeId":1, "addressType":1})
     * @returnExample({"storeName":"店铺名称","addressType":1,"consignee":"联系人姓名","zipcode":"邮政编码","address":"详细地址","mobile":"13333333","deliveryType":1})
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017-08-12
     */
    public function getStoreAddress(int $storeId, int $addressType): AddressDTO
    {
        return EellyClient::request('store/address', 'getStoreAddress', true, $storeId, $addressType);
    }

    /**
     * 获取店铺地址
     * 获取店铺的店铺地址和退货地址
     *
     * @param int $storeId     店铺地址
     * @param int $addressType 店铺地址类型 1店铺地址 2退货地址
     *
     * @throws \Eelly\SDK\Store\Exception\StoreException
     *
     * @return AddressDTO
     * @requestExample({"storeId":1, "addressType":1})
     * @returnExample({"storeName":"店铺名称","addressType":1,"consignee":"联系人姓名","zipcode":"邮政编码","address":"详细地址","mobile":"13333333","deliveryType":1})
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017-08-12
     */
    public function getStoreAddressAsync(int $storeId, int $addressType)
    {
        return EellyClient::request('store/address', 'getStoreAddress', false, $storeId, $addressType);
    }

    /**
     * 获取默认的退货地址，如果不存在则返回店铺信息. (旧代码迁移)
     *
     * @param int $userId 用户ID
     * @return array 退货地址信息数组
     *
     * @requestExample({"userId":148086})
     * @returnExample({"addrId":"482059","consignee":"\u6d4b\u8bd57","mobile":"1","tel":"1","address":"1","zipCode":"123456","regionName":"\u5317\u4eac\u5e02 \u5e02\u8f96\u533a \u897f\u57ce\u533a"})
     *
     * @author 郭凯<guokai@eelly.net>
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since  2018.11.17
     */
    public function getDefaultAddrInfoByUserId(int $userId): array
    {
        return EellyClient::request('store/address', 'getDefaultAddrInfoByUserId', true, $userId);
    }

    /**
     * 获取默认的退货地址，如果不存在则返回店铺信息. (旧代码迁移)
     *
     * @param int $userId 用户ID
     * @return array 退货地址信息数组
     *
     * @requestExample({"userId":148086})
     * @returnExample({"addrId":"482059","consignee":"\u6d4b\u8bd57","mobile":"1","tel":"1","address":"1","zipCode":"123456","regionName":"\u5317\u4eac\u5e02 \u5e02\u8f96\u533a \u897f\u57ce\u533a"})
     *
     * @author 郭凯<guokai@eelly.net>
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since  2018.11.17
     */
    public function getDefaultAddrInfoByUserIdAsync(int $userId)
    {
        return EellyClient::request('store/address', 'getDefaultAddrInfoByUserId', false, $userId);
    }

    /**
     * 店铺是否设置退货地址
     *
     * @param int $storeId 店铺id
     * @return string
     * @requestExample({"storeId":148086})
     * @returnExample("true")
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.11.28
     */
    public function ifSetReturnAddress(int $storeId): string
    {
        return EellyClient::request('store/address', 'ifSetReturnAddress', true, $storeId);
    }

    /**
     * 店铺是否设置退货地址
     *
     * @param int $storeId 店铺id
     * @return string
     * @requestExample({"storeId":148086})
     * @returnExample("true")
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.11.28
     */
    public function ifSetReturnAddressAsync(int $storeId)
    {
        return EellyClient::request('store/address', 'ifSetReturnAddress', false, $storeId);
    }

    /**
     * 店铺添加退货地址
     * 
     * > addressData 数据说明
     * 
     * key | type | value
     * --- | ---- | -----
     * addrId | int | 店铺退货地址id
     * regionId | int | 区域id 
     * condignee | string | 收货人姓名
     * address | string | 详细地址
     * zipCode | string | 邮政编码
     * mobile | string | 手机号码
     * tel | string | 固定电话
     *
     * @param array $data 退货地址数据
     * @param UidDTO $user 当前登录用户
     * @return boolean
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.6.11
     */
    public function addReturnAddress(array $addressData, UidDTO $user = null): bool
    {
        return EellyClient::request('store/address', 'addReturnAddress', true, $addressData, $user);
    }

    /**
     * 店铺添加退货地址
     * 
     * > addressData 数据说明
     * 
     * key | type | value
     * --- | ---- | -----
     * addrId | int | 店铺退货地址id
     * regionId | int | 区域id 
     * condignee | string | 收货人姓名
     * address | string | 详细地址
     * zipCode | string | 邮政编码
     * mobile | string | 手机号码
     * tel | string | 固定电话
     *
     * @param array $data 退货地址数据
     * @param UidDTO $user 当前登录用户
     * @return boolean
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.6.11
     */
    public function addReturnAddressAsync(array $addressData, UidDTO $user = null)
    {
        return EellyClient::request('store/address', 'addReturnAddress', false, $addressData, $user);
    }

    /**
     * 店铺编辑退货地址
     * 
     * > addressData 数据说明
     * 
     * key | type | value
     * --- | ---- | -----
     * addrId | int | 店铺退货地址id
     * regionId | int | 区域id 
     * condignee | string | 收货人姓名
     * address | string | 详细地址
     * zipCode | string | 邮政编码
     * mobile | string | 手机号码
     * tel | string | 固定电话
     * 
     * @param array $addressData 退货地址数据
     * @param UidDTO $user 当前登录的用户
     * @return boolean
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.6.11
     */
    public function editReturnAddress(array $addressData, UidDTO $user = null): bool
    {
        return EellyClient::request('store/address', 'editReturnAddress', true, $addressData, $user);
    }

    /**
     * 店铺编辑退货地址
     * 
     * > addressData 数据说明
     * 
     * key | type | value
     * --- | ---- | -----
     * addrId | int | 店铺退货地址id
     * regionId | int | 区域id 
     * condignee | string | 收货人姓名
     * address | string | 详细地址
     * zipCode | string | 邮政编码
     * mobile | string | 手机号码
     * tel | string | 固定电话
     * 
     * @param array $addressData 退货地址数据
     * @param UidDTO $user 当前登录的用户
     * @return boolean
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.6.11
     */
    public function editReturnAddressAsync(array $addressData, UidDTO $user = null)
    {
        return EellyClient::request('store/address', 'editReturnAddress', false, $addressData, $user);
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