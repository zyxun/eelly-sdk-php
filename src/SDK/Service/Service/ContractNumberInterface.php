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
interface ContractNumberInterface
{

    /**
     * 新增合同编号.
     *
     * @param array $data 新增数据
     * @param UidDTO $user   登录用户对象
     * @return array 
     * @requestExample()
     * @returnExample()
     *
     * @author fenghaikun<fenghaikun@eelly.net>
     * @since 2017-8-02
     */
    public function addContractNumber(array $data,UidDTO $user=null):array;
    
    /**
     * 获取指定ID的合同编号.
     *
     * @param int $scnId 合同编号ID
     * @return array 
     * @requestExample()
     * @returnExample()
     *
     * @author fenghaikun<fenghaikun@eelly.net>
     * @since 2017-8-02
     */
    public function getContractNumber(int $scnId):array;
    
    /**
     * 修改合同编号.
     * 修改信息，包括状态
     *
     * @param array $data list的数据
     * @param UidDTO $user   登录用户对象
     * @return array 
     * @requestExample()
     * @returnExample()
     *
     * @author fenghaikun<fenghaikun@eelly.net>
     * @since 2017-8-02
     */
    public function updateContractNumber(array $data,UidDTO $user=null):array;
   
    /**
     * 获取合同编号列表.
     * @param array $condition 查询条件
     * @param int $limit 每页页数
     * @param int $currentPage 当前页
     * @param UidDTO $user   登录用户对象
     * @return array 
     * @requestExample()
     * @returnExample()
     *
     * @author fenghaikun<fenghaikun@eelly.net>
     * @since 2017-8-02
     */
    public function listContractNumberPage(array $condition = [],int $limit = 10, int $currentPage = 1,UidDTO $user=null):array;
    


}