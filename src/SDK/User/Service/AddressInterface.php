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

namespace Eelly\SDK\User\Service;

use Eelly\DTO\UidDTO;
use Eelly\SDK\System\Exception\SystemException;
use Eelly\SDK\User\DTO\UserAddressDTO;

/**
 * 用户地址信息.
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface AddressInterface
{
    /**
     * 获取指定的用户信息.
     *
     * @param array $data
     * @param int    $data['ua_id'] 地址id
     * @param int    $data['user_id'] 用户id
     * @param string $data['consignee']  联系人姓名
     * @param int    $data['mobile'] 联系人手机号
     *
     * @throws SystemException
     *
     * @return  UserAddressDTO
     * @requestExample(1)
     * @returnExample()
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     * @since  2017/9/8
     */
    public function getAddress(array $data): UserAddressDTO;

    /**
     * 添加用户地址.
     *
     * @param array $data
     * @param int   $data['user_id']  用户ID
     * @param int   $data['consignee']    联系人姓名
     * @param int   $data['gb_code']      地区编码
     * @param int   $data['zipcode']      邮政编码
     * @param int   $data['address']      详细地址
     * @param int   $data['mobile']       手机号
     * @param int   $data['phone']        联系电话，多个电话用英文逗号分割
     * @param int   $data['delivery_type']    送货类型：1 只工作日送货 2 只双休日、假日送货 3 工作日、双休日或假日均可送货
     * @param int $data['status']       状态标志：0 有效地址 1 默认地址 4 删除
     * @param UidDTO $user             用户信息
     *
     * @throws SystemException
     *
     * @return bool
     * @requestExample({'data':{'consignee':'haha','gb_code':'1','zipcode':'1','address':'江南大道中','mobile':'13711221122','phone':'','delivery_type':'3','status':'1'}})
     * @returnExample(true)
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     * @since  2017/9/8
     *
     */
    public function addAddress(array $data, UidDTO $user = null): bool;

    /**
     * 更新用户地址.
     *
     * @param int   $AddressId  地址id
     * @param array $data
     * @param int   $data['user_id']      用户ID
     * @param int   $data['consignee']    联系人姓名
     * @param int   $data['gb_code']      地区编码
     * @param int   $data['zipcode']      邮政编码
     * @param int   $data['address']      详细地址
     * @param int   $data['mobile']       手机号
     * @param int   $data['phone']        联系电话，多个电话用英文逗号分割
     * @param int   $data['delivery_type']    送货类型：1 只工作日送货 2 只双休日、假日送货 3 工作日、双休日或假日均可送货
     * @param int   $data['status']       状态标志：0 有效地址 1 默认地址 4 删除
     * @param UidDTO   $user             用户信息
     *
     * @throws SystemException
     *
     * @return bool
     * @requestExample()
     * @returnExample()
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     * @since  2017/9/9
     */
    public function updateAddress(int $AddressId, array $data, UidDTO $user = null): bool;

    /**
     * 删除用户地址.
     *
     * @param int     $AddressId        地址id
     * @param UidDTO $user             用户信息
     *
     * @throws  SystemException
     *
     * @return bool
     * @requestExample(1)
     * @returnExample(1)
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     * @since  2017/9/9
     *
     * @Validation(
     *     @digit(0, {'message': '地址id类型不正确'})
     * )
     */
    public function deleteAddress(int $AddressId, UidDTO $user): bool;

    /**
     * 获取用户的地址列表.
     *
     * @param array $condition
     * @param int $condition['consignee']   收货人
     * @param int $condition['mobile']      收获人手机号
     * @param int $condition['status']      状态：0 有效地址 1 默认地址 4 删除
     * @param int       $currentPage    当前页数
     * @param int       $limit          每页显示记录数
     * @param UidDTO   $user          用户信息
     *
     * @throws SystemException
     *
     * @return array
     * @requestExample()
     * @returnExample()
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     * @since  2017/9/9
     */
    public function listAddressPage(array $condition = [], int $currentPage = 1, int $limit = 10, UidDTO $user): array;
}
