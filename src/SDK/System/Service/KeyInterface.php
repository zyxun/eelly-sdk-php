<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\System\Service;

use Eelly\SDK\System\DTO\KeyDTO;


/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface KeyInterface
{

    /**
     * 根据传过来的主键id，返回对应的参数信息
     * 
     * @param int $keyId  参数主键id
     * 
     * @return array 
     * @requestExample({"keyId":1})
     * @returnExample({"key_id":1,"code":"test", "name":"测试编码","desc":"这个编码是测试数据","status":1,"created_time":1503560249})
     * @throws Eelly\SDK\Service\Exception\ServiceException 701001 参数错误
     * @throws Eelly\SDK\Service\Exception\ServiceException 702001 数据不存在
     * 
     * @author zhangyingdi<zhangyingdi@gmail.com>
     */
    public function getKeyByKeyId(int $keyId): KeyDTO;
    
    /**
     * 根据传过来的字典编码，返回对应的参数信息
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getKeyByCode(string $code): KeyDTO;

    /**
     * 新增系统字典code参数
     * 
     * @param array   $data                  字典参数数据
     * @param string  $data['code']          参数编码
     * @param string  $data['name']          参数名称
     * @param string  $data['desc']          参数描述
     * @param int     $data['status']        参数状态：(0 无效 1 有效)
     * @param int     $data['created_time']  创建时间
     * 
     * @throws \Eelly\SDK\System\Exception\KeyException 701001 参数错误
     *
     * @return bool
     * @requestExample({"data":{"code":"test", "name":"测试编码","desc":"这个编码是测试数据","status":1,"created_time":1503560249}})
     * @returnExample(true)
     * 
     * @author zhangyingdi<zhangyingdi@gmail.com>
     */
    public function addKey(array $data): bool;

    /**
     * 修改系统字典参数数据
     * 
     * @param int     $KeyId                 参数主键id
     * @param array   $data                  字典参数数据
     * @param string  $data['code']          参数编码
     * @param string  $data['name']          参数名称
     * @param string  $data['desc']          参数描述
     * @param int     $data['status']        参数状态：(0 无效 1 有效)
     * @param int     $data['created_time']  创建时间
     * 
     * @throws \Eelly\SDK\System\Exception\KeyException 701001 参数错误
     * 
     * @return bool
     * @requestExample({"keyId":1,"data":{"code":"test", "name":"测试编码","desc":"这个编码是测试数据","status":1,"created_time":1503560249}})
     * @returnExample(true)
     * 
     * @author zhangyingdi<zhangyingdi@gmail.com>
     */
    public function updateKey(int $keyId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    //public function listKeyPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;


}