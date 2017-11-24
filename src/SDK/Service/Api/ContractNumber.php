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

namespace Eelly\SDK\Service\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Service\Service\ContractNumberInterface;
use Eelly\SDK\Service\DTO\ContractNumberDTO;
use Eelly\DTO\UidDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class ContractNumber implements ContractNumberInterface
{
    /**
     * 获取指定ID的合同编号.
     *
     * @param int $scnId 合同编号ID
     *
     * @throws \Eelly\SDK\Service\Exception\ContractNumberException
     *
     * @return ContractNumberDTO
     * @requestExample({"scId":1})
     * @returnExample({"scnId":1,"scId":1,"number":"合同编号","status":1})
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-27
     */
    public function getContractNumber(int $scnId): ContractNumberDTO
    {
        return EellyClient::request('service/contractNumber', __FUNCTION__, true, $scnId);
    }

    /**
     * 获取指定ID的合同编号.
     *
     * @param int $scnId 合同编号ID
     *
     * @throws \Eelly\SDK\Service\Exception\ContractNumberException
     *
     * @return ContractNumberDTO
     * @requestExample({"scId":1})
     * @returnExample({"scnId":1,"scId":1,"number":"合同编号","status":1})
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-27
     */
    public function getContractNumberAsync(int $scnId)
    {
        return EellyClient::request('service/contractNumber', __FUNCTION__, false, $scnId);
    }

    /**
     * 新增合同编号.
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
    public function addContractNumber(int $scId, int $number, UidDTO $user = null): bool
    {
        return EellyClient::request('service/contractNumber', __FUNCTION__, true, $scId, $number, $user);
    }

    /**
     * 新增合同编号.
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
    public function addContractNumberAsync(int $scId, int $number, UidDTO $user = null)
    {
        return EellyClient::request('service/contractNumber', __FUNCTION__, false, $scId, $number, $user);
    }

    /**
     * 获取合同编号列表.
     *
     * @param array  $condition              查询条件
     * @param string $condition['number']    合同编号
     * @param string $condition['versionNo'] 版本号
     * @param int    $condition['status']    编号状态
     * @param int    $currentPage            当前页码
     * @param int    $limit                  每页条数
     *
     * @throws \Eelly\SDK\Service\Exception\ContractNumberException
     *
     * @return array 列表信息
     * @requestExample({"condition":{"number":"合同编号","versionNo":"版本号","status":0}})
     * @returnExample({"item":[{"scnId":1,"number":"合同编号","status":0,"versionNo":1}],"page":{"totalPages":1,"totalItems":1,"limit":1}})
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-08
     */
    public function listContractNumberPage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('service/contractNumber', __FUNCTION__, true, $condition, $currentPage, $limit);
    }

    /**
     * 获取合同编号列表.
     *
     * @param array  $condition              查询条件
     * @param string $condition['number']    合同编号
     * @param string $condition['versionNo'] 版本号
     * @param int    $condition['status']    编号状态
     * @param int    $currentPage            当前页码
     * @param int    $limit                  每页条数
     *
     * @throws \Eelly\SDK\Service\Exception\ContractNumberException
     *
     * @return array 列表信息
     * @requestExample({"condition":{"number":"合同编号","versionNo":"版本号","status":0}})
     * @returnExample({"item":[{"scnId":1,"number":"合同编号","status":0,"versionNo":1}],"page":{"totalPages":1,"totalItems":1,"limit":1}})
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-08
     */
    public function listContractNumberPageAsync(array $condition = [], int $currentPage = 1, int $limit = 10)
    {
        return EellyClient::request('service/contractNumber', __FUNCTION__, false, $condition, $currentPage, $limit);
    }

    /**
     * 解绑合同编号.
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
    public function unbindContractNumber(int $scnId, UidDTO $user = null): bool
    {
        return EellyClient::request('service/contractNumber', __FUNCTION__, true, $scnId, $user);
    }

    /**
     * 解绑合同编号.
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
    public function unbindContractNumberAsync(int $scnId, UidDTO $user = null)
    {
        return EellyClient::request('service/contractNumber', __FUNCTION__, false, $scnId, $user);
    }

    /**
     * @return self
     */
    public static function getInstance(): self
    {
        static $instance;
        if (null === $instance) {
            $instance = new self();
        }

        return $instance;
    }
}