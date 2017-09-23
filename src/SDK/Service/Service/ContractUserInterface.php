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
use Eelly\SDK\Service\DTO\ContractUserDTO;

/**
 * 用户合同签订记录.
 * 
 * @author eellytools<localhost.shell@gmail.com>
 */
interface ContractUserInterface
{
    /**
     * 获取指定ID的用户合同签订记录.
     *
     * @param int    $scuId 用户合同签订记录ID
     * @param UidDTO $user  登录用户对象
     *
     * @throws \Eelly\SDK\Service\Exception\ContractUserException
     *
     * @return ContractUserDTO
     * @requestExample({"scuId":1})
     * @returnExample({"scuId":1,"storeId":1,"partyBName":"乙方名称","partyBAddress":"乙方地址","partyBPhone":"乙方联系电话",
     *     "name":"合同版本名称","timeLimit":"合同期限","money":10,"discount":0.5,"serviceIds":"服务集合","versionNo":"合同编号前缀",
     *     "number":"合同编号","startTime":1504935775,"endTime":1504935775,"payTime":1504935775,"status":1,"payType":1,"payStyle":1,
     *     "createdTime":1504935775})
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-09
     */
    public function getContractUser(int $scuId, UidDTO $user = null): ContractUserDTO;

    /**
     * 新增用户合同签订记录.
     *
     * @param array  $data                  新增数据
     * @param string $data['partyBName']    乙方名称，默认取用户姓名、帐号
     * @param string $data['partyBAddress'] 乙方地址，默认取user_extend表用户地址
     * @param string $data['partyBPhone']   乙方联系电话，默认取用户绑定手机号
     * @param int    $data['scnId']         合同编号ID
     * @param int    $data['startTime']     合同开始时间
     * @param int    $data['endTime']       合同结束时间
     * @param UidDTO $user                  登录用户对象
     *
     * @throws \Eelly\SDK\Service\Exception\ContractUserException
     *
     * @return bool 新增结果
     * @requestExample({"data":{"partyBName":"乙方名称","partyBAddress":"乙方地址","partyBPhone":"乙方联系电话","scnId":1,"startTime":1504935775,"endTime":1504935775}})
     * @returnExample(true)
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-09
     */
    public function addContractUser(array $data, UidDTO $user = null): bool;

    /**
     * 修改用户合同签订记录.
     *
     * @param int    $scuId                 用户合同签订记录ID
     * @param array  $data                  修改数据
     * @param string $data['partyBName']    乙方名称，默认取用户姓名、帐号
     * @param string $data['partyBAddress'] 乙方地址，默认取user_extend表用户地址
     * @param string $data['partyBPhone']   乙方联系电话，默认取用户绑定手机号
     * @param int    $data['scnId']         合同编号ID
     * @param int    $data['startTime']     合同开始时间
     * @param int    $data['endTime']       合同结束时间
     * @param UidDTO $user                  登录用户对象
     *
     * @throws \Eelly\SDK\Service\Exception\ContractUserException
     *
     * @return bool 修改结果
     * @requestExample({"scuId":1,"data":{"partyBName":"乙方名称","partyBAddress":"乙方地址","partyBPhone":"乙方联系电话","scnId":1,"startTime":1504935775,"endTime":1504935775}})
     * @returnExample(true)
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-09
     */
    public function updateContractUser(int $scuId, array $data, UidDTO $user = null): bool;

    /**
     * 分页获取用户合同签订记录列表.
     *
     * @param array  $condition   查询条件
     * @param int    $currentPage 当前页码
     * @param int    $limit       每页条数
     * @param UidDTO $user        登录用户对象
     *
     * @throws \Eelly\SDK\Service\Exception\ContractUserException
     *
     * @return array
     * @requestExample()
     * @returnExample({"item":[{"scuId":1,"storeId":1,"partyBName":"乙方名称","partyBAddress":"乙方地址","partyBPhone":"乙方联系电话",
     *     "name":"合同版本名称","timeLimit":"合同期限","money":10,"discount":0.5,"serviceIds":"服务集合","versionNo":"合同编号前缀",
     *     "number":"合同编号","startTime":1504935775,"endTime":1504935775,"payTime":1504935775,"status":1,"payType":1,"payStyle":1,
     *     "createdTime":1504935775}],"page":{"first":1,"before":1,"current":1,"last":1,"next":1,"totalPages":1,"totalItems":1,"limit":1}})
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-09
     */
    public function listContractUserPage(array $condition = [], int $currentPage = 1, int $limit = 10, UidDTO $user = null): array;
}
