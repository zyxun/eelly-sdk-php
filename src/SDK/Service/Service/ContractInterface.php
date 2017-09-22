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
use Eelly\SDK\Service\DTO\ContractDTO;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface ContractInterface
{
    /**
     * 获取指定ID的合同版本.
     *
     * @param int    $scId 合同版本ID
     * @param UidDTO $user 登录用户对象
     *
     * @throws \Eelly\SDK\Service\Exception\ContractException
     *
     * @return ContractDTO
     * @requestExample({"scId":1})
     * @returnExample({"scId":1,"type":1,"name":"版本名称","timeLimit":1,"money":2,"discount":0.1,"serviceIds":"1,2","status":1,"versionNo":"版本号前缀"})
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-08
     */
    public function getContract(int $scId, UidDTO $user = null): ContractDTO;

    /**
     * 新增合同版本.
     *
     * @param array  $data               新增数据
     * @param int    $data['type']       服务对象：1 店+(下游买家) 2 厂+(上游卖家)
     * @param string $data['name']       版本名称
     * @param int    $data['timeLimit']  合同期限：表示N个月，大于0
     * @param int    $data['money']      收费金额，单位为分
     * @param float  $data['discount']   折扣：0<=X<=1，0和1都表示无折扣
     * @param string $data['serviceIds'] 服务集合：格式 sl_id,sl_id
     * @param int    $data['status']     状态：0 未启用 1 前后台启用显示 2 只后台启用显示
     * @param string $data['versionNo']  合同编号前缀
     * @param UidDTO $user               登录用户对象
     *
     * @throws \Eelly\SDK\Service\Exception\ContractException
     *
     * @return bool 新增结果
     * @requestExample({"data":{"type":1,"name":"版本名称","timeLimit":1,"money":2,"discount":0.1,"serviceIds":"1,2","status":1,"versionNo":"版本号前缀"}})
     * @returnExample(true)
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-08
     */
    public function addContract(array $data, UidDTO $user = null): bool;

    /**
     * 修改合同版本
     * 修改自定义信息，包括状态
     *
     * @param int    $scId               合同版本ID
     * @param array  $data               修改数据
     * @param int    $data['type']       服务对象：1 店+(下游买家) 2 厂+(上游卖家)
     * @param string $data['name']       版本名称
     * @param int    $data['timeLimit']  合同期限：表示N个月，大于0
     * @param int    $data['money']      收费金额，单位为分
     * @param float  $data['discount']   折扣：0<=X<=1，0和1都表示无折扣
     * @param string $data['serviceIds'] 服务集合：格式 sl_id,sl_id
     * @param int    $data['status']     状态：0 未启用 1 前后台启用显示 2 只后台启用显示
     * @param string $data['versionNo']  合同编号前缀
     * @param UidDTO $user               登录用户对象
     *
     * @throws \Eelly\SDK\Service\Exception\ContractException
     *
     * @return bool 修改结果
     * @requestExample({"scId":1,"data":{"type":1,"name":"版本名称","timeLimit":1,"money":2,"discount":0.1,"serviceIds":"1,2","status":1,"versionNo":"版本号前缀"}})
     * @returnExample(true)
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-08
     */
    public function updateContract(int $scId, array $data, UidDTO $user = null): bool;

    /**
     * 获取合同版本列表.
     *
     * @param array $condition   查询条件
     * @param int   $currentPage 当前页码
     * @param int   $limit       每页条数
     *
     * @throws \Eelly\SDK\Service\Exception\ContractException
     *
     * @return array
     * @requestExample()
     * @returnExample({"item":[{"scId":1,"type":1,"name":"版本名称","timeLimit":1,"money":2,"discount":0.1,"serviceIds":"1,2","status":1}],"page":{"first":1,"before":1,"current":1,"last":1,"next":1,"totalPages":1,"totalItems":1,"limit":1}})
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-08
     */
    public function listContractPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;

    /**
     * 改变合同版本状态
     *
     * @param int    $scId   合同版本id
     * @param int    $status 状态：0 未启用 1 前后台启用显示 2 只后台启用显示
     * @param UidDTO $user   登录用户对象
     *
     * @throws \Eelly\SDK\Service\Exception\ContractException
     *
     * @return bool 更改结果
     * @requestExample({"scId":1,"status":1})
     * @returnExample(true)
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-08
     */
    public function changeContractStatus(int $scId, int $status, UidDTO $user = null): bool;
}
