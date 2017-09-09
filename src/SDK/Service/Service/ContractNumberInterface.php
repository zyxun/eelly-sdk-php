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

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface ContractNumberInterface
{

    /**
     * 新增合同编号
     *
     * @param int    $scId   合同版本ID
     * @param int    $number 新增合同编号数量
     * @param UidDTO $user   登录用户对象
     *
     * @throws \Eelly\SDK\Service\Exception\ContractNumberException
     *
     * @return bool 新增结果
     * @requestExample({"versionNo":"合同版本号","number":10})
     * @returnExample(true)
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-08
     */
    public function addContractNumber(int $scId, int $number, UidDTO $user = null): bool;

    /**
     * 获取合同编号列表
     *
     * @param array  $condition              查询条件
     * @param string $condition['number']    合同编号
     * @param string $condition['versionNo'] 版本号
     * @param int    $condition['status']    编号状态
     * @param int    $currentPage            当前页码
     * @param int    $limit                  每页条数
     * @param UidDTO $user                   登录用户对象
     *
     * @throws \Eelly\SDK\Service\Exception\ContractNumberException
     *
     * @return array 列表信息
     * @requestExample({"condition":{"number":"合同编号","versionNo":"版本号","status":0}})
     * @returnExample({"item":[{"scnId":1,"number":"合同编号","status":0,"versionNo":1}],"page":{"first":1,"before":1,"current":1,"last":1,"next":1,"totalPages":1,"totalItems":1,"limit":1}})
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-08
     */
    public function listContractNumberPage(array $condition = [], int $currentPage = 1, int $limit = 10, UidDTO $user = null): array;

    /**
     * 解绑合同编号
     *
     * @param int    $scnId 合同编号id
     * @param UidDTO $user  登录用户对象
     *
     * @throws \Eelly\SDK\Service\Exception\ContractNumberException
     *
     * @return bool 解绑结果
     * @requestExample({"scnId":1})
     * @returnExample(true)
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-08
     */
    public function unbindContractNumber(int $scnId, UidDTO $user = null): bool;

}

