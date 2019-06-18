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
use Eelly\SDK\User\DTO\UserAddressDTO;
use Eelly\SDK\User\Exception\UserException;

/**
 * 用户地址信息.
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface AddressInterface
{
    /**
     * 根据地址id，获取对应的地址信息.
     *
     * @param int    $uaId 地址id
     * @param UidDTO $user 用户信息
     *
     * @throws UserException
     *
     * @return UserAddressDTO
     * @requestExample({"uaId":1})
     * @returnExample({"uaId":"1","userId":"148086","consignee":"haha","gbCode":"1","zipcode":"1","address":"\u6c5f\u5357\u5927\u9053\u4e2d112","mobile":"13711221122","phone":"111","deliveryType":"3","status":"1","createdTime":"0"})
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since  2017/9/8
     */
    public function getAddress(int $uaId, UidDTO $user = null): UserAddressDTO;

    /**
     * 添加用户地址.
     *
     * @param array  $data
     * @param int    $data['consignee']    联系人姓名
     * @param int    $data['gbCode']       地区编码
     * @param int    $data['zipcode']      邮政编码
     * @param int    $data['address']      详细地址
     * @param int    $data['mobile']       手机号
     * @param int    $data['phone']        联系电话，多个电话用英文逗号分割
     * @param int    $data['deliveryType'] 送货类型：1 只工作日送货 2 只双休日、假日送货 3 工作日、双休日或假日均可送货
     * @param int    $data['status']       状态标志：0 有效地址 1 默认地址 4 删除
     * @param UidDTO $user                 用户信息
     *
     * @throws UserException
     *
     * @return bool
     * @requestExample({"data":{"consignee":"haha","gbCode":"1","zipcode":"110104","address":"\u6c5f\u5357\u5927\u9053\u4e2d112","mobile":"13711221122","phone":"","deliveryType":"3","status":"0"}})
     * @returnExample(true)
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since  2017/9/8
     */
    public function addAddress(array $data, UidDTO $user = null): bool;

    /**
     * 添加用户地址.(App).
     *
     * @param array  $data
     * @param int    $data['consignee']    联系人姓名
     * @param int    $data['gbCode']       地区编码
     * @param int    $data['zipcode']      邮政编码
     * @param int    $data['address']      详细地址
     * @param int    $data['mobile']       手机号
     * @param int    $data['phone']        联系电话，多个电话用英文逗号分割
     * @param int    $data['deliveryType'] 送货类型：1 只工作日送货 2 只双休日、假日送货 3 工作日、双休日或假日均可送货
     * @param int    $data['status']       状态标志：0 有效地址 1 默认地址 4 删除
     * @param UidDTO $user                 用户信息
     *
     * @throws UserException
     *
     * @return bool
     * @requestExample({"data":{"consignee":"haha","gbCode":"1","zipcode":"110104","address":"\u6c5f\u5357\u5927\u9053\u4e2d112","mobile":"13711221122","phone":"","deliveryType":"3","status":"0"}})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since  2017/10/25
     */
    public function addAddressApp(array $data, UidDTO $user = null): bool;

    /**
     * 更新用户地址.
     *
     * @param int    $uaId                 地址id
     * @param array  $data
     * @param int    $data['consignee']    联系人姓名
     * @param int    $data['gbCode']       地区编码
     * @param int    $data['zipcode']      邮政编码
     * @param int    $data['address']      详细地址
     * @param int    $data['mobile']       手机号
     * @param int    $data['phone']        联系电话，多个电话用英文逗号分割
     * @param int    $data['deliveryType'] 送货类型：1 只工作日送货 2 只双休日、假日送货 3 工作日、双休日或假日均可送货
     * @param int    $data['status']       状态标志：0 有效地址 1 默认地址 4 删除
     * @param UidDTO $user                 用户信息
     *
     * @throws UserException
     *
     * @return bool
     * @requestExample({"uaId":1, "data":{"consignee":"haha","gbCode":"1","zipcode":"110104","address":"\u6c5f\u5357\u5927\u9053\u4e2d112","mobile":"13711221122","phone":"","deliveryType":"3","status":"0"}})
     * @returnExample(true)
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since  2017/9/9
     */
    public function updateAddress(int $uaId, array $data, UidDTO $user = null): bool;

    /**
     * 删除用户地址.
     *
     * @param int    $uaId 地址id
     * @param UidDTO $user 用户信息
     *
     * @throws UserException
     *
     * @return bool
     * @requestExample({"uaId":1})
     * @returnExample(true)
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since  2017/9/9
     *
     * @Validation(
     *     @digit(0, {'message': '地址id类型不正确'})
     * )
     */
    public function deleteAddress(int $uaId, UidDTO $user = null): bool;

    /**
     * 获取用户地址列表.
     *
     * @param UidDTO $user 用户信息
     *
     * @throws UserException
     *
     * @requestExample()
     * @returnExample({"data":{"items":{{"uaId":"1","userId":"148086","consignee":"heiheisss","gbCode":"1","zipcode":"1","address":"\u6c5f\u5357\u5927\u9053\u4e2d112","mobile":"13711221122","phone":"111","deliveryType":"3","status":"1","createdTime":"0"}}}})
     *
     * @return array
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since  2017-10-24
     */
    public function listAddress(UidDTO $user = null): array;

    /**
     * 获取用户的地址列表.
     *
     * @param array  $condition
     * @param int    $condition['consignee'] 收货人
     * @param int    $condition['mobile']    收获人手机号
     * @param int    $condition['status']    状态：0 有效地址 1 默认地址 4 删除
     * @param int    $currentPage            当前页数
     * @param int    $limit                  每页显示记录数
     * @param UidDTO $user                   用户信息
     *
     * @throws SystemException
     *
     * @return array
     * @requestExample()
     * @returnExample({"data":{"items":[{"uaId":"1","userId":"148086","consignee":"heiheisss","gbCode":"1","zipcode":"1","address":"\u6c5f\u5357\u5927\u9053\u4e2d112","mobile":"13711221122","phone":"111","deliveryType":"3","status":"4","createdTime":"0","updateTime":"2017-09-11 07:23:52"}],"page":{"first":1,"before":1,"current":1,"last":1,"next":1,"totalPages":1,"totalItems":1,"limit":10}},"returnType":"array"})
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     *
     * @since  2017/9/9
     */
    public function listAddressPage(array $condition = [], int $currentPage = 1, int $limit = 10, UidDTO $user = null): array;

    /**
     * 删除收货地址
     *
     * @param int    $addrId 地址id
     * @param UidDTO $user   用户信息
     *
     * @return bool
     *
     * @returnExample(true)
     *
     * @author wechan
     *
     * @since 2018年09月18日
     */
    public function deleteUserAddress(int $addrId, UidDTO $user = null): bool;

    /**
     * 设置默认收货地址
     *
     * @param int    $addrId 地址id
     * @param UidDTO $user   用户信息
     *
     * @return bool
     * @returnExample(true)
     *
     * @author wechan
     *
     * @since 2018年09月18日
     */
    public function setUserDefaultAddress(int $addrId, UidDTO $user = null): bool;

    /**
     * 添加/编辑收货地址 (编辑的时候传addrId).
     *
     * @param array  $data               添加的数据
     * @param int    $data['addrId']     收货地址id
     * @param string $data['userName']   收货人名字
     * @param string $data['detailInfo'] 收货详细地址
     * @param string $data['telNumber']  收货人手机号码
     * @param string $data['default']    是否默认收货地址 (1.是 0.否)
     * @param string $data['postalCode'] 邮政编码
     * @param int    $data['regionId']   地区id
     * @param UidDTO $user               用户信息
     *
     * @return bool
     *
     * @returnExample({"addrId":"392285","regionId":1111})
     *
     * @author wechan
     *
     * @since 2018年09月18日
     */
    public function saveUserAddress(array $data, UidDTO $user = null): array;

    /**
     * 获取用户收货地址列表.
     *
     * @param UidDTO $user 用户信息
     *
     * ### 返回结果
     * 字段名 | 类型 |描述
     * ---|---|---
     * addrId | int | 地址id
     * userName | string | 收货人名称
     * telNumber | string  | 收货人电话
     * detailInfo | string  | 收货人详细地址(包含地区)
     * regionName | string | 地区名
     * addressName | string  | 收货人详细地址(不包含地区)
     * default | int | 是否默认
     * regionId | int | 地区id
     *
     * @return array
     * @returnExample([{"addrId":"50873","userName":"fsdfds","telNumber":"13546731245","detailInfo":"北京市 市辖区 丰台区 上海市 市辖区 徐汇区 Ehdhdjd.","regionName":"北京市 市辖区 丰台区","addressName":"上海市 市辖区 徐汇区 Ehdhdjd.","default":"1","regionId":"110106"}])
     *
     * @author wechan
     *
     * @since 2018年09月18日
     */
    public function getUserAddressList(UidDTO $user = null): array;
}
