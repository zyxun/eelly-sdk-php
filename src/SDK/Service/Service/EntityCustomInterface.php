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
interface EntityCustomInterface
{
    /**
     * 新增店铺实体认证自定义商圈市场楼层信息.
     *
     * @param array $data 新增数据
     * @param string $data['custom_market']
     * @param string $data['custom_floor']
     * @param UidDTO $user   登录用户对象
     * @return bool 
     * @requestExample({"data":{"custom_market":"\u767d\u767d\u5417\u6279\u53d1\u5e02\u573a","custom_floor":"18\u697c"}})
     * @returnExample(true)
     * @throws Eelly\SDK\Service\Exception\EntityCustomException 701001 参数错误
     * @throws Eelly\SDK\Service\Exception\EntityCustomException 700001 用户未登录
     * @throws Eelly\SDK\Service\Exception\EntityCustomException 703001 插入数据失败
     * @author fenghaikun<fenghaikun@eelly.net>
     * @since 2017-8-02
     */
    public function addEntityCustom(array $data,UidDTO $user=null):bool;
    
    /**
     * 获取指定ID的单条增值服务清单.
     *
     * @param int $secId 自定义信息ID
     * @return array 
     * @requestExample({"secId":1})
     * @returnExample({"service_id":1,"custom_market":"\u767d\u767d\u5417\u6279\u53d1\u5e02\u573a","custom_floor":"18\u697c","status":1,"created_time":1458093605})
     * @throws Eelly\SDK\Service\Exception\EntityCustomException 701001 参数错误
     * @throws Eelly\SDK\Service\Exception\EntityCustomException 702001 数据不存在
     * @author fenghaikun<fenghaikun@eelly.net>
     * @since 2017-8-02
     */
    public function getEntityCustom(int $secId):array;
    
    /**
     * 修改自定义信息.
     * 修改自定义信息，包括处理状态
     *
     * @param array $data list的数据
     * @param string $data['custom_market']
     * @param string $data['custom_floor']
     * @param int $data['status']
     * @param int $data['created_time']
     * @param UidDTO $user   登录用户对象
     * @return array 
     * @requestExample({"data":{"service_id":1,"custom_market":"\u767d\u767d\u5417\u6279\u53d1\u5e02\u573a","custom_floor":"18\u697c","status":1}})
     * @returnExample(true)
     * @throws Eelly\SDK\Service\Exception\EntityCustomException 701001 参数错误
     * @throws Eelly\SDK\Service\Exception\EntityCustomException 700001 用户未登录
     * @throws Eelly\SDK\Service\Exception\EntityCustomException 704001 更新数据失败
     * @author fenghaikun<fenghaikun@eelly.net>
     * @since 2017-8-02
     */
    public function updateEntityCustom(array $data,UidDTO $user=null):bool;

}