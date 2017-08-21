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
interface ListsInterface
{
    /**
     * 获取增值服务清单.
     *
     * @param array $condition 查询条件
     * @param int $limit 每页页数
     * @param int $currentPage 当前页
     * @param UidDTO $user   登录用户对象
     * @return array 
     * @requestExample()
     * @returnExample()
     * @throws
     * @author fenghaikun<fenghaikun@eelly.net>
     * @since 2017-8-02
     */
    public function listServiceList(array $condition = [],int $limit = 10, int $currentPage = 1,UidDTO $user=null):array;
    
    /**
     * 新增增值服务清单.
     *
     * @param array $data list的数据
     * @param UidDTO $user   登录用户对象
     * @return array 
     * @requestExample()
     * @returnExample()
     * @throws
     * @author fenghaikun<fenghaikun@eelly.net>
     * @since 2017-8-02
     */
    public function addServiceList(array $data,UidDTO $user=null):array;
    
    /**
     * 修改增值服务清单.
     * 修改list的数据，包含（假）删除等
     *
     * @param array $data list的数据
     * @param UidDTO $user   登录用户对象
     * @return array 
     * @requestExample()
     * @returnExample()
     * @throws
     * @author fenghaikun<fenghaikun@eelly.net>
     * @since 2017-8-02
     */
    public function updateServiceList(array $data,UidDTO $user=null):array;
    
    /**
     * 获取指定ID的单条增值服务清单.
     *
     * @param int $slId 服务清单ID
     * @return array 
     * @requestExample()
     * @returnExample()
     * @throws
     * @author fenghaikun<fenghaikun@eelly.net>
     * @since 2017-8-02
     */
    public function getServiceList(int $slId):array;

}