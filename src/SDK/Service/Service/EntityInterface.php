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

namespace Eelly\SDK\Service\Service;

use Eelly\DTO\UidDTO;
use Eelly\SDK\Service\DTO\EntityDTO;

/**
 * 实体认证.
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface EntityInterface
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
    public function getEntity(int $storeId): EntityDTO;

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
    public function addEntity(array $data, UidDTO $user = null): bool;

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
    public function updateEntity(array $data, UidDTO $user = null): bool;

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
    public function checkEntity(int $storeId, int $status, UidDTO $user = null): bool;
}
