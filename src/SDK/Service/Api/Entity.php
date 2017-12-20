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

namespace Eelly\SDK\Service\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Service\Service\EntityInterface;
use Eelly\SDK\Service\DTO\EntityDTO;
use Eelly\DTO\UidDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Entity implements EntityInterface
{
    /**
     * 获取一条店铺实体认证记录.
     *
     * @param int $storeId 店铺ID
     *
     * @throws \Eelly\SDK\Service\Exception\EntityException
     *
     * @return EntityDTO
     * @requestExample({"storeId":1})
     * @returnExample({"storeId":1,"sbId":1,"name":"\u5e97\u94fa1","license":"440981198806232871","mobile":"13427587735","gbCode":"44020","districtId":"1","marketId":1,"floorId":3,"stallName":"\u7f8e\u7f8e\u5e97","stallNumber":"301-A","images":"[\"https:\\\/\\\/img03.eelly.com\\\/G04\\\/M00\\\/00\\\/98\\\/small_118_poYBAFjWXYaIWdWkAAJU9MtwDJgAAA7dgEx54sAAlUM236.jpg\",\"https:\\\/\\\/img03.eelly.com\\\/G02\\\/M00\\\/00\\\/BD\\\/small_118_ooYBAFjWXYqICR1yAAJWitxTD2AAABXRwMJp64AAlai106.jpg\"]","secId":1,"address":"\u6d4b\u8bd5\u5730\u5740,\u8857\u9053\u5730\u5740","status":1,"created_time":1458093605})
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-16
     */
    public function getEntity(int $storeId): EntityDTO
    {
        return EellyClient::request('service/entity', __FUNCTION__, true, $storeId);
    }

    /**
     * 获取一条店铺实体认证记录.
     *
     * @param int $storeId 店铺ID
     *
     * @throws \Eelly\SDK\Service\Exception\EntityException
     *
     * @return EntityDTO
     * @requestExample({"storeId":1})
     * @returnExample({"storeId":1,"sbId":1,"name":"\u5e97\u94fa1","license":"440981198806232871","mobile":"13427587735","gbCode":"44020","districtId":"1","marketId":1,"floorId":3,"stallName":"\u7f8e\u7f8e\u5e97","stallNumber":"301-A","images":"[\"https:\\\/\\\/img03.eelly.com\\\/G04\\\/M00\\\/00\\\/98\\\/small_118_poYBAFjWXYaIWdWkAAJU9MtwDJgAAA7dgEx54sAAlUM236.jpg\",\"https:\\\/\\\/img03.eelly.com\\\/G02\\\/M00\\\/00\\\/BD\\\/small_118_ooYBAFjWXYqICR1yAAJWitxTD2AAABXRwMJp64AAlai106.jpg\"]","secId":1,"address":"\u6d4b\u8bd5\u5730\u5740,\u8857\u9053\u5730\u5740","status":1,"created_time":1458093605})
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-16
     */
    public function getEntityAsync(int $storeId)
    {
        return EellyClient::request('service/entity', __FUNCTION__, false, $storeId);
    }

    /**
     * 新增店铺实体认证数据.
     *
     * @param array  $data                新增数据
     * @param int    $data['storeId']     店铺ID
     * @param int    $data['sbId']        服务购买记录ID
     * @param string $data['name']        真实姓名
     * @param string $data['license']     身份证号码
     * @param string $data['mobile']      手机号
     * @param int    $data['gbCode']      地区编码
     * @param int    $data['districtId']  商圈ID
     * @param int    $data['marketId']    市场ID
     * @param int    $data['floorId']     楼层ID
     * @param string $data['stallName']   档口名称
     * @param string $data['stallNumber'] 档口号：如 301、301A、301-A
     * @param string $data['images']      租赁合同或使用权凭证照片：JSON格式
     * @param int    $data['secId']       店铺实体自定义ID
     * @param string $data['address']     街道地址
     * @param UidDTO $user                登录用户对象
     *
     * @throws \Eelly\SDK\Service\Exception\EntityException
     *
     * @return bool
     * @requestExample({"data":{"storeId":1,"name":"\u5e97\u94fa1","license":"440981198806232871","mobile":"13427587735","gbCode":"44020","districtId":"1","marketId":1,"floorId":3,"stallName":"\u7f8e\u7f8e\u5e97","stallNumber":"301-A","images":"[\"https:\\\/\\\/img03.eelly.com\\\/G04\\\/M00\\\/00\\\/98\\\/small_118_poYBAFjWXYaIWdWkAAJU9MtwDJgAAA7dgEx54sAAlUM236.jpg\",\"https:\\\/\\\/img03.eelly.com\\\/G02\\\/M00\\\/00\\\/BD\\\/small_118_ooYBAFjWXYqICR1yAAJWitxTD2AAABXRwMJp64AAlai106.jpg\"]","secId":1,"address":"\u6d4b\u8bd5\u5730\u5740,\u8857\u9053\u5730\u5740"}})
     * @returnExample(true)
     *
     * @author wujunhua<wujunhua@eelly.net>
     * 
     * @since 2017-09-16
     */
    public function addEntity(array $data, UidDTO $user = null): bool
    {
        return EellyClient::request('service/entity', __FUNCTION__, true, $data, $user);
    }

    /**
     * 新增店铺实体认证数据.
     *
     * @param array  $data                新增数据
     * @param int    $data['storeId']     店铺ID
     * @param int    $data['sbId']        服务购买记录ID
     * @param string $data['name']        真实姓名
     * @param string $data['license']     身份证号码
     * @param string $data['mobile']      手机号
     * @param int    $data['gbCode']      地区编码
     * @param int    $data['districtId']  商圈ID
     * @param int    $data['marketId']    市场ID
     * @param int    $data['floorId']     楼层ID
     * @param string $data['stallName']   档口名称
     * @param string $data['stallNumber'] 档口号：如 301、301A、301-A
     * @param string $data['images']      租赁合同或使用权凭证照片：JSON格式
     * @param int    $data['secId']       店铺实体自定义ID
     * @param string $data['address']     街道地址
     * @param UidDTO $user                登录用户对象
     *
     * @throws \Eelly\SDK\Service\Exception\EntityException
     *
     * @return bool
     * @requestExample({"data":{"storeId":1,"name":"\u5e97\u94fa1","license":"440981198806232871","mobile":"13427587735","gbCode":"44020","districtId":"1","marketId":1,"floorId":3,"stallName":"\u7f8e\u7f8e\u5e97","stallNumber":"301-A","images":"[\"https:\\\/\\\/img03.eelly.com\\\/G04\\\/M00\\\/00\\\/98\\\/small_118_poYBAFjWXYaIWdWkAAJU9MtwDJgAAA7dgEx54sAAlUM236.jpg\",\"https:\\\/\\\/img03.eelly.com\\\/G02\\\/M00\\\/00\\\/BD\\\/small_118_ooYBAFjWXYqICR1yAAJWitxTD2AAABXRwMJp64AAlai106.jpg\"]","secId":1,"address":"\u6d4b\u8bd5\u5730\u5740,\u8857\u9053\u5730\u5740"}})
     * @returnExample(true)
     *
     * @author wujunhua<wujunhua@eelly.net>
     * 
     * @since 2017-09-16
     */
    public function addEntityAsync(array $data, UidDTO $user = null)
    {
        return EellyClient::request('service/entity', __FUNCTION__, false, $data, $user);
    }

    /**
     * 修改店铺实体认证数据.
     * 用于用户修改认证信息.
     *
     * @param array  $data                修改数据
     * @param int    $data['storeId']     店铺ID
     * @param int    $data['sbId']        服务购买记录ID
     * @param string $data['name']        真实姓名
     * @param string $data['license']     身份证号码
     * @param string $data['mobile']      手机号
     * @param int    $data['gbCode']      地区编码
     * @param int    $data['districtId']  商圈ID
     * @param int    $data['marketId']    市场ID
     * @param int    $data['floorId']     楼层ID
     * @param string $data['stallName']   档口名称
     * @param string $data['stallNumber'] 档口号：如 301、301A、301-A
     * @param string $data['images']      租赁合同或使用权凭证照片：JSON格式
     * @param int    $data['secId']       店铺实体自定义ID
     * @param string $data['address']     街道地址
     * @param UidDTO $user                登录用户对象
     *
     * @throws \Eelly\SDK\Service\Exception\EntityException
     *
     * @return bool
     * @requestExample({"data":{"storeId":1,"name":"\u5e97\u94fa1","license":"440981198806232871","mobile":"13427587735","gbCode":"44020","districtId":"1","marketId":1,"floorId":3,"stallName":"\u7f8e\u7f8e\u5e97","stallNumber":"301-A","images":"[\"https:\\\/\\\/img03.eelly.com\\\/G04\\\/M00\\\/00\\\/98\\\/small_118_poYBAFjWXYaIWdWkAAJU9MtwDJgAAA7dgEx54sAAlUM236.jpg\",\"https:\\\/\\\/img03.eelly.com\\\/G02\\\/M00\\\/00\\\/BD\\\/small_118_ooYBAFjWXYqICR1yAAJWitxTD2AAABXRwMJp64AAlai106.jpg\"]","secId":1,"address":"\u6d4b\u8bd5\u5730\u5740,\u8857\u9053\u5730\u5740","status":1}})
     * @returnExample(true)
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-16
     */
    public function updateEntity(array $data, UidDTO $user = null): bool
    {
        return EellyClient::request('service/entity', __FUNCTION__, true, $data, $user);
    }

    /**
     * 修改店铺实体认证数据.
     * 用于用户修改认证信息.
     *
     * @param array  $data                修改数据
     * @param int    $data['storeId']     店铺ID
     * @param int    $data['sbId']        服务购买记录ID
     * @param string $data['name']        真实姓名
     * @param string $data['license']     身份证号码
     * @param string $data['mobile']      手机号
     * @param int    $data['gbCode']      地区编码
     * @param int    $data['districtId']  商圈ID
     * @param int    $data['marketId']    市场ID
     * @param int    $data['floorId']     楼层ID
     * @param string $data['stallName']   档口名称
     * @param string $data['stallNumber'] 档口号：如 301、301A、301-A
     * @param string $data['images']      租赁合同或使用权凭证照片：JSON格式
     * @param int    $data['secId']       店铺实体自定义ID
     * @param string $data['address']     街道地址
     * @param UidDTO $user                登录用户对象
     *
     * @throws \Eelly\SDK\Service\Exception\EntityException
     *
     * @return bool
     * @requestExample({"data":{"storeId":1,"name":"\u5e97\u94fa1","license":"440981198806232871","mobile":"13427587735","gbCode":"44020","districtId":"1","marketId":1,"floorId":3,"stallName":"\u7f8e\u7f8e\u5e97","stallNumber":"301-A","images":"[\"https:\\\/\\\/img03.eelly.com\\\/G04\\\/M00\\\/00\\\/98\\\/small_118_poYBAFjWXYaIWdWkAAJU9MtwDJgAAA7dgEx54sAAlUM236.jpg\",\"https:\\\/\\\/img03.eelly.com\\\/G02\\\/M00\\\/00\\\/BD\\\/small_118_ooYBAFjWXYqICR1yAAJWitxTD2AAABXRwMJp64AAlai106.jpg\"]","secId":1,"address":"\u6d4b\u8bd5\u5730\u5740,\u8857\u9053\u5730\u5740","status":1}})
     * @returnExample(true)
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-16
     */
    public function updateEntityAsync(array $data, UidDTO $user = null)
    {
        return EellyClient::request('service/entity', __FUNCTION__, false, $data, $user);
    }

    /**
     * 审核店铺实体认证.
     * 用于管理员审核认证信息.
     *
     * @param int    $storeId 店铺ID
     * @param int    $status  处理状态：0 未处理 1 审核通过 2 审核失败 3 认证过期
     * @param UidDTO $user    登录用户对象
     *
     * @throws \Eelly\SDK\Service\Exception\EntityException
     *
     * @return bool
     * @requestExample({"storeId":1,"status":1})
     * @returnExample(true)
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-16
     */
    public function checkEntity(int $storeId, int $status, UidDTO $user = null): bool
    {
        return EellyClient::request('service/entity', __FUNCTION__, true, $storeId, $status, $user);
    }

    /**
     * 审核店铺实体认证.
     * 用于管理员审核认证信息.
     *
     * @param int    $storeId 店铺ID
     * @param int    $status  处理状态：0 未处理 1 审核通过 2 审核失败 3 认证过期
     * @param UidDTO $user    登录用户对象
     *
     * @throws \Eelly\SDK\Service\Exception\EntityException
     *
     * @return bool
     * @requestExample({"storeId":1,"status":1})
     * @returnExample(true)
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-16
     */
    public function checkEntityAsync(int $storeId, int $status, UidDTO $user = null)
    {
        return EellyClient::request('service/entity', __FUNCTION__, false, $storeId, $status, $user);
    }

    /**
     * 获取店铺实体认证地址.
     *
     * @param int $storeId      店铺id
     * @param int $addressType 店铺地址格式类型, 1:xx省xx市xx区xx商圈xx市场xx楼层xx号, 2:xx(省)xx(市)xx(区)xx市场xx楼层xx号, 3:xx省xx市xx区xx市场xx层xx号
     *
     * @throws EntityException
     *
     * @return string
     * @requestExample({"storeId":1,"addressType":1})
     * @returnExample("xx省xx市xx区xx商圈xx市场xx层xx号")
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     * @since  2017年11月25日
     */
    public function getEntityAddress(int $storeId, int $addressType): string
    {
        return EellyClient::request('service/entity', __FUNCTION__, true, $storeId, $addressType);
    }

    /**
     * 获取店铺实体认证地址.
     *
     * @param int $storeId      店铺id
     * @param int $addressType 店铺地址格式类型, 1:xx省xx市xx区xx商圈xx市场xx楼层xx号, 2:xx(省)xx(市)xx(区)xx市场xx楼层xx号, 3:xx省xx市xx区xx市场xx层xx号
     *
     * @throws EntityException
     *
     * @return string
     * @requestExample({"storeId":1,"addressType":1})
     * @returnExample("xx省xx市xx区xx商圈xx市场xx层xx号")
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     * @since  2017年11月25日
     */
    public function getEntityAddressAsync(int $storeId, int $addressType)
    {
        return EellyClient::request('service/entity', __FUNCTION__, false, $storeId, $addressType);
    }

    /**
     * 新增店铺实体认证数据.
     *
     * @param array  $data                新增数据
     * @param int    $data['storeId']     店铺ID
     * @param string $data['name']        真实姓名
     * @param string $data['license']     身份证号码
     * @param string $data['mobile']      手机号
     * @param int    $data['gbCode']      地区编码
     * @param int    $data['districtId']  商圈ID
     * @param int    $data['marketId']    市场ID
     * @param int    $data['floorId']     楼层ID
     * @param string $data['stallName']   档口名称
     * @param string $data['stallNumber'] 档口号：如 301、301A、301-A
     * @param string $data['images']      租赁合同或使用权凭证照片：JSON格式
     * @param int    $data['secId']       店铺实体自定义ID
     * @param string $data['address']     街道地址
     * @param UidDTO $user                登录用户对象
     *
     * @throws \Eelly\SDK\Service\Exception\EntityException
     *
     * @return bool
     * @requestExample()
     * @returnExample()
     *
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年12月11日
     */
    public function applyEntityData(array $data, UidDTO $user = null): bool
    {
        return EellyClient::request('service/entity', __FUNCTION__, true, $data, $user);
    }

    /**
     * 新增店铺实体认证数据.
     *
     * @param array  $data                新增数据
     * @param int    $data['storeId']     店铺ID
     * @param string $data['name']        真实姓名
     * @param string $data['license']     身份证号码
     * @param string $data['mobile']      手机号
     * @param int    $data['gbCode']      地区编码
     * @param int    $data['districtId']  商圈ID
     * @param int    $data['marketId']    市场ID
     * @param int    $data['floorId']     楼层ID
     * @param string $data['stallName']   档口名称
     * @param string $data['stallNumber'] 档口号：如 301、301A、301-A
     * @param string $data['images']      租赁合同或使用权凭证照片：JSON格式
     * @param int    $data['secId']       店铺实体自定义ID
     * @param string $data['address']     街道地址
     * @param UidDTO $user                登录用户对象
     *
     * @throws \Eelly\SDK\Service\Exception\EntityException
     *
     * @return bool
     * @requestExample()
     * @returnExample()
     *
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年12月11日
     */
    public function applyEntityDataAsync(array $data, UidDTO $user = null)
    {
        return EellyClient::request('service/entity', __FUNCTION__, false, $data, $user);
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