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

namespace Eelly\SDK\System\Service;

use Eelly\SDK\System\DTO\KeyDTO;

/**
 * @author zhangyingdi<zhangyingdi@gmail.com>
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
     * @returnExample({"keyId":1,"code":"test", "name":"测试编码","desc":"这个编码是测试数据","status":1,"createdTime":1503560249})
     * @throws \Eelly\SDK\System\Exception\SystemException
     * 
     * @author zhangyingdi<zhangyingdi@gmail.com>
     * @since  2017-8-29
     */
    public function getKeyByKeyId(int $keyId): KeyDTO;

    /**
     * 根据传过来的字典编码，返回对应的参数信息
     * 
     * @param int $code  参数主键id
     * 
     * @return array 
     * @requestExample({"code":"test"})
     * @returnExample({"keyId":1,"code":"test", "name":"测试编码","desc":"这个编码是测试数据","status":1,"createdTime":1503560249})
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     * @since  2017-8-29
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
     * @param int     $data['createdTime']   创建时间
     *
     * @throws \Eelly\SDK\System\Exception\KeyException
     *
     * @return bool
     * @requestExample({"data":{"code":"test", "name":"测试编码","desc":"这个编码是测试数据","status":1,"createdTime":1503560249}})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     * @since  2017-8-29
     */
    public function addKey(array $data): bool;

    /**
     * 更新系统字典code参数
     *
     * @param int     $keyId                 字典参数主键id
     * @param array   $data                  字典参数数据
     * @param string  $data['code']          参数编码
     * @param string  $data['name']          参数名称
     * @param string  $data['desc']          参数描述
     * @param int     $data['status']        参数状态：(0 无效 1 有效)
     *
     * @throws \Eelly\SDK\System\Exception\KeyException
     *
     * @return bool
     * @requestExample({"keyId":10,"data":{"code":"test", "name":"测试编码","desc":"这个编码是测试数据","status":1}})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     * @since  2017-8-29
     */
    public function updateKey(int $keyId, array $data): bool;

    /*
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    //public function listKeyPage(array $condition = [], int $limit = 10, int $currentPage = 1): array;
}
