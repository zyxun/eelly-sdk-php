<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Service\Service;

use Eelly\DTO\UidDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface EntityInterface
{
    /**
     * 新增店铺实体认证数据.
     *
     * @param array $data 认证数据
     * @param int $data['store_id']
     * @param string $data['name']
     * @param string $data['license']
     * @param string $data['mobile']
     * @param int $data['gb_code']
     * @param int $data['district_id']
     * @param int $data['market_id']
     * @param int $data['floor_id']
     * @param string $data['stall_name']
     * @param string $data['stall_number']
     * @param string $data['images']
     * @param int $data['sec_id']
     * @param string $data['address']
     * @param UidDTO $user   登录用户对象
     * @return array 
     * @requestExample({"data":{"store_id":1,"name":"\u5e97\u94fa1","license":"440981198806232871","mobile":"13427587735","gb_code":"44020","district_id":"1","market_id":1,"floor_id":3,"stall_name":"\u7f8e\u7f8e\u5e97","stall_number":"301-A","images":"[\"https:\\\/\\\/img03.eelly.com\\\/G04\\\/M00\\\/00\\\/98\\\/small_118_poYBAFjWXYaIWdWkAAJU9MtwDJgAAA7dgEx54sAAlUM236.jpg\",\"https:\\\/\\\/img03.eelly.com\\\/G02\\\/M00\\\/00\\\/BD\\\/small_118_ooYBAFjWXYqICR1yAAJWitxTD2AAABXRwMJp64AAlai106.jpg\"]","sec_id":1,"address":"\u6d4b\u8bd5\u5730\u5740,\u8857\u9053\u5730\u5740"}})
     * @returnExample(true)
     * @throws Eelly\SDK\Service\Exception\EntityException 701001 参数错误
     * @throws Eelly\SDK\Service\Exception\EntityException 700001 用户未登录
     * @throws Eelly\SDK\Service\Exception\EntityException 703001 插入数据失败
     * @author fenghaikun<fenghaikun@eelly.net>
     * @since 2017-8-02
     */
    public function addEntity(array $data,UidDTO $user=null):bool;
   
    /**
     * 修改店铺实体认证数据.
     * 用于用户修改认证信息
     *
     * @param array $data 认证数据
     * @param int $data['store_id']
     * @param string $data['name']
     * @param string $data['license']
     * @param string $data['mobile']
     * @param int $data['gb_code']
     * @param int $data['district_id']
     * @param int $data['market_id']
     * @param int $data['floor_id']
     * @param string $data['stall_name']
     * @param string $data['stall_number']
     * @param string $data['images']
     * @param int $data['sec_id']
     * @param string $data['address']
     * @param UidDTO $user   登录用户对象
     * @return array 
     * @requestExample({"data":{"store_id":1,"name":"\u5e97\u94fa1","license":"440981198806232871","mobile":"13427587735","gb_code":"44020","district_id":"1","market_id":1,"floor_id":3,"stall_name":"\u7f8e\u7f8e\u5e97","stall_number":"301-A","images":"[\"https:\\\/\\\/img03.eelly.com\\\/G04\\\/M00\\\/00\\\/98\\\/small_118_poYBAFjWXYaIWdWkAAJU9MtwDJgAAA7dgEx54sAAlUM236.jpg\",\"https:\\\/\\\/img03.eelly.com\\\/G02\\\/M00\\\/00\\\/BD\\\/small_118_ooYBAFjWXYqICR1yAAJWitxTD2AAABXRwMJp64AAlai106.jpg\"]","sec_id":1,"address":"\u6d4b\u8bd5\u5730\u5740,\u8857\u9053\u5730\u5740","status":1}})
     * @returnExample(true)
     * @throws Eelly\SDK\Service\Exception\EntityException 701001 参数错误
     * @throws Eelly\SDK\Service\Exception\EntityException 700001 用户未登录
     * @throws Eelly\SDK\Service\Exception\EntityException 704001 更新数据失败
     * @author fenghaikun<fenghaikun@eelly.net>
     * @since 2017-8-02
     */
    public function updateEntity(array $data,UidDTO $user=null):bool;
    /**
     * 审核店铺实体认证.
     * 用于管理员审核认证信息
     * @param int $storeId 店铺ID
     * @param UidDTO $user   登录用户对象
     * 
     * @return array 
     * @requestExample({"storeId":1})
     * @returnExample(true)
     * @throws Eelly\SDK\Service\Exception\EntityException 701001 参数错误
     * @throws Eelly\SDK\Service\Exception\EntityException 700001 用户未登录
     * @throws Eelly\SDK\Service\Exception\EntityException 700002 无权限操作
     * @throws Eelly\SDK\Service\Exception\EntityException 702001 数据不存在
     * @throws Eelly\SDK\Service\Exception\EntityException 704001 更新数据失败
     * @author fenghaikun<fenghaikun@eelly.net>
     * @since 2017-8-02
     */
    public function checkEntity(int $storeId,UidDTO $user=null):bool;
    
    /**
     * 获取一条店铺实体认证记录.
     *
     * @param int $storeId 店铺ID
     * 
     * @return array 
     * @requestExample({"storeId":1})
     * @returnExample({"store_id":1,"name":"\u5e97\u94fa1","license":"440981198806232871","mobile":"13427587735","gb_code":"44020","district_id":"1","market_id":1,"floor_id":3,"stall_name":"\u7f8e\u7f8e\u5e97","stall_number":"301-A","images":"[\"https:\\\/\\\/img03.eelly.com\\\/G04\\\/M00\\\/00\\\/98\\\/small_118_poYBAFjWXYaIWdWkAAJU9MtwDJgAAA7dgEx54sAAlUM236.jpg\",\"https:\\\/\\\/img03.eelly.com\\\/G02\\\/M00\\\/00\\\/BD\\\/small_118_ooYBAFjWXYqICR1yAAJWitxTD2AAABXRwMJp64AAlai106.jpg\"]","sec_id":1,"address":"\u6d4b\u8bd5\u5730\u5740,\u8857\u9053\u5730\u5740","status":1,"created_time":1458093605})
     * @throws Eelly\SDK\Service\Exception\EntityException 701001 参数错误
     * @throws Eelly\SDK\Service\Exception\EntityException 702001 数据不存在
     * @author fenghaikun<fenghaikun@eelly.net>
     * @since 2017-8-02
     */
    public function getEntity(int $storeId):array;

}