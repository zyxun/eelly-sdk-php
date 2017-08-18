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


/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface BrandInterface
{
    /**
     * 新增品牌认证数据.
     *
     * @param array $data 认证数据
     * @param int $data['store_id']
     * @param string $data['name']
     * @param string $data['license']
     * @param string $data['mobile']
     * @param string $data['brand']
     * @param string $data['trademark']
     * @param string $data['certificate']
     * @param UidDTO $user   登录用户对象
     * 
     * @return bool 
     * @requestExample({"data":{"store_id":1,"name":"\u5b9e\u4f53\u8ba4\u8bc1","license":0,"mobile":1,"brand":7,"trademark":"service_entity","certificate":1,"status":1}})
     * @returnExample(true)
     * @throws Eelly\SDK\Service\Exception\BrandException 700001 用户未登录
     * @throws Eelly\SDK\Service\Exception\BrandException 701001 参数错误
     * @throws Eelly\SDK\Service\Exception\BrandException 703001 插入数据失败
     * @author fenghaikun<fenghaikun@eelly.net>
     * @since 2017-8-02
     */
    public function addBrand(array $data,UidDTO $user=null):bool;
   
    /**
     * 修改品牌认证数据.
     * 用于用户修改认证信息
     *
     * @param array $data 认证数据
     * @param int $data['store_id']
     * @param string $data['name']
     * @param string $data['license']
     * @param string $data['mobile']
     * @param string $data['brand']
     * @param string $data['trademark']
     * @param string $data['certificate']
     * @param UidDTO $user   登录用户对象
     * 
     * @return bool 
     * @requestExample({"data":{"store_id":1,"name":"\u5b9e\u4f53\u8ba4\u8bc1","license":0,"mobile":1,"brand":7,"trademark":"service_entity","certificate":1,"status":1}})
     * @returnExample(true)
     * @throws Eelly\SDK\Service\Exception\BrandException 700001 用户未登录
     * @throws Eelly\SDK\Service\Exception\BrandException 701001 参数错误
     * @throws Eelly\SDK\Service\Exception\BrandException 704001 更新数据失败
     * @author fenghaikun<fenghaikun@eelly.net>
     * @since 2017-8-02
     */
    public function updateBrand(array $data,UidDTO $user=null):bool;
    
    /**
     * 审核品牌认证数据.
     * 用于管理员审核认证信息
     *
     * @param int $storeId 店铺ID
     * @param UidDTO $user   登录用户对象
     * @return bool 
     * @requestExample({"storeId":1})
     * @returnExample(true)
     * @throws Eelly\SDK\Service\Exception\BrandException 700001 用户未登录
     * @throws Eelly\SDK\Service\Exception\BrandException 700002 无权限操作
     * @throws Eelly\SDK\Service\Exception\BrandException 701001 参数错误
     * @throws Eelly\SDK\Service\Exception\BrandException 702001 数据不存在
     * @author fenghaikun<fenghaikun@eelly.net>
     * @since 2017-8-02
     */
    public function checkBrand(int $storeId,UidDTO $user=null):bool;
    
    /**
     * 获取一条品牌认证数据记录.
     *
     * @param int $storeId 店铺ID
     * 
     * @return array 
     * @requestExample({"storeId":1})
     * @returnExample({"store_id":1,"name":"\u5e97\u94fa1","license":"440981198806232871","mobile":"13427587735","brand":"sixdec","trademark":"[\"https:\\\/\\\/img03.eelly.com\\\/G04\\\/M00\\\/00\\\/98\\\/small_118_poYBAFjWXYaIWdWkAAJU9MtwDJgAAA7dgEx54sAAlUM236.jpg\",\"https:\\\/\\\/img03.eelly.com\\\/G02\\\/M00\\\/00\\\/BD\\\/small_118_ooYBAFjWXYqICR1yAAJWitxTD2AAABXRwMJp64AAlai106.jpg\"]","certificate":"[\"https:\\\/\\\/img03.eelly.com\\\/G04\\\/M00\\\/00\\\/98\\\/small_118_poYBAFjWXYaIWdWkAAJU9MtwDJgAAA7dgEx54sAAlUM236.jpg\",\"https:\\\/\\\/img03.eelly.com\\\/G02\\\/M00\\\/00\\\/BD\\\/small_118_ooYBAFjWXYqICR1yAAJWitxTD2AAABXRwMJp64AAlai106.jpg\"]","status":1,"created_time":1458093605})
     * @throws Eelly\SDK\Service\Exception\BrandException 701001 参数错误
     * @throws Eelly\SDK\Service\Exception\BrandException 702001 数据不存在
     * @author fenghaikun<fenghaikun@eelly.net>
     * @since 2017-8-02
     */
    public function getBrand(int $storeId):array;
    
}